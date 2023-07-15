<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Product;
use App\Http\Resources\PurchaseResource;
use App\Http\Requests\StoreUpdatePurchaseRequest;

class PurchaseController extends Controller
{
    public function index()
    {
        $data = PurchaseResource::collection(Purchase::all());

        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdatePurchaseRequest $request)
    {
        $request['total'] = (Product::find($request->product_id)->price - $request->discount_unit) * $request->quantity;
        $data = Purchase::create($request->all());
        return new PurchaseResource($data);
    }

    public function show(string $id)
    {
        $data = Purchase::findOrFail($id);

        return new PurchaseResource($data);
    }

    public function update(StoreUpdatePurchaseRequest $request, string $id)
    {
        $request['total'] = (Product::find($request->product_id)->price - $request->discount_unit) * $request->quantity;
        $data = Purchase::findOrFail($id);
        $data->update($request->all());

        return new PurchaseResource($data);
    }

    public function destroy(string $id)
    {
        $data = Purchase::findOrFail($id);
        $data->delete();

        return new PurchaseResource($data);
    }
}
