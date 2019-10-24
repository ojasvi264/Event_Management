<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\EventRequest;
use App\Model\Category;
use App\Model\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all dta from tag model
        $data['events']=Event::all();
        //send to view using compact method
        return view('backend.event.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::pluck('name', 'id');
        return view('backend.event.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
       // dd($request);
        $request->request->add(['created_by' => Auth::user()->id]);
        if (!empty($request->has('photo'))) {
            //dd($request->all());
            $event_image = $request->file('photo');

            $image_name = uniqid() . '.' . $event_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/event');
            $event_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $event = Event::create($request->all());

        if ($event) {
            $request->session()->flash('success_message', 'Event created Successfully');
            return redirect()->route('event.index');

        }else{
            $request->session()->flash('error_message','Event created Failed');
            return redirect()->route('event.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['event']=Event::find($id);
        $data['events']=Event::where('id', $id)->get();
        return view('backend.event.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Category::pluck('name', 'id');
        $data['event']=Event::find($id);
        return view('backend.event.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        //dd($request->all());
        $request->request->add(['updated_by'=>Auth::user()->id]);
        if ($request->file('photo')){
            $event_image = $request->file('photo');

            $image_name = uniqid().'.'.$event_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/event');
            $event_image->move($destinationPath, $image_name);
            $request->request->add(['photo' => $image_name]);
        }


        $event=Event::find($id);
        if ($event->update($request->all())) {
            $request->session()->flash('success_message', 'Event Updated Successfully');


        }else{
            $request->session()->flash('error_message','Event updated Failed');
        }
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $event=Event::find($id);
        if ($event->delete()) {
            $request->session()->flash('success_message', 'Event Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Event Deleted Failed');
        }
        return redirect()->route('event.index');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
//        $events = DB::table('events')->where('name', 'like', '%'.$search.'%');
//        $data['events']=Event::all();
        $data['events'] = Event::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('backend.event.search',compact('data'));
    }
}

