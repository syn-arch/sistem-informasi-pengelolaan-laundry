<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlet';
    protected $fillable = ['nama_outlet','alamat','telepon'];
    public $timestamps = false;
}
