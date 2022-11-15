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
    
    public function totalCost()
    {
        $total = 0;
        
        foreach ($this->products as $product) {
            $total += ($product->pivot->amount * $product->pivot->price_per_product) + ($product->installation_costs * $product->pivot->amount);
        }
        return $total;
    }
}
