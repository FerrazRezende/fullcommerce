<?php

namespace App\Models;

use App\Enum\ProductCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'amount',
        'category',
    ];

    protected $casts = [
        'category' => ProductCategory::class,
    ];
}
