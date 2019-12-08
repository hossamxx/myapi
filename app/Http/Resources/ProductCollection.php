<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image' => asset('images/'. $this->image),
            'href'=>[
                route('products.show',$this->id)
            ]
        ];
    }
}
