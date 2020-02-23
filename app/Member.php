<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['nama_member','alamat','telepon','jk','tgl_daftar'];
    public $timestamps = false;
}
