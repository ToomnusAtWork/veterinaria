<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->getKey(),
            'name'=> $this->name(),
            'description' => $this->description(),
            'quantity' => $this->quantity(),
            'price'=> $this->price(),
            'status' => $this->status(),

        ];
    }
}
