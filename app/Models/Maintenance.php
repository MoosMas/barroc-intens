<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $table = 'maintenance_appointments';
    
    protected $casts = [
        'start' => 'datetime'
    ];
    
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
