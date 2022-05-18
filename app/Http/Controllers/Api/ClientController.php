<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Client::paginate(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $client = new Client();
        $client->name = $data["name"];
        $client->email = $data["email"];
        $client->address_street = $data["address_street"];
        $client->address_city = $data["address_city"];
        $client->address_zipcode = $data["address_zipcode"];
        $client->phone = $data["phone"]?? null;
        $client->company_name = $data["company_name"];
        $client->company_bs = $data["company_bs"]?? null;

        $client->save();

        return response($client, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return response($client, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->all();

        $client->name = $data["name"];
        $client->email = $data["email"];
        $client->address_street = $data["address_street"];
        $client->address_city = $data["address_city"];
        $client->address_zipcode = $data["address_zipcode"];
        $client->phone = $data["phone"];
        $client->company_name = $data["company_name"];
        $client->company_bs = $data["company_bs"];

        $client->save();

        return response($client, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return response(null, 204);
    }
}
