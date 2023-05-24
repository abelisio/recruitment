<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact', ['contacts'=> $contacts]);


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts_create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
         $contact = new Contact;

            $contact->countrycodes = $request->countrycodes;
            $contact->number = $request->number;

            $contact->save();

        if($contact){
            return redirect()->back()->with('message', 'Sucessfully created');
        }

        return redirect()->back()->with('mesage', 'Erro created');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        return view('contacts_show', [' 89'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contact_edit', ['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        $request->validate([
            'countrycodes' => 'required',
            'number' => 'required',
        ]);

        $contact->update($request->all());

        return redirect()->route('contact.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()->route('contacts.index')->with('message', 'Sucessfully Deleted');
    }
}
