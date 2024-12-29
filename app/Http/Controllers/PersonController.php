<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function index()
    {
        return view('AddUser');
    }


    public function create(Request $request)
    {
        $result = $request->all();

        $result['hobby'] = implode(',', $result['hobby']);

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('images', 'public');
            $result['img'] = $imagePath;
        }

        Person::create($result);
        return redirect('/login')->with('success', 'Registered Successfully');
    }

    public function login()
    {
        return view('Login');
    }

    public function checklogin(Request $request)
    {
        $result = $request->all();

        // Find a person with the matching email and password
        $person = Person::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($person) {
            session(['email' => $person->email]);
            return redirect('/home');
        }

        return redirect('/login')->with('success', 'Invalid username or password');
    }


    public function display()
    {
        $email = session('email');

        $res = Person::where('email', $email)->get();
        return view('/home')->with(compact('res'));
    }

    public function allData()
    {
        $emp = Person::get();
        return view('/allData')->with(compact('emp'));
    }

    public function delete($id)
    {
        Person::where("id", '=', $id)->delete();
        return redirect('/allData');
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
