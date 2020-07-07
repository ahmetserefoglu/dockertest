<?php

namespace App\Http\Controllers;

use App\Gorev;
use Illuminate\Http\Request;

class GorevController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gorev = Gorev::orderBy('created_at','desc')->get();

        return \response()->json($gorev);
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
     * @param  \App\Gorev  $gorev
     * @return \Illuminate\Http\Response
     */
    public function show(Gorev $gorev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gorev  $gorev
     * @return \Illuminate\Http\Response
     */
    public function edit(Gorev $gorev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gorev  $gorev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gorev $gorev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gorev  $gorev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gorev $gorev)
    {
        //
    }
}
