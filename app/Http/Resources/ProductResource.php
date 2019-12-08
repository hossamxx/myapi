<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image' => asset('images/'. $this->image),
            'created at' => $this->created_at,
            'updated at' => $this->updated_at,
        ];
    }
}
