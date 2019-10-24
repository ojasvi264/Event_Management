<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Booking;
use App\Model\Category;
use App\Model\Configuration;
use App\Model\Contact;
use App\Model\Event;
use App\Model\Gallery;
use App\Model\Page;
use App\Model\Service;
use App\Model\Slider;
use App\Model\Team;
use App\Model\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    function index()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['categories'] = Category::where('status', 1)->orderby('rank')->get();
        $data['testimonials'] = Testimonial::all();
        $data['sliders'] = Slider::where('status', 1)->limit(5)->get();
        $data['services'] = Service::limit(4)->get();
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
//        $data['welcome'] = Page::where('name', 'Welcome')->get();
        return view('frontend.front.index', compact('data'));
    }

//    function current_page($uri ="/")
//    {
//        return request()->path() ==$uri;
//    }
//
    function event()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['events'] = Event::where('status', 1)->paginate(6);
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.event', compact('data'));
    }
    function event_detail($id)
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['event'] = Event::find($id);
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.event_detail', compact('data'));
    }

    function past_event()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['past_events'] = Event::where('date', '<=', Carbon::now()->toDateString())->get();
        $data['latest_events'] = Event::where('status', 1)->orderby('date', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.past_event', compact('data'));
    }

    function upcomming_event()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['upcomming_events'] = Event::where('date', '>=', Carbon::now()->toDateString())->get();
        $data['latest_events'] = Event::where('status', 1)->orderby('date', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.upcomming_event', compact('data'));
    }
    function gallery()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['galleries'] = Gallery::where('status', 1)->orderby('rank')->paginate(6);
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.gallery', compact('data'));
    }

    function contact()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['contacts'] = Contact::all();
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.contact', compact('data'));
    }

    function contact_store(Request $request)
    {
//        $request->request->add(['created_by' => Auth::user()->id]);
        //dd($request->all());
        $contact = Contact::create($request->all());
        if ($contact) {
            $request->session()->flash('success_message', 'Contact created Successfully');
            return redirect()->route('frontend.contact');

        } else {
            $request->session()->flash('error_message', 'Contact created Failed');
//            return redirect()->route('booking.index');

        }
    }

    function about()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['content'] = Page::where('name', 'About Us')->get();
        $data['teams'] = Team::all();
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.about', compact('data'));
    }

    function faq()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['faq'] = Page::where('name', 'FAQ')->get();
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.faq', compact('data'));
    }

    function terms()
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['terms'] = Page::where('name', 'TC')->get();
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.terms', compact('data'));
    }

    function category($id)
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['categories'] = Category::where('status', 1)->orderby('rank')->get();
        $data['category'] = Category::where('id', $id)->get();
        $data['events'] = Event::where('category_id', $data['category'][0]->id)->where('status', 1)->paginate(4);
        $data['services'] = Event::where('category_id', $data['category'][0]->id)->paginate(4);
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.category', compact('data'));

    }

    function service($id)
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['services'] = Service::get();
        $data['service'] = Service::where('id', $id)->get();
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        return view('frontend.front.service', compact('data'));
    }

    function store(Request $request)
    {
//
//        $data  = [
//            'id' => $request->input('event_id')->get(),
//        ];
//        $booking = \App\Model\Event::find($event->id);
//        $booking = Booking::add($data);
//        $request->request->add(['event_id'=>Event::event()->id]);
        $booking = Booking::create($request->all());
//        $event = Event::find($id);
        if ($booking) {
            $request->session()->flash('success_message', 'Booking created Successfully');
            return redirect()->route('frontend.event');

        } else {
            $request->session()->flash('error_message', 'Booking created Failed');
//            return redirect()->route('booking.index');

        }
    }

    public function search(Request $request)
    {
        $data = [];
        $data['configurations'] = Configuration::first();
        $data['latest_events'] = Event::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        $data['about'] = Page::where('name', 'About Us')->get();
        $search = $request->get('search');
//        $events = DB::table('events')->where('name', 'like', '%'.$search.'%');
//        $data['events']=Event::all();
        $data['events'] = Event::where('name', 'LIKE', '%'.$search.'%')->limit(2)->get();
        return view('frontend.front.search',compact('data'));
    }
}
