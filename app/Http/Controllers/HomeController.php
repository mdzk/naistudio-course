<?php

namespace App\Http\Controllers;

use App\AlumniModel;
use App\ArtikelModel;
use App\ConfigModel;
use App\GalleryModel;
use App\TestimoniModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function index(Request $request) {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
          'artikel1'   => ArtikelModel::orderby('id', 'desc')->take(1)->get(),
          'artikel2'   => ArtikelModel::orderby('id', 'desc')->take(1)->skip(1)->get(),
          'artikel3'   => ArtikelModel::orderby('id', 'desc')->take(1)->skip(2)->get(),
          'alumni'     => AlumniModel::orderby('id', 'desc')->take(10)->get(),
          'gallery'    => GalleryModel::orderby('id', 'desc')->take(4)->get(),
          'galleryp'   => GalleryModel::orderby('id', 'desc')->take(1)->get(),
          'testimoni'  => AlumniModel::orderby('id', 'desc')->take(1)->get(),
          'testimoni2' => AlumniModel::orderby('id', 'desc')->take(2)->skip(1)->get(),
          'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('welcome', $data);
    }

    public function karya() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('karya', $data);
    }

    public function kursus() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('kursus', $data);
    }

    public function testimoni() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('testimoni', $data);
    }

    public function contact() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('contact', $data);
    }
    public function android() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('android', $data);
    }

    public function administrasi() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('administrasi', $data);
    }

    public function web() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('web', $data);
    }

    public function desain() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'config'     => ConfigModel::Where('id', '1')->first(),
        );
        return view('desain', $data);
    }
}
