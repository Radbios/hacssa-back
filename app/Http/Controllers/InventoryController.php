<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Http\Resources\InventoryResource;
use App\Http\Requests\StoreUpdateInventoryRequest;

class InventoryController extends Controller
{
    public function index()
    {
        $data = Inventory::all();

        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdateInventoryRequest $request)
    {
        $data = Inventory::create($request->all());

        return new InventoryResource($data);
    }

    public function show(string $id)
    {
        $data = Inventory::findOrFail($id);

        return new InventoryResource($data);
    }

    public function update(StoreUpdateInventoryRequest $request, string $id)
    {
        $data = Inventory::findOrFail($id);
        $data->update($request->all());

        return new InventoryResource($data);
    }

    public function destroy(string $id)
    {
        $data = Inventory::findOrFail($id);
        $data->delete();

        return new InventoryResource($data);
    }
}
