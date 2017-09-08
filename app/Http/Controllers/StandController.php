<?php

namespace App\Http\Controllers;

use App\Stand;
use App\Event;
use App\Analytic;
use Illuminate\Http\Request;

class StandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        return Stand::where('event_id', '=', $event->id)->with('company')->with('event')->get();
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
     * @param  \App\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function show(Stand $stand)
    {
        // Record user visit
        $analytic = Analytic::firstOrCreate(
            ['stand_id' => $stand->id],
            ['visits' => 0]
        );
        $analytic->visits++;
        $analytic->save();

        // Display Stand info
        return view('stand', compact('stand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function edit(Stand $stand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stand $stand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stand  $stand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stand $stand)
    {
        //
    }
}
