<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'seller' => $this->user,
            'name'=> $this->name,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'address' => $this->addresses,
            'purchases' => $this->purchases,
            'payments' => $this->payments,
            'debt' => $this->debt,
            'last_purchase_date' => $this->last_purchase_date,
            'total_purchase_amount' => $this->total_purchase_amount,
            'created_at' => $this->created_at->format('d-m-Y'),
        ];
    }
}
