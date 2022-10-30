<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'contract_id',
        'contract_lenght_id', 
        'first_name',
        'last_name',
        'gender',
        'profile_photo_path',
        'birth_date',
        'date_hired',
    ];
    
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function contract(){
        return $this->belongsTo(Contract::class);
    }

    public function contractLenght(){
        return $this->belongsTo(ContractLenght::class);
    }
}
