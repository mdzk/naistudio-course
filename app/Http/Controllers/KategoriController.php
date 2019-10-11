<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use App\ConfigModel;
use App\KategoriModel;
use Validator;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function admin(Request $request) {
        $data = array(
            'kategori' => KategoriModel::all(),
            'config'   => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'nama_kategori' => 'required|unique:kategori',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Gagal, silahkan isi data dengan benar/kategori sudah ada")</script>';
            } else {
                $kategori                = new KategoriModel();
                $kategori->nama_kategori = $request->input('nama_kategori');
                $kategori->save();
                return redirect('admin/kategori');
            }
        }
        return view('admin.kategori', $data);
    }

    public function detail(Request $request) {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'artikel' => ArtikelModel::orderBy('id', 'desc')->where('id_kategori', $request->id)->paginate(5),
            'kategori' => KategoriModel::all(),
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        return view('kategori', $data);
    }

    public function edit(Request $request) {

        $kategori = KategoriModel::find($request->id);
        $data = array(
            'kategori' => $kategori,
            'config'   => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'nama_kategori' => 'required|unique:kategori',
            ]);

            if ($validator->fails()) {
                echo ' <script> alert("Gagal, silahkan isi/kategori sudah tersedia") </script> ';
            }else {
                $kategori->nama_kategori = $request->input('nama_kategori');
                $kategori->save();
                return redirect('/admin/kategori');
            }
        }

        return view('admin.kategori_tambah', $data);
    }

    public function hapus(Request $request) {
        KategoriModel::Where('id', $request->id)->delete();
        return redirect('admin/kategori');
    }
}
