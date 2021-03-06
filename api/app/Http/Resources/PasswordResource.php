<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PasswordResource extends JsonResource
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
          'title' => $this->title,
          'fields' => $this->fields,
          'created_at' => date('d-m-Y h:m', strtotime($this->created_at)),
          'updated_at' => date('d-m-Y h:m', strtotime($this->updated_at)),
      ];
    }
}
