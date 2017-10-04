<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\UploadPhotoRequest;
use App\Http\Controllers\Controller;

// Custom class
use App\User;
use App\Album;
use App\AlbumPhoto;
use Illuminate\Support\Facades\Storage;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('id');
        $album = Album::all();
        return view('admin.album.index')->with('album', $album);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UploadRequest|UploadPhotoRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadPhotoRequest $request)
    {
        $album = Album::create([
            'title' => $request->title,
            'user_id' => Auth::user()->id,
            'description' => $request->description
        ]);
        foreach ($request->photos as $photo) {
            $image = $photo;
            $filename = 'image_'.time().'_'.$image->hashName();
            $image->move(public_path('storage/album_photos'), $filename);
            $filename = 'album_photos/' . $filename;
            
            AlbumPhoto::create([
                'album_id' => $album->id,
                'user_id' => Auth::user()->id,
                'filename' => $filename
            ]);
        }

        Session::flash('message', 'Album berhasil dibuat! Anda dapat menambah maupun mengedit isi fotonya melalui <a>link ini</a>');
        return redirect(route('album.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.album.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('admin.album.edit')->with('album', $album);
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
            'description' => 'required'
        ]);

        $album = Album::find($id);
        $album->title = $request->title;
        $album->description = $request->description;
        $album->touch();

        Session::flash('message', 'Album berhasil diedit!');
        return redirect(route('album.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::destroy($id);
        Session::flash('message', 'Album berhasil dihapus!');
        return redirect(route('album.index'));
    }
}
