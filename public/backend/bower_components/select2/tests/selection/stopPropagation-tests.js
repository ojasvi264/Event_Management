module('Selection containers - Stoping category propagation');

var SingleSelection = require('select2/selection/single');
var StopPropagation = require('select2/selection/stopPropagation');

var $ = require('jquery');
var Options = require('select2/options');
var Utils = require('select2/utils');

var CutomSelection = Utils.Decorate(SingleSelection, StopPropagation);

var options = new Options();

test('click category does not propagate', function (assert) {
  assert.expect(1);

  var $container = $('#qunit-fixture .category-container');
  var container = new MockContainer();

  var selection = new CutomSelection($('#qunit-fixture select'), options);

  var $selection = selection.render();
  selection.bind(container, $container);

  $container.append($selection);
  $container.on('click', function () {
    assert.ok(false, 'The click category should have been stopped');
  });

  $selection.trigger('click');

  assert.ok(true, 'Something went wrong if this failed');
});
