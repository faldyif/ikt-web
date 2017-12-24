<?php

namespace App\Http\Controllers\Admin;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index')
            ->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'nama' => 'required',
            'foto' => 'required|image',
            'instansi' => 'required',
            'testimonial' => 'required'
        ]);

        // Move image to destination folder
        $image = $request->file('foto');
        $filename = 'image_'.time().'_'.$image->hashName();
        $image->move(public_path('storage/testi_media'), $filename);
        $filename = 'storage/testi_media/' . $filename;

        $testimonial = new Testimonial;
        $testimonial->nama = $request->nama;
        $testimonial->instansi = $request->instansi;
        $testimonial->filename = $filename;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->save();

        Session::flash('message', 'Testimonial berhasil dibuat!');
        return redirect(route('testimonial.index'));
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
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit')
            ->with('testimonial', $testimonial);
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
            'nama' => 'required',
            'foto' => 'image',
            'instansi' => 'required',
            'testimonial' => 'required'
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->nama = $request->nama;
        $testimonial->instansi = $request->instansi;
        $testimonial->testimonial = $request->testimonial;

        // Jika ada fotonya
        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
            // Move image to destination folder
            $image = $request->file('foto');
            $filename = 'image_'.time().'_'.$image->hashName();
            $image->move(public_path('storage/testi_media'), $filename);
            $filename = 'storage/testi_media/' . $filename;
            $testimonial->filename = $filename;
        }

        $testimonial->touch();

        Session::flash('message', 'Testimonial berhasil diedit!');
        return redirect(route('testimonial.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);

        Session::flash('message', 'Testimonial berhasil dihapus!');
        return redirect(route('testimonial.index'));
    }
}
