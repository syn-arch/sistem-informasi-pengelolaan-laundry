<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $fillable = ['id_transaksi','id_paket','qty','keterangan','status', 'jumlah_harga'];
    public $timestamps = false;

    public function transaksi()
    {
    	return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }

    public function paket()
    {
    	return $this->belongsTo(Paket::class, 'id_paket');
    }


}
