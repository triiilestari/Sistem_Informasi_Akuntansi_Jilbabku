<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $fillable = ['id_users', 'Nama', 'KodeBarang','NamaBarang','JenisBarang','Jumlah','Harga'];
}
