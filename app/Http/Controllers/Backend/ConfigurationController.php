<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ConfigurationRequest;
use App\Model\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all dta from tag model
        $data['configurations']=Configuration::all();
        //send to view using compact method
        return view('backend.configuration.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.configuration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfigurationRequest $request)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $configuration=Configuration::create($request->all());
        if ($configuration) {
            $request->session()->flash('success_message', 'Configuration created Successfully');
            return redirect()->route('configuration.index');

        }else{
            $request->session()->flash('error_message','Configuration created Failed');
            return redirect()->route('configuration.create');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['configuration']=Configuration::find($id);
        return view('backend.configuration.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigurationRequest $request, $id)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $configuration=Configuration::find($id);
        if ($configuration->update($request->all())) {
            $request->session()->flash('success_message', 'Configuration Updated Successfully');


        }else{
            $request->session()->flash('error_message','Configuration updated Failed');
        }
        return redirect()->route('configuration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $configuration=Configuration::find($id);
        if ($configuration->delete()) {
            $request->session()->flash('success_message', 'Category Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Category Deleted Failed');
        }
        return redirect()->route('configuration.index');
    }
}
