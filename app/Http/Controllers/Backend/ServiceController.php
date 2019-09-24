<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ServiceRequest;
use App\Model\Category;
use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services']=Service::all();
        return view('backend.service.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::pluck('name','id');
        return view('backend.service.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $request->request->add(['created_by' => Auth::user()->id]);
        if (!empty($request->has('photo'))) {
            //dd($request->all());
            $service_image = $request->file('photo');

            $image_name = uniqid() . '.' . $service_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/service');
            $service_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $service = Service::create($request->all());

        if ($service) {
            $request->session()->flash('success_message', 'Service created Successfully');
            return redirect()->route('service.index');

        }else{
            $request->session()->flash('error_message','Service created Failed');
            return redirect()->route('service.create');

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
        $data['service']=Service::find($id);
        return view('backend.service.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Category::pluck('name','id');
        $data['service']=Service::find($id);
        return view('backend.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        //dd($request->all());
        $request->request->add(['updated_by'=>Auth::user()->id]);
        if ($request->file('photo')){
            $service_image = $request->file('photo');

            $image_name = uniqid().'.'.$service_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/service');
            $service_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $service=Service::find($id);
        if ($service->update($request->all())) {
            $request->session()->flash('success_message', 'Service Updated Successfully');


        }else{
            $request->session()->flash('error_message','Service updated Failed');
        }
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $service=Service::find($id);
        if ($service->delete()) {
            $request->session()->flash('success_message', 'Service Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Service Deleted Failed');
        }
        return redirect()->route('service.index');
    }
}
