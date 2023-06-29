<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Resources\PaymentResource;
use App\Http\Requests\StoreUpdatePaymentRequest;

class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::all();

        return response()->json($data);
    }

    public function store(StoreUpdatePaymentRequest $request)
    {
        $request['total'] = (Product::find($request->product_id)->price - $request->discount_unit) * $request->quantity;
        $data = Payment::create($request->all());
        return new PaymentResource($data);
    }

    public function update(StoreUpdatePaymentRequest $request, string $id)
    {
        $request['total'] = (Product::find($request->product_id)->price - $request->discount_unit) * $request->quantity;
        $data = Payment::findOrFail($id);
        $data->update($request->all());

        return new PaymentResource($data);
    }

    public function destroy(string $id)
    {
        $data = Payment::findOrFail($id);
        $data->delete();

        return new PaymentResource($data);
    }
}
