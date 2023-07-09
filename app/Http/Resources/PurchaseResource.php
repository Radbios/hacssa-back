<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseResource extends JsonResource
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
            'client'=> $this->client,
            'product_id' => $this->product,
            'quantity' => $this->quantity,
            'total' => $this->total,
            'discount_unit' => $this->discount_unit,
            'date' => $this->date
        ];
    }
}
