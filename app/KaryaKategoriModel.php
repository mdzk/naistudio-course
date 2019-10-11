<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryaKategoriModel extends Model
{
    //
    public $table = 'kategori_karya';
    public $timestamps = 'false';

    public function karya() {
        return $this->hasMany('App\KaryaModel', 'id_kategori','id');
    }
}
