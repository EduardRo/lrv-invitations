<?php

namespace App\Http\Controllers;

use App\Models\Receiver;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Receiver $receiver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receiver $receiver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receiver $receiver)
    {
        //
    }
    // ------- 
    public function showForm1()
    {
        return view('form1');
    }

    public function showForm2(Request $request)
    {
        $type = $request->input('type');
        $options = $type === 'business' ? ['Option1', 'Option2', 'Option3'] : [];

        return view('form2', compact('options'));
    }

    public function submitForm(Request $request)
    {
        // Handle form submission and store data if needed
        // ...

        // Redirect back to Form1 with the selected business_name
        return redirect()->route('form1')->with('business_name', $request->input('business_name'));
    }
}
