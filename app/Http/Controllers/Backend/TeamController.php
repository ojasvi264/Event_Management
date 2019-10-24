<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\TeamRequest;
use App\Model\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all dta from team model
        $data['teams']=Team::all();
        //send to view using compact method
        return view('backend.team.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $request->request->add(['created_by' => Auth::user()->id]);
        if (!empty($request->has('photo'))) {
            //dd($request->all());
            $team_image = $request->file('photo');

            $image_name = uniqid() . '.' . $team_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/team');
            $team_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $team = Team::create($request->all());

        if ($team) {
            $request->session()->flash('success_message', 'Team created Successfully');
            return redirect()->route('team.index');

        }else{
            $request->session()->flash('error_message','Team created Failed');
            return redirect()->route('team.create');

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
        $data['team']=Team::find($id);
        $data['teams']=Team::where('id', $id)->get();
        return view('backend.team.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['team']=Team::find($id);
        return view('backend.team.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        $request->request->add(['updated_by'=>Auth::user()->id]);
        if ($request->file('photo')){
            $team_image = $request->file('photo');

            $image_name = uniqid().'.'.$team_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/team');
            $team_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $team=Team::find($id);
        if ($team->update($request->all())) {
            $request->session()->flash('success_message', 'Team Updated Successfully');


        }else{
            $request->session()->flash('error_message','Team updated Failed');
        }
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $team=Team::find($id);
        if ($team->delete()) {
            $request->session()->flash('success_message', 'Team Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Team Deleted Failed');
        }
        return redirect()->route('team.index');
    }
}
