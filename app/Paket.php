<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ['id_outlet','jenis','nama_paket','harga'];
    public $timestamps = false;
}
