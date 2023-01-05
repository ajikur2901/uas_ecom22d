<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'produk_id',
        'jumlah'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
