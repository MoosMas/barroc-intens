<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('pages.admin.contacts.index', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.contacts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = new Contact();
        $contacts->name = $request->name;
        $contacts->company_name = $request->company_name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->message = $request->message;
        $contacts->save();
        
        return redirect()
            ->route('home')
            ->with('success', 'Contactaanvrag succesvol verstuurd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts = Contact::find($id);

        return view('pages.admin.contacts.show', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('pages/admin/contacts/edit',[
            'contact' => $contact
        ]);
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
        $contacts = Contact::findOrFail($id);
        $contacts->name = $request->name;
        $contacts->company_name = $request->company_name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->message = $request->message;
        $contacts->handled_at = $request->handled_at;
        $contacts->save();

        return redirect()
            ->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
