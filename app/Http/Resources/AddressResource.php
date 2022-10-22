<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $street_name
 * @property mixed $street_number
 */
class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function toArray($request): array
    {
        $request->has('q') ? $this::wrap($request->get('q')) : $this::withoutWrapping();

        return [
            "street_address" => "$this->street_name $this->street_number",
            "street_type" => $this->street_type,
            "zip_code" => $this->zip_code,
            "city" => $this->city,
            "state" => $this->state,
        ];
    }
}
