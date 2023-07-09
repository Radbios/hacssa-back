<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use App\Http\Requests\StoreUpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();

        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdateProductRequest $request)
    {
        $data = Product::create($request->all());

        return new ProductResource($data);
    }

    public function show(string $id)
    {
        $data = Product::findOrFail($id);

        return new ProductResource($data);
    }

    public function update(StoreUpdateProductRequest $request, string $id)
    {
        $data = Product::findOrFail($id);
        $data->update($request->all());

        return new ProductResource($data);
    }

    public function destroy(string $id)
    {
        $data = Product::findOrFail($id);
        $data->delete();

        return new ProductResource($data);
    }
}
