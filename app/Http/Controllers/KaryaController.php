<?php

namespace App\Http\Controllers;

use App\ConfigModel;
use App\KaryaKategoriModel;
use App\KaryaModel;
use Validator;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    //
    public function index() {
        $data = array(
            'config'   => ConfigModel::Where('id','1')->first(),
            'karya'    => KaryaModel::orderBy('id', 'desc')->get(),
            'kategori' => KaryaKategoriModel::all(),
        );

        return view('karya', $data);
    }

    public function karyaAdmin() {
        $data = array(
            'karya' => KaryaModel::orderBy('id', 'desc')->paginate(10),
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        return view('admin.karya', $data);
    }

    public function detail(Request $request) {
        $karya = KaryaModel::find($request->id);
        $karya->view += 1;
        $karya->save();

        $data = array(
            'karya' => $karya,
            'config' => ConfigModel::Where('id','1')->first(),
        );

        return view('detail_karya', $data);
    }

    public function tambah(Request $request) {

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'nama_karya'  => 'required',
                'author'      => 'required',
                'deskripsi'   => 'required',
                'gambar'      => 'required',
                'id_kategori' => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Isi data dengan benar")</script>';
            }else {
                $karya              = new KaryaModel();
                $karya->nama_karya  = $request->input('nama_karya');
                $karya->author  = $request->input('author');
                $karya->deskripsi   = $request->input('deskripsi');
                $karya->view        = 0;
                $karya->love        = 0;
                $karya->id_kategori = $request->input('id_kategori');
                $karya->gambar      = $request->input('gambar');

                $ex = explode('.',$_FILES['gambar']['name']);
                if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                    echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                }else {
                    $namaGambar = str_slug($request->input('nama_karya'), '-') . '.jpg';
                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/karya/' . $namaGambar);

                    $karya->gambar = $namaGambar;

                    $karya->save();
                    return redirect('/admin/karya');
                }
            }
        }

        $data = array(
            'kategori' => KaryaKategoriModel::get(),
            'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('admin.karya_tambah', $data);
    }

    public function edit(Request $request) {

        $karya = KaryaModel::find($request->id);
        $data = array(
            'karya'    => $karya,
            'kategori' => KaryaKategoriModel::get(),
            'config'   => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'nama_karya'  => 'required',
                'author'      => 'required',
                'id_kategori' => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Isi data dengan benar")</script>';
            } else {

                $ex = explode('.',$_FILES['gambar']['name']);
                if ($ex[count($ex) - 1] == "") {
                    $karya->nama_karya  = $request->input('nama_karya');
                    $karya->author      = $request->input('author');
                    $karya->deskripsi   = $request->input('deskripsi');
                    $karya->id_kategori = $request->input('id_kategori');

                    $karya->save();
                    return redirect('/admin/karya');
                } else {
                    $karya->nama_karya  = $request->input('nama_karya');
                    $karya->author      = $request->input('author');
                    $karya->deskripsi   = $request->input('deskripsi');
                    $karya->id_kategori = $request->input('id_kategori');
                    $karya->gambar      = $request->input('gambar');

                    $ex = explode('.',$_FILES['gambar']['name']);
                    if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                        echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                    } else {
                        $namaGambar = str_slug($request->input('nama_karya'), '-') . '.jpg';
                        move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/karya/' . $namaGambar);

                        $karya->gambar = $namaGambar;

                        $karya->save();
                        return redirect('/admin/karya');
                    }
                }
            }
        }
        return view('admin.karya_tambah', $data);
    }

    public function hapus(Request $request) {
        $karya = KaryaModel::find($request->id);
        unlink('assets/img/karya/' . $karya->gambar);

        KaryaModel::Where('id', $request->id)->delete();
        return redirect('admin/karya');
    }
}
