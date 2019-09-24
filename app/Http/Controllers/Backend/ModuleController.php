<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ModuleRequest;
use App\Model\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['modules']=Module::all();
        return view('backend.module.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModuleRequest $request)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $module=Module::create($request->all());
        if ($module) {
            $request->session()->flash('success_message', 'Module created Successfully');
            return redirect()->route('module.index');

        }else{
            $request->session()->flash('error_message','Module created Failed');
            return redirect()->route('module.create');

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
        $data['module']=Module::find($id);
        return view('backend.module.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['module']=Module::find($id);
        return view('backend.module.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $module=Module::find($id);
        if ($module->update($request->all())) {
            $request->session()->flash('success_message', 'Module Updated Successfully');

        }else{
            $request->session()->flash('error_message','Module Updated Failed');
        }
        return redirect()->route('module.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $module=Module::find($id);
        if ($module->delete()) {
            $request->session()->flash('success_message', 'Module Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Module Deleted Failed');
        }
        return redirect()->route('module.index');
    }
}
