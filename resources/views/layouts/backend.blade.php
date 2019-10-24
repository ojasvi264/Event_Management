<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{route('home')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Ecommerce</b>Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown tasks-menu">

                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                                <p>
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                    <small>{{\Illuminate\Support\Facades\Auth::user()->created_at}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ route('backend.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a class="dropdown-item btn btn-info" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    {{--<li>--}}
                        {{--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{\Illuminate\Support\Facades\Auth::user()->name}} </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="{{route('event.search')}}" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search events....">
                    <span class="input-group-btn">
                <button type="submit" name="" id="" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>

            {{--<div class="box-body">--}}
        {{--<table class="table table-stripped">--}}
        {{--<thead>--}}
        {{--<tr>--}}
        {{--<th>SN</th>--}}
        {{--<th>Name</th>--}}
        {{--<th>Title</th>--}}
        {{--<th>Action</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@php($i=1)--}}
        {{--@foreach($data['events'] as $event)--}}
        {{--<tr>--}}
        {{--<td>{{$i++}}</td>--}}
        {{--<td>{{$data['events']->name}}</td>--}}
        {{--<td>{{$data['events']->title}}</td>--}}
        {{--<td>--}}
        {{--<a href="{{route('event.show',$event->id)}}" class="btn btn-info">--}}
        {{--<i class="fa fa-eye"></i>--}}
        {{--View--}}
        {{--</a>--}}
        {{--<a href="{{route('event.edit',$event->id)}}" class="btn btn-warning">--}}
        {{--<i class="fa fa-pencil"></i>--}}
        {{--Edit--}}
        {{--</a>--}}
        {{--<form action="{{route('event.destroy',$event->id)}}" method="post"--}}
        {{--onsubmit="return confirm('Are you sure?')">--}}
        {{--@csrf--}}
        {{--<input type="hidden" name="_method" value="DELETE"/>--}}
        {{--<button class="btn-danger"><i class="fa fa-trash"></i>Delete</button>--}}
        {{--</form>--}}
        {{--</td>--}}
        {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
        {{--</table>--}}
            {{--</div>--}}
            <!-- /.search form -->



            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="{{route('home')}}"><i class="fa fa-dashboard "></i> <span>Dashboard</span></a></li>

                {{--<li class="treeview">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-files-o"></i>--}}
                        {{--<span>Tag Management</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="{{route('tag.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>--}}
                        {{--<li><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i> List</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Category Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('category.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('category.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Event Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('event.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('event.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                {{--<li class="treeview">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-files-o"></i>--}}
                        {{--<span>Booking Management</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="{{route('booking.create')}}"><i class="fa fa-plus"></i> Create</a></li>--}}
                        {{--<li><a href="{{route('booking.index')}}"><i class="fa fa-list"></i> List</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="treeview">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-files-o"></i>--}}
                        {{--<span>Contact Management</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="{{route('contact.create')}}"><i class="fa fa-plus"></i> Create</a></li>--}}
                        {{--<li><a href="{{route('contact.index')}}"><i class="fa fa-list"></i> List</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Gallery Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('gallery.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('gallery.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Module Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('module.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('module.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Permission Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('permission.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('permission.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Role Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('role.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('role.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Slider Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('slider.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('slider.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Service Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('service.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('service.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Testimonial Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('testimonial.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('testimonial.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Team Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('team.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('team.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>User Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('user.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('user.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Page Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('page.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('page.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Configuration Management</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('configuration.create')}}"><i class="fa fa-plus"></i> Create</a></li>
                        <li><a href="{{route('configuration.index')}}"><i class="fa fa-list"></i> List</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright {{date('Y')}} <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
    </form>
</div>
<!-- /.tab-pane -->
</div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
@yield('js')
</body>
</html>
