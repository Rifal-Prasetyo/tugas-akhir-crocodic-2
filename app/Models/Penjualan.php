<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'total_item',
        'total_harga',
        'diskon',
        'bayar',
        'diterima',
        'user_id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function penjualan_detail()
    {
        return $this->belongsTo(Penjualan_Detail::class);
    }
}
