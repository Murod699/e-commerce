<?php

namespace App\Http\Controllers;

use App\Models\UserAdress;
use App\Http\Requests\StoreUserAdressRequest;
use App\Http\Requests\UpdateUserAdressRequest;

class UserAdressController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
       return auth()->user()->addresses;
    }




    public function store(StoreUserAdressRequest $request)
    {
        $requestAddress = $request->toArray();

       auth()->user()->addresses()->create($requestAddress);

        return response()->json([
            "status" => "success",
            "message" => "Address muaffaqiyatli qo'shildi"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function show(UserAdress $userAdress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAdress $userAdress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAdressRequest  $request
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserAdressRequest $request, UserAdress $userAdress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAdress $userAdress)
    {
        //
    }
}
