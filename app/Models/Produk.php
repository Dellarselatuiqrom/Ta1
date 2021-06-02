<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'user_id',
        'kode_produk',
        'nama_produk',
        'slug_produk',
        'deskripsi_produk',
        'foto',
        'qty',
        'satuan',
        'harga',
        'status',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function images() {
        return $this->hasMany('App\ProdukImage', 'produk_id');
    }
}
