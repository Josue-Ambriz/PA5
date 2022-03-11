<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarEvent;

class CalendarEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = CalendarEvents::select('title', 'begin AS start', 'finish AS end')->get();
        return json_encode( compact('events')['events'] );
    } 

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calendarevent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated = $request->validate([ 
           'title' => 'required',
           'begin' => 'required',
           'finish' => 'required',
        ]);
        
       $calendar = CalendarEvent::create([
            'title' => $request->title,
            'begin' => date($request->begin), 
            'finish' => date($request->finish),
            //'begin' => $request->begin.$request->offset,
            //'finish' => $request->finish.$request->offset,
        ]);
        
        return redirect('/calendar');
        //return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $events = CalendarEvent::find($id);
        return view('calendarevent.show',compact('calendar'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
