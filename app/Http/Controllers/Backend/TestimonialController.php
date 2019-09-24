<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\TestimonialRequest;
use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all dta from testimonial model
        $data['testimonials']=Testimonial::all();
        //send to view using compact method
        return view('backend.testimonial.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        $request->request->add(['created_by' => Auth::user()->id]);
        if (!empty($request->has('photo'))) {
            //dd($request->all());
            $testimonial_image = $request->file('photo');

            $image_name = uniqid() . '.' . $testimonial_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/testimonial');
            $testimonial_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $testimonial = Testimonial::create($request->all());

        if ($testimonial) {
            $request->session()->flash('success_message', 'Testimonial created Successfully');
            return redirect()->route('testimonial.index');

        }else{
            $request->session()->flash('error_message','Testimonial created Failed');
            return redirect()->route('testimonial.create');

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
        $data['testimonial']=Testimonial::find($id);
        return view('backend.testimonial.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['testimonial']=Testimonial::find($id);
        return view('backend.testimonial.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, $id)
    {
        $request->request->add(['updated_by'=>Auth::user()->id]);
        if ($request->file('photo')){
            $testimonial_image = $request->file('photo');

            $image_name = uniqid().'.'.$testimonial_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/testimonial');
            $testimonial_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $testimonial=Testimonial::find($id);
        if ($testimonial->update($request->all())) {
            $request->session()->flash('success_message', 'Testimonial Updated Successfully');


        }else{
            $request->session()->flash('error_message','Testimonial updated Failed');
        }
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $testimonial=Testimonial::find($id);
        if ($testimonial->delete()) {
            $request->session()->flash('success_message', 'Category Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Category Deleted Failed');
        }
        return redirect()->route('testimonial.index');
    }
}
