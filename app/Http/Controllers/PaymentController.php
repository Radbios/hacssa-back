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
        $data = PaymentResource::collection(Payment::all());
        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdatePaymentRequest $request)
    {
        return $request;
        $data = Payment::create($request->all());
        return new PaymentResource($data);
    }

    public function update(StoreUpdatePaymentRequest $request, string $id)
    {
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
