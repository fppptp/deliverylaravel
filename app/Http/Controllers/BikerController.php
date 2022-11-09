<?php

namespace App\Http\Controllers;

use App\Models\Biker;
use App\Http\Requests\StoreBikerRequest;
use App\Http\Requests\UpdateBikerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikers = Biker::all();
        return view('bikers.index', compact('bikers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bikers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBikerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBikerRequest $request)
    {
        $input = $request->all();
        if($image = $request->file('image')) {
            $destinationPath = 'images/employee';
            $profileImage = "biker" . date('YmdHi') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Biker::create($input);
        return redirect('bikers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function show(Biker $biker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function edit(Biker $biker)
    {
        return view('bikers.edit', compact('biker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBikerRequest  $request
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biker $biker)
    {
        $request->validate([
            'fullname' => ['required'],
            'idcard' => ['required'],
            'gender' => ['required'],
            'birthday' => ['required'],
            'registrationplate' => ['required'],
            'brand' => ['required'],
            'color' => ['required'],
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destinationPath = 'images/employee';
            $profileImage = "biker" . date('YmdHi') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $biker->update($input);
        return redirect()->route('bikers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biker $biker)
    {
        $biker->delete();
        return redirect()->route('bikers.index');
    }
}
