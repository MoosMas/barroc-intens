<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('amount', 'price_per_product');
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
