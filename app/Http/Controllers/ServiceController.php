<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Biker;
use App\Models\Doctype;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bikers = Biker::all();
        $doctypes = Doctype::all();
        return view('services.create', compact('bikers', 'doctypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        /* $input = $request->all();
        Service::create($input); */

        Service::create([
            'customer_fullname' => $request->customer_fullname,
            'customer_phone' => $request->customer_phone,
            'parcel_type' => $request->parcel_type,
            'parcel_weight' => $request->parcel_weight,
            'parcel_size' => $request->parcel_size,
            'source_name' => $request->source_name,
            'source_phone' => $request->source_phone,
            'source_address' => $request->source_address,
            'destination_name' => $request->destination_name,
            'destination_phone' => $request->destination_phone,
            'destination_address' => $request->destination_address,
            'date_pickup' => $request->date_pickup,
            'date_deliver' => $request->date_deliver,
            'amount' => $request->amount,
            'pay_type' => $request->pay_type,
            'biker_id' => $request->biker_id,
            'doctype_id' => $request->doctype_id,
        ]);
        return redirect('services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $bikers = Biker::all();
        $doctypes = Doctype::all();
        return view('services.edit', compact('service', 'bikers', 'doctypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update([
            'customer_fullname' => $request->customer_fullname,
            'customer_phone' => $request->customer_phone,
            'parcel_type' => $request->parcel_type,
            'parcel_weight' => $request->parcel_weight,
            'parcel_size' => $request->parcel_size,
            'source_name' => $request->source_name,
            'source_phone' => $request->source_phone,
            'source_address' => $request->source_address,
            'destination_name' => $request->destination_name,
            'destination_phone' => $request->destination_phone,
            'destination_address' => $request->destination_address,
            'date_pickup' => $request->date_pickup,
            'date_deliver' => $request->date_deliver,
            'amount' => $request->amount,
            'pay_type' => $request->pay_type,
            'biker_id' => $request->biker_id,
            'doctype_id' => $request->doctype_id,
        ]);
        return redirect('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}
