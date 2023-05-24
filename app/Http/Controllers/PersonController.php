<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{


    public function index()
    {
        $persons = Person::all();
        return view('person', ['persons'=> $persons]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('person_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $person = new Person;

            $person->name = $request->name;
            $person->email = $request->email;

            $person->save();

        if($person){
            return redirect()->back()->with('message', 'Sucessfully created');
        }

        return redirect()->back()->with('mesage', 'Erro created');
    }

    /**
     * Display the specified resource.
     */
    public function show(person $person)
    {
        return view('person_show', ['person'=>$person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);

        return view('person_edit', ['person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, person $person)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $person->update($request->all());

        return redirect()->route('persons.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Person::findOrFail($id)->delete();

        return redirect()->route('persons.index')->with('message', 'Sucessfully Deleted');
    }
}
