<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\PermissionRequest;
use App\Model\Module;
use App\Model\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['permissions']=Permission::all();
        $data['modules']=Module::all();
        return view('backend.permission.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['modules'] = Module::pluck('name','id');
        return view('backend.permission.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $permission=Permission::create($request->all());
        if ($permission) {
            $request->session()->flash('success_message', 'Permission created Successfully');
            return redirect()->route('permission.index');

        }else{
            $request->session()->flash('error_message','Permission created Failed');
            return redirect()->route('permission.create');

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
        $data['modules'] = Module::pluck('name','id');
        $data['permission']=Permission::find($id);
        return view('backend.permission.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['modules'] = Module::pluck('name','id');
        $data['permission']=Permission::find($id);
        return view('backend.permission.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, $id)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $permission=Permission::find($id);
        if ($permission->update($request->all())) {
            $request->session()->flash('success_message', 'Permission Updated Successfully');

        }else{
            $request->session()->flash('error_message','Permission Updated Failed');
        }
        return redirect()->route('permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $permission=Permission::find($id);
        if ($permission->delete()) {
            $request->session()->flash('success_message', 'Permission Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Permission Deleted Failed');
        }
        return redirect()->route('permission.index');
    }
}
