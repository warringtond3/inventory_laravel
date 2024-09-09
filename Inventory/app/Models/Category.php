<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'CategoryID';

    // Allow mass assignment on these fields
    protected $fillable = [
        'CategoryName',
        'Description',
    ];

    // Define the inverse relationship with Product
    public function products()
    {
        return $this->hasMany(Product::class, 'CategoryID');
    }
}
