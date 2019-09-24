<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\RoleRequest;
use App\Model\Module;
use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['roles'] = Role::all();
        return view('backend.role.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $request->request->add(['created_by' => Auth::user()->id]);
        $role = Role::create($request->all());
        if ($role) {
            $request->session()->flash('success_message', 'Role Created Successfully');
            return redirect()->route('role.index');
        } else
            $request->session()->flash('error_message', 'Role Creation Failed');
        return redirect()->route('role.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['role'] = Role::find($id);
        return view('backend.role.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['role'] = Role::find($id);
        return view('backend.role.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        $request->request->add(['created_by' => Auth::user()->id]);
        //dd($request->all());
        $role = Role::find($id);
        if ($role->update($request->all())) {
            $request->session()->flash('success_message', 'Role Updated Successfully');

        } else {
            $request->session()->flash('error_message', 'Role Updated Failed');
        }
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $role = Role::find($id);
        if ($role->delete()) {
            $request->session()->flash('success_message', 'Role Deleted Successfully');

        } else {
            $request->session()->flash('error_message', 'Role Deleted Failed');
        }
        return redirect()->route('role.index');
    }
    public function assignPermission($id)
    {
        $data['role'] = Role::find($id);
        $data['modules'] = Module::all();
        $data['permissions'] = array_column($data['role']->permissions()->get()->toArray(), 'id');
        return view('backend.role.assignpermission', compact('data'));

    }

    public function savePermission(Request $request, $id)
    {
        $data['role'] = Role::find($id);
        if ($data['role']->permissions()->sync($request->input('permission_id'))) {
            $request->session()->flash('success_message', 'Role Assigned Successfully');
        } else {
            $request->session()->flash('error_message', 'Role Assigned failed');
        }
        return redirect()->route('role.index');
    }
}
