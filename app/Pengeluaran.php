<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    //
    protected $fillable = ['id_users','Nama','Pengeluaran','Instansi', 'Nominal'];
}
