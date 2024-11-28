<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tests;

class testController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view()
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $formField = $request -> validate([
         'meter_name' => 'required',
         'address' => 'required',
         'meter_token'  => 'required',
         'email'  => 'required',
        ]);

        tests::create($formField);
    }

    public function show_edit(){

        $names = tests::latest()->get();

        return view('display', [
           'names' => $names
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(tests $id)
    {
        // dd($id);
        return view('edit', [
            'content' => $id
        ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tests $id)
    {
            // dd($request->all());

        $formField = $request->validate([
            'meter_name' => 'required',
            'address' => 'required',
            'meter_token'  => 'required',
            'email'  => 'required',
        ]);

        $id -> update($formField);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tests $id)
    {
        $id->delete();
    }
}
