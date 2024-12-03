<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $formField = $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($formField);

        return redirect('/');
    }


    /**
     * Display the Login Page.
     */
    public function login(){
        return view('Login');
    }


    public function login_into(Request $request){
        $formField = $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formField)){
            $request->session()->regenerate();

            return redirect('/');
        }
            return redirect('/registeration');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/registeration');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
