<?php

namespace App\Http\Controllers;

use App\priorities;
use Illuminate\Http\Request;

class PrioritiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = [];


        $priorities = priorities::find(1);
        foreach($priorities->projects as $project){
            array_push($array,$project);
        }


        return $array;
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
     * @param  \App\priorities  $priorities
     * @return \Illuminate\Http\Response
     */
    public function show(priorities $priorities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\priorities  $priorities
     * @return \Illuminate\Http\Response
     */
    public function edit(priorities $priorities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\priorities  $priorities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, priorities $priorities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\priorities  $priorities
     * @return \Illuminate\Http\Response
     */
    public function destroy(priorities $priorities)
    {
        //
    }
}
