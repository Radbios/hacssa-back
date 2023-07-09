<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyInventory;
use App\Http\Resources\MyInventoryResource;
use App\Http\Requests\StoreUpdateMyInventoryRequest;

class MyInventoryController extends Controller
{
     public function index()
    {
        $data = MyInventory::all();

        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdateMyInventoryRequest $request)
    {
        $request['user_id'] = $request->user()->id;

        $data = MyInventory::create($request->all());

        return new MyInventoryResource($data);
    }

    public function show(string $id)
    {
        $data = MyInventory::findOrFail($id);

        return new MyInventoryResource($data);
    }

    public function update(StoreUpdateMyInventoryRequest $request, string $id)
    {
        $data = MyInventory::findOrFail($id);

        $request['user_id'] = $request->user()->id;

        $data->update($request->all());

        return new MyInventoryResource($data);
    }

    public function destroy(string $id)
    {
        $data = MyInventory::findOrFail($id);
        $data->delete();

        return new MyInventoryResource($data);
    }
}
