<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $primaryKey = 'SupplierID';

    // Allow mass assignment on these fields
    protected $fillable = [
        'SupplierName',
        'ContactName',
        'Address',
        'City',
        'PostalCode',
        'Country',
        'Phone',
    ];

    // Define the inverse relationship with Product
    public function products()
    {
        return $this->hasMany(Product::class, 'SupplierID');
    }
}
