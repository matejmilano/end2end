<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'first_name',
        'last_name',
        'profile_photo_path',
        'birth_date',
        'date_hired',
        'contract_type',
        'contract_lenght'
    ];
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
