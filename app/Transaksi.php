<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_user','id_outlet','id_member','kode_invoice','tgl','batas_waktu','tgl_bayar','biaya_tambahan','diskon','pajak','status','dibayar', 'tunai'];
    public $timestamps = false;

    public function detail_transaksi()
    {
    	return $this->hasMany(DetailTransaksi::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }

    public function outlet()
    {
    	return $this->belongsTo(Outlet::class, 'id_outlet');
    }

    public function member()
    {
    	return $this->belongsTo(Member::class, 'id_member');
    }
}
