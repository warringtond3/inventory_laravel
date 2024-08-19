<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $primaryKey = 'SupplierID';

    // Define the inverse relationship with Product
    public function products()
    {
        return $this->hasMany(Product::class, 'SupplierID');
    }
}
