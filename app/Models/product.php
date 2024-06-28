<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "Products";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'product', 'harga', 'gambar'];
}
