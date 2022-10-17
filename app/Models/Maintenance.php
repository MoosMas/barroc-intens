<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $table = 'maintenance_appointments';
    
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
