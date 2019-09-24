<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\PageRequest;
use App\Model\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all dta from page model
        $data['pages']=Page::all();
        //send to view using compact method
        return view('backend.page.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        dd($request);
        $request->request->add(['created_by' => Auth::user()->id]);
        if (!empty($request->has('photo'))) {
            //dd($request->all());
            $page_image = $request->file('photo');

            $image_name = uniqid() . '.' . $page_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/page');
            $page_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $page = Page::create($request->all());

        if ($page) {
            $request->session()->flash('success_message', 'Page created Successfully');
            return redirect()->route('page.index');

        }else{
            $request->session()->flash('error_message','Page created Failed');
            return redirect()->route('page.create');

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
        $data['page']=Page::find($id);
        return view('backend.page.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page']=Page::find($id);
        return view('backend.page.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        //dd($request->all());
        $request->request->add(['updated_by'=>Auth::user()->id]);
        if ($request->file('photo')){
            $page_image = $request->file('photo');

            $image_name = uniqid().'.'.$page_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/page');
            $page_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $page=Page::find($id);
        if ($page->update($request->all())) {
            $request->session()->flash('success_message', 'Page Updated Successfully');


        }else{
            $request->session()->flash('error_message','Page updated Failed');
        }
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $page=Page::find($id);
        if ($page->delete()) {
            $request->session()->flash('success_message', 'Page Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Page Deleted Failed');
        }
        return redirect()->route('page.index');
    }
}
