<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $fillable = ['id_product', 'quantity'];

    public function productS(){
        return $this->belongsTo(product::class, 'id_product', 'id');
    }
}
