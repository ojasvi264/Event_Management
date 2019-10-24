<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\BookingRequest;
use App\Model\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //fetch all dta from booking model
        $data['bookings']=Booking::all();
        //send to view using compact method
        return view('backend.booking.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $booking=Booking::create($request->all());
        if ($booking) {
            $request->session()->flash('success_message', 'Booking Saved Successfully');
            return redirect()->route('booking.index');

        }else{
            $request->session()->flash('error_message','Booking created Failed');
            return redirect()->route('booking.create');

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
        $data['booking']=Booking::find($id);
        return view('backend.booking.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['booking']=Booking::find($id);
        return view('backend.booking.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request, $id)
    {

        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $booking=Booking::find($id);
        if ($booking->update($request->all())) {
            $request->session()->flash('success_message', 'Booking Updated Successfully');


        }else{
            $request->session()->flash('error_message','Booking updated Failed');
        }
        return redirect()->route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $booking=Booking::find($id);
        if ($booking->delete()) {
            $request->session()->flash('success_message', 'Booking Saved Successfully');

        }else{
            $request->session()->flash('error_message','Booking Deleted Failed');
        }
        return redirect()->route('booking.index');
    }
}
