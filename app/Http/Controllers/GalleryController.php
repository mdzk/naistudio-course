<?php

namespace App\Http\Controllers;

use App\ConfigModel;
use App\GalleryModel;
use Validator;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
          'gambar' => GalleryModel::orderBy('id','desc')->get(),
          'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('gallery', $data);
    }

    public function admin(Request $request) {
        $data = array(
            'gambar' => GalleryModel::orderBy('id','desc')->get(),
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        return view('admin.gallery', $data);
    }

    public function hapus(Request $request) {
        $gallery = GalleryModel::find($request->id);
        unlink('assets/img/gallery/' . $gallery->gambar);

        GalleryModel::Where('id', $request->id)->delete();
        return redirect('/admin/gallery');
    }

    public function tambah(Request $request) {
        $data = array(
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(),[
                'nama' => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Silahkan isi data dengan benar.")</script>';
            } else {
                $gallery = new GalleryModel();
                $gallery->nama = $request->input('nama');

                $gallery->gambar = $request->input('gambar');
                $ex = explode('.',$_FILES['gambar']['name']);

                if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                    echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                }else {
                    $namaGambar = str_slug($request->input('nama'), '-') . '.jpg';
                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/gallery/' . $namaGambar);

                    $gallery->gambar = $namaGambar;

                    $gallery->save();
                    return redirect('/admin/gallery');
                }
            }
        }

        return view('admin.gallery_tambah', $data);
    }

    public function adminCari(Request $request) {
        $gallery = GalleryModel::Where('nama', 'like' , '%' . $request->kata . '%')->get();

        $data = array(
            'gambar' => $gallery,
            'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('admin.gallery_cari', $data);
    }
}
