<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'user_id',
        'status',
        'total'
    ];

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getLastYear()
    {
        $data = [];
        for ($i = 12; $i >= 0; $i--) {
            $s = date('Y-m-01', strtotime(date('Y-m-01') . " - {$i} months"));
            $f = date('Y-m-t', strtotime(date('Y-m-01') . " - {$i} months"));
            $bulan = date('M Y', strtotime(date('Y-m-01') . " - {$i} months"));
            $data[] = [
                'nama' => $bulan,
                'value' => self::whereBetween('created_at', [$s, $f])->sum('total')
            ];
        }
        return $data;
    }
}
