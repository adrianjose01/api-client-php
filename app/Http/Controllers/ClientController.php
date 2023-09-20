<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function FindOne($id)
    {
        return Client::find($id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->role = $request->role;
        $client->save();
        return ["Message" => "Cliente Creado"];
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if($request->id != $id){
            return ['ErrorMessage' => "Los ids no coinciden"];
        }
        $client = Client::find($id);
        $client->name = $request->name;
        $client->role = $request->role;
        $client->save();
        return ["Message" => "Cliente Actualizado"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return ["Message" => "Cliente Eliminado"];
    }
}
