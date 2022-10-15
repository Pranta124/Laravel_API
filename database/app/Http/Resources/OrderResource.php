<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'item_type' => $this->	item_type,
            'location_id' => $this->location_id,
            'location'=> new LocationResource($this->whenLoaded('location')),
            'tradable' => $this->tradable,
            'user_id' => $this->user_id,
            'added_by'=> new EmployeeResource($this->whenLoaded('added_by')),
            'status' => $this->status,
            'is_active' => $this->is_active,
            'files'=> FilesResource::collection($this->whenLoaded('files')->slice(0,3)),
            'product'=> new ProductResource($this->whenLoaded('product')),

        ];
    }
}
