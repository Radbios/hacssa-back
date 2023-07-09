<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Http\Resources\ClientResource;
use App\Http\Requests\StoreUpdateClientRequest;

class ClientController extends Controller
{
    public function index()
    {
        $data = Client::all();

        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdateClientRequest $request)
    {
        $request['user_id'] = $request->user()->id;
        $data = Client::create($request->all());

        return new ClientResource($data);
    }

    public function show(string $id)
    {
        $data = Client::findOrFail($id);

        return new ClientResource($data);
    }

    public function update(StoreUpdateClientRequest $request, string $id)
    {

        $data = Client::findOrFail($id);

        $request['user_id'] = $request->user()->id;
        $data->update($request->all());

        return new ClientResource($data);
    }

    public function destroy(string $id)
    {
        $data = Client::findOrFail($id);
        $data->delete();

        return new ClientResource($data);
    }
}
