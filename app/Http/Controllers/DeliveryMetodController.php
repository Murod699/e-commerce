<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMetod;
use App\Http\Requests\StoreDeliveryMetodRequest;
use App\Http\Requests\UpdateDeliveryMetodRequest;

class DeliveryMetodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return DeliveryMetod::all();
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
     * @param  \App\Http\Requests\StoreDeliveryMetodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryMetodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryMetod  $deliveryMetod
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryMetod $deliveryMetod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryMetod  $deliveryMetod
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMetod $deliveryMetod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryMetodRequest  $request
     * @param  \App\Models\DeliveryMetod  $deliveryMetod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryMetodRequest $request, DeliveryMetod $deliveryMetod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryMetod  $deliveryMetod
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMetod $deliveryMetod)
    {
        //
    }
}
