<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Http\Resources\AddressResource;
use App\Http\Requests\StoreUpdateAddressRequest;

class AddressController extends Controller
{
    public function index()
    {
        $data = Address::all();
        foreach ($data as $item) {
            $item['client'] = $item->client;
        }
        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdateAddressRequest $request)
    {
        $data = Address::create($request->all());
        return new AddressResource($data);
    }

    public function show(string $id)
    {
        $data = Address::findOrFail($id);

        return new AddressResource($data);
    }

    public function update(StoreUpdateAddressRequest $request, string $id)
    {
        $data = Address::findOrFail($id);
        $data->update($request->all());

        return new AddressResource($data);
    }

    public function destroy(string $id)
    {
        $data = Address::findOrFail($id);
        $data->delete();

        return new AddressResource($data);
    }
}
