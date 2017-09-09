<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use App\AlbumPhoto;
use App\Http\Requests\UploadOnlyPhotoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $album = Album::find($id);
        $albumPhotos = AlbumPhoto::where('album_id', $id)->get();
        return view('admin.album.photo.index')
            ->with('album', $album)
            ->with('albumPhotos', $albumPhotos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $album = Album::find($id);
        return view('admin.album.photo.create')
            ->with('album', $album);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UploadOnlyPhotoRequest|Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function store(UploadOnlyPhotoRequest $request, $id)
    {
        foreach ($request->photos as $photo) {
            $filename = $photo->store('album_photos');
            Storage::move($filename, 'public/' . $filename);
            AlbumPhoto::create([
                'album_id' => $id,
                'user_id' => Auth::user()->id,
                'filename' => $filename
            ]);
        }

        Session::flash('message', 'Foto berhasil ditambahkan!');
        return redirect(route('photo.index', $id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
    public function destroy($id, $idPhoto)
    {
        AlbumPhoto::destroy($id);
        Session::flash('message', 'Foto berhasil dihapus!');
        return redirect(route('photo.index', $idPhoto));
    }
}
