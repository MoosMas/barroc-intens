<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomInvoice extends Model
{
    use HasFactory;

    protected $table = 'custom_invoices';

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
