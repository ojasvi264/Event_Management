<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\UserRequest;
use App\Model\Role;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users']=User::all();
        $data['roles']=Role::all();
        return view('backend.user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::pluck('name','id');
        //$data['roles']=Role::all();
        return view('backend.user.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $user=User::create($request->all());
        if ($user) {
            $request->session()->flash('success_message', 'User created Successfully');
            return redirect()->route('user.index');

        }else{
            $request->session()->flash('error_message','User created Failed');
            return redirect()->route('user.create');

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
        $data['user']=User::find($id);
        return view('backend.user.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['roles'] = Role::pluck('name','id');
        // $data['roles']=Role::all();
        $data['user']=User::find($id);
        return view('backend.user.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $user=Permission::find($id);
        if ($user->update($request->all())) {
            $request->session()->flash('success_message', 'User Updated Successfully');

        }else{
            $request->session()->flash('error_message','User Updated Failed');
        }
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $user=User::find($id);
        if ($user->delete()) {
            $request->session()->flash('success_message', 'User Deleted Successfully');

        }else{
            $request->session()->flash('error_message','User Deleted Failed');
        }
        return redirect()->route('user.index');
    }
}
