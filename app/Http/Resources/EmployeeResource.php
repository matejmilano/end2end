<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'fistName' => $this->fist_name,
            'lastName' => $this->last_name,
            'birth_date' => $this->birth_date,
            'date_hired' => $this->date_hired,
            'contract_type' => $this->contract_type,
            'contract_lenght' => $this->contract_lenght
        ];
    }
}