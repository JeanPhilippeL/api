<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MeasureResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [ 'Value' => $this->value, 'Description' => $this->description, ];
    }
}
