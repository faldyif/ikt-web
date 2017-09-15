<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\BerthingPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerthingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('id');
        $berthing = BerthingPlan::all();
        return view('admin.berthing.index')->with('berthing', $berthing);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berthing.create');
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
            'vessel' => 'required',
            'agent' => 'required',
            'voy' => 'required',
            'eta' => 'required',
            'type' => 'required'
        ]);

        $berthing = BerthingPlan::create($request->all());

        Session::flash('message', 'Berthing plan berhasil dibuat!');
        return redirect(route('berthing.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berthing = BerthingPlan::find($id);
        return view('admin.berthing.edit')->with('berthing', $berthing);
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
        $berthing = BerthingPlan::find($id);
        $berthing->type = $request->type;
        $berthing->eta = $request->eta;
        $berthing->vessel = $request->vessel;
        $berthing->agent = $request->agent;
        $berthing->voy = $request->voy;
        $berthing->touch();

        Session::flash('message', 'Berthing plan berhasil diupdate!');
        return redirect(route('berthing.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BerthingPlan::destroy($id);
        Session::flash('message', 'Berthing plan berhasil dihapus!');
        return redirect(route('berthing.index'));
    }
}
