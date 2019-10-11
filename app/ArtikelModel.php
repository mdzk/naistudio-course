<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    //
    public $table = "artikel";
    public $timestamps = false;

    public function kategori() {
        return $this->hasOne('App\KategoriModel', 'id','id_kategori');
    }

    public function users() {
        return $this->hasOne('App\User','id','id_penulis');
    }
}
