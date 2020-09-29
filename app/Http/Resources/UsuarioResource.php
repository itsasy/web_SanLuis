<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
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
            'code_pers' => $this->code_pers,
            'name_pers' => $this->name_pers,
            'patname_pers' => $this->patname_pers,
            'matname_pers' => $this->matname_pers,
            'birthdate' => $this->birthdate,
            'gender_id' => $this->gender_id,
            'dni_pers' => $this->dni_pers,
            'email' => $this->email,
            'phone_pers' => $this->phone_pers,
            'phoneTwo_pers' => $this->phoneTwo_pers,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'type_id' => $this->info_user->type_id
        ];
    }
}
