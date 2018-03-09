<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\Resource;
class StationResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['Name' => $this->name, 'Latitude' => $this->lat, 'Longitude' => $this->long];
    }
}