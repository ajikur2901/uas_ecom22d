<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    protected $fillable = [
        'order_id',
        'produk_id',
        'jumlah',
        'harga_satuan'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
