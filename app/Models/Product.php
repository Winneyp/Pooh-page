<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Product';

    protected $primaryKey = 'product_id';
    
    public $timestamps = false;
    protected $fillable = [
        'price',
        'size',
        'color',
        'picture',
        'description',
        'stock_quantity',
    ];
}
