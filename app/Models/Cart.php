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

    public static function getTotalPrice($userId)
    {
        $carts = self::where('user_id', $userId)->get();
        $result = 0;
        if (!empty($carts)) {
            foreach ($carts as $cart) {
                $result += $cart->jumlah * $cart->produk->harga;
            }
        }

        return $result;
    }
}
