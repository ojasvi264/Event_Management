<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ContactRequest;
use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all dta from category model
        $data['contacts']=Contact::all();
        //send to view using compact method
        return view('backend.contact.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $contact=Contact::create($request->all());
        if ($contact) {
            $request->session()->flash('success_message', 'Contact created Successfully');
            return redirect()->route('contact.index');

        }else {
            $request->session()->flash('error_message', 'Contact created Failed');
            return redirect()->route('contact.create');
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
        $data['contact']=Contact::find($id);
        return view('backend.contact.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['contact']=Contact::find($id);
        return view('backend.contact.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id)
    {
        $request->request->add(['created_by'=>Auth::user()->id]);
        //dd($request->all());
        $contact=Contact::find($id);
        if ($contact->update($request->all())) {
            $request->session()->flash('success_message', 'Contact Updated Successfully');


        }else{
            $request->session()->flash('error_message','Contact updated Failed');
        }
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $contact=Contact::find($id);
        if ($contact->delete()) {
            $request->session()->flash('success_message', 'Contact Deleted Successfully');

        }else{
            $request->session()->flash('error_message','Contact Deleted Failed');
        }
        return redirect()->route('contact.index');
    }
}
