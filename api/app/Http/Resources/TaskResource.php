<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
          'body' => $this->body,
          'end' => $this->end,
          'created_at' => date('d-m-Y', strtotime($this->created_at)),
          'updated_at' => date('d-m-Y', strtotime($this->updated_at)),
      ];
    }
}
