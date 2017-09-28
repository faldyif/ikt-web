<?php

namespace App\Http\Controllers\Admin;

use App\PressRelease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pressReleases = PressRelease::all();
        return view('admin.press-release.index')
            ->with('pressReleases', $pressReleases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.press-release.create');
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
            'title' => 'required',
            'content' => 'required'
        ]);

        $pressRelease = new PressRelease;

        $pressRelease->title = $request->title;
        $pressRelease->content = $request->content;
        $pressRelease->save();

        Session::flash('message', 'Press Release berhasil diposkan!');
        return redirect(route('press-release.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pressRelease = PressRelease::find($id);
        return view('admin.press-release.edit')
            ->with('pressRelease', $pressRelease);
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

        $pressRelease = PressRelease::find($id);

        $pressRelease->title = $request->title;
        $pressRelease->content = $request->content;
        $pressRelease->touch();

        Session::flash('message', 'Press Release berhasil diedit!');
        return redirect(route('press-release.index'));
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
