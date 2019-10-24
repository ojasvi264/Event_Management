<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\SliderRequest;
use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders']=Slider::all();
        return view('backend.slider.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        if (!empty($request->has('photo'))) {
            $slider_image = $request->file('photo');

            $image_name = uniqid() . '.' . $slider_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/slider');
            $slider_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }
        //  dd($request->all());
        //insert into category table using Category model
        $request->request->add(['created_by' =>Auth::user()->id]);
        $slider =Slider::create($request->all());

        if ($slider){
            $request->session()->flash('success_message','Slider Created Successfully');
            return redirect()->route('slider.index');
        }else{
            $request->session()->flash('error_message','Slider Creation Failed');
            return redirect()->route('slider.create');
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
        $data['slider']=Slider::find($id);
        $data['sliders']=Slider::where('id', $id)->get();
        return view('backend.slider.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['slider']=Slider::find($id);
        return view('backend.slider.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $request->request->add(['updated_by' =>Auth::user()->id]);
        //  dd($request->all());
        if ($request->file('photo')) {
            $slider_image = $request->file('photo');

            $image_name = uniqid() . '.' . $slider_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/sliders');
            $slider_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }

        //insert into tag table using Tag model
        $slider =Slider::find($id);
        if ($slider->update($request->all())){
            $request->session()->flash('success_message','Slider Updated Successfully');

        }else{
            $request->session()->flash('error_message','Slider Updated Failed');

        }
        return redirect()->route('slider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $slider=Slider::find($id);
        if ($slider->delete()) {
            $request->session()->flash('success_message', 'Slider Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Slider Deleted Failed');
        }
        return redirect()->route('slider.index');
    }
}
