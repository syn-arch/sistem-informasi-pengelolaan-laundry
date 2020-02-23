<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlet';
    protected $fillable = ['nama_outlet','alamat','telepon'];
    public $timestamps = false;

    public function user()
   	{
   		return $this->hasMany(User::class);
   	}

   	public function paket()
   	{
   		return $this->hasMany(Paket::class);
   	}

    public function transaksi()
   	{
   		return $this->hasMany(Transaksi::class);
   	}
}
