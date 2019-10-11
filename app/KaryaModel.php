<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryaModel extends Model
{
    //
    public $table = 'karya';
    public $timestamps = false;

    public function kategori() {
        return $this->hasOne('App\KaryaKategoriModel', 'id','id_kategori');
    }
}
