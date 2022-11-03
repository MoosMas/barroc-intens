<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('amount', 'price_per_product');
    }
}
