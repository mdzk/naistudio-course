<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    //
    public $table = 'kategori';
    public $timestamps = false;

    public function artikel() {
        return $this->hasMany('App\ArtikelModel', 'id_kategori','id');
    }
}
