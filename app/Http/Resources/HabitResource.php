<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HabitResource extends JsonResource
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
            'type' => $this->type,
            'color' => $this->color,
            'title' => $this->title,
            'description' => $this->descritption,
            'frequency' => $this->frequency,
            'startHour' => $this->startHour,
            'endHour' => $this->endHour
        ];
    }
}