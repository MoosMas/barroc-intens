<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    /**
     * Get the appointment's end date and time.
     * 
     * @return Attribute
     */
//    TODO: Is dit de juiste manier om dit te doen?
    protected function getEnd(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($this->start)->addMinutes($this->duration_minutes)
        );
    }
}
