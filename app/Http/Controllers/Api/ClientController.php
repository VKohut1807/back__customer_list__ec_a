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
        return Client::paginate(5);
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
        $client->street = $data["address"]["street"];
        $client->city = $data["address"]["city"];
        $client->zipcode = $data["address"]["zipcode"];
        $client->phone = $data["phone"];
        $client->nameC = $data["company"]["name"];
        $client->bs = $data["company"]["bs"];

        $client->save();

        return $client;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return $client;
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
        $client->street = $data["address"]["street"];
        $client->city = $data["address"]["city"];
        $client->zipcode = $data["address"]["zipcode"];
        $client->phone = $data["phone"];
        $client->nameC = $data["company"]["name"];
        $client->bs = $data["company"]["bs"];

        $client->save();

        return $client;
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
