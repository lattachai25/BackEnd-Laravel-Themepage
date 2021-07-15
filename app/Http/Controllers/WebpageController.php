<?php

namespace App\Http\Controllers;

use App\webpage;
use Illuminate\Http\Request;

class WebpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('.component.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\webpage  $webpage
     * @return \Illuminate\Http\Response
     */
    public function show(webpage $webpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\webpage  $webpage
     * @return \Illuminate\Http\Response
     */
    public function edit(webpage $webpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\webpage  $webpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, webpage $webpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\webpage  $webpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(webpage $webpage)
    {
        //
    }
}
