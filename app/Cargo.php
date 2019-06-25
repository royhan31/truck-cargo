<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['plat_nomor','berat','nama_supir','tanggal'];
    public $timestamps = false;
}
