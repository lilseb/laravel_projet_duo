<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\back;
use Illuminate\Http\Request;

class BackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article =  Article::all();
        return view('/pages.back',compact('article'));
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
     * @param  \App\Models\back  $back
     * @return \Illuminate\Http\Response
     */
    public function show(back $back)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\back  $back
     * @return \Illuminate\Http\Response
     */
    public function edit(back $back)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\back  $back
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, back $back)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\back  $back
     * @return \Illuminate\Http\Response
     */
    public function destroy(back $back)
    {
        //
    }
}
