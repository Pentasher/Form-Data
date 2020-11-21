<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablet;

class TabletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablets = Tablet::all();

        return view('tablet', compact('tablets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_tablet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tablets = Tablet::create(request()->all());

        return redirect('tablets');
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
        $tablet = Tablet::findOrFail($id);

        return view('edit_tablet', compact('tablet'));
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
        $tablet = Tablet::findOrFail($id);

        $tablet->name = request()->name;
        $tablet->price = request()->price;
        $tablet->brand = request()->brand;

        $tablet->save();

        return redirect('tablets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tablets = Tablet::findOrFail($id);

        $tablets->delete();

        return back();
    }
}
