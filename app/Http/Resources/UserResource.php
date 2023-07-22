<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Services\UserService;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name'=> $this->name,
            'email' => $this->email,
            'role' => $this->role->name,
            'money' => UserService::getMoney($this)
        ];
    }
}
