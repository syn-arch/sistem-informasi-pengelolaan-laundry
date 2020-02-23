<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ['id_outlet','jenis','nama_paket','harga'];
    public $timestamps = false;

    public function transaksi()
   	{
   		return $this->hasMany(Transaksi::class);
   	}

    public function outlet()
    {
    	return $this->belongsTo(Outlet::class, 'id_outlet');
    }
}
