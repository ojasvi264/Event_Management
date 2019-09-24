<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\GalleryRequest;
use App\Model\Event;
use App\Model\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galleries']=Gallery::all();
//        dd($data);
        //send to view using compact method
        return view('backend.gallery.index', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['events'] = Event::pluck('name', 'id');
        return view('backend.gallery.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $request->request->add(['created_by' => Auth::user()->id]);
        if (!empty($request->has('photo'))) {
            //dd($request->all());
            $gallery_image = $request->file('photo');

            $image_name = uniqid() . '.' . $gallery_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $gallery_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $gallery = Gallery::create($request->all());

        if ($gallery) {
            $request->session()->flash('success_message', 'Gallery created Successfully');
            return redirect()->route('gallery.index');

        }else{
            $request->session()->flash('error_message','Gallery created Failed');
            return redirect()->route('gallery.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data['gallery']=Gallery::find($id);
       // dd($data);
        return view('backend.gallery.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['events'] = Event::pluck('name', 'id');
        $data['gallery']=Gallery::find($id);
        return view('backend.gallery.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        //dd($request->all());
        $request->request->add(['updated_by'=>Auth::user()->id]);
        if ($request->file('photo')){
            $gallery_image = $request->file('photo');

            $image_name = uniqid().'.'.$gallery_image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $gallery_image->move($destinationPath, $image_name);
            $request->request->add(['image' => $image_name]);
        }


        $gallery=Gallery::find($id);
        if ($gallery->update($request->all())) {
            $request->session()->flash('success_message', 'Gallery Updated Successfully');


        }else{
            $request->session()->flash('error_message','Gallery updated Failed');
        }
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $gallery=Gallery::find($id);
        if ($gallery->delete()) {
            $request->session()->flash('success_message', 'Gallery Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Gallery Deleted Failed');
        }
        return redirect()->route('gallery.index');
    }
}

