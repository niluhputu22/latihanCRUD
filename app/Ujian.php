<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Ujian extends Model
{
    protected $table = 'ujians';
    protected $primarykey = 'id';
    //jika tidak mau memasukkan timestamp
    public $timestamps = false;
    protected $fillable = ['nama_mk', 'dosen', 'jumlah_soal', 'keterangan'];
}
