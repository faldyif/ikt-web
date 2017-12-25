<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Custom class
use App\User;
use App\Event;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('id');
        $event = Event::all();
        return view('admin.event.index')->with('event', $event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'event' => 'required',
            'thumbnail' => 'required|image',
            'subject' => 'required',
            'place' => 'required',
            'event_date_time' => 'required|date'
        ]);

        $event = new Event;
        $event->event = $request->event;
        $event->subject = $request->subject;
        $event->place = $request->place;
        $event->event_date_time = $request->event_date_time;
        $event->user_id = Auth::user()->id;
        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $destinationPath = 'public/event_thumbs';
            $extension = $request->thumbnail->extension();
            $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
            $request->thumbnail->storeAs($destinationPath, $fileName);
            $event->thumbnail_path = $fileName;
        }
        $event->save();

        Session::flash('message', 'Event berhasil dipublikasikan! Anda dapat mempublikasikannya langsung ke sosial media melalui <a>link ini</a>');
        return redirect('admin/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.event.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.edit')->with('event', $event);
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $event = Event::find($id);
        $event->title = $request->title;
        $event->content = $request->content;
        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $destinationPath = 'public/event_thumbs';
            $extension = $request->thumbnail->extension();
            $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
            $request->thumbnail->storeAs($destinationPath, $fileName);
            $event->thumbnail_path = $fileName;
        }
        $event->touch();

        Session::flash('message', 'Berita berhasil diedit!');
        return redirect('admin/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        Session::flash('message', 'Berita berhasil dihapus!');
        return redirect('admin/event');
    }
}
