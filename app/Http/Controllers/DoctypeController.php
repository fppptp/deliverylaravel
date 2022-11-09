<?php

namespace App\Http\Controllers;

use App\Models\Doctype;
use App\Http\Requests\StoreDoctypeRequest;
use App\Http\Requests\UpdateDoctypeRequest;

class DoctypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctypes = Doctype::all();
        return view('doctypes.index', compact('doctypes'));
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
     * @param  \App\Http\Requests\StoreDoctypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctype  $doctype
     * @return \Illuminate\Http\Response
     */
    public function show(Doctype $doctype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctype  $doctype
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctype $doctype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctypeRequest  $request
     * @param  \App\Models\Doctype  $doctype
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctypeRequest $request, Doctype $doctype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctype  $doctype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctype $doctype)
    {
        //
    }
}
