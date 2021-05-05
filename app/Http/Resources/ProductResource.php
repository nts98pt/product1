<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ImageResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'description' => $this->description,
            'is_top' => $this->is_top,
            'on_sale' => $this->on_sale,
            'images' => ImageResource::collection($this->image),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'comment' => $this->comment
        ];
    }
}
