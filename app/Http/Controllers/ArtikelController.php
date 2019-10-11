<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use App\ConfigModel;
use App\KategoriModel;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function artikel() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'artikel' => ArtikelModel::orderBy('id', 'desc')->paginate(5),
            'kategori' => KategoriModel::all(),
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        return view('artikel', $data);
    }

    public function detail(Request $request) {
        $artikel = ArtikelModel::find($request->id);
        $artikel->dibaca += 1;
        $artikel->save();

        $data = array(
            'artikel' => $artikel,
            'kategori' => KategoriModel::all(),
            'config' => ConfigModel::Where('id','1')->first(),
        );

        return view('detail', $data);
    }

    public function artikelAdmin(Request $request) {

        $data = array(
            'artikel' => ArtikelModel::orderBy('id', 'desc')->paginate(10),
            'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('admin.artikel', $data);
    }

    public function artikelAdminCari(Request $request) {
        $artikel = ArtikelModel::Where('judul', 'like' , '%' . $request->kata . '%')->paginate(10);

        $data = array(
          'artikel' => $artikel,
          'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('admin.artikel_cari', $data);
    }

    public function cari(Request $request) {
        $artikel = ArtikelModel::Where('judul', 'like' , '%' . $request->kata . '%')->paginate(10);

        $data = array(
            'artikel' => $artikel,
            'kategori' => KategoriModel::all(),
            'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('cari', $data);
    }

    public function hapus(Request $request) {
        $artikel = ArtikelModel::find($request->id);
        unlink('assets/img/thumb/' . $artikel->gambar);

        ArtikelModel::Where('id', $request->id)->delete();
        return redirect('admin/artikel');
    }

    public function edit(Request $request) {

        $artikel = ArtikelModel::find($request->id);
        $data = array(
          'artikel'   => $artikel,
          'kategori'  => KategoriModel::get(),
          'config'    => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'judul' => 'required',
                'isi'   => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Update gagal")</script>';
            } else {
                $ex = explode('.',$_FILES['gambar']['name']);
                if ($ex[count($ex) - 1] == "") {
                    $artikel->judul       = $request->input('judul');
                    $artikel->isi         = $request->input('isi');
                    $artikel->id_kategori = $request->input('id_kategori');

                    $artikel->save();
                    return redirect('/admin/artikel');
                } else {
                    $artikel->judul       = $request->input('judul');
                    $artikel->isi         = $request->input('isi');
                    $artikel->id_kategori = $request->input('id_kategori');
                    $artikel->gambar      = $request->input('gambar');

                    $ex                   = explode('.',$_FILES['gambar']['name']);
                    if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                        echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                    }else {
                        $namaGambar = str_slug($request->input('judul'), '-') . '.jpg';
                        move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/thumb/' . $namaGambar);

                        $artikel->gambar = $namaGambar;
                        $artikel->save();
                        return redirect('/admin/artikel');
                    }
                }

            }
        }
        return view ('admin.artikel_tambah', $data);
    }

    public function tambah(Request $request) {

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
               'judul'        => 'required',
               'isi'          => 'required',
               'gambar'       => 'required',
               'id_kategori'  => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Isi data dengan benar")</script>';
            }else {
                $artikel              = new ArtikelModel();
                $artikel->judul       = $request->input('judul');
                $artikel->isi         = $request->input('isi');
                $artikel->tanggal     = date('M d, Y');
                $artikel->dibaca      = 0;
                $artikel->id_kategori = $request->input('id_kategori');
                $artikel->id_penulis  = Auth::user()->id;
                $artikel->gambar      = $request->input('gambar');
                $ex = explode('.',$_FILES['gambar']['name']);

                if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                    echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                }else {
                    $namaGambar = str_slug($request->input('judul'), '-') . '.jpg';
                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/thumb/' . $namaGambar);

                    $artikel->gambar = $namaGambar;

                    $artikel->save();
                    return redirect('/admin/artikel');
                }
            }
        }

        $data = array(
            'kategori' => KategoriModel::get(),
            'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('admin.artikel_tambah', $data);
    }


}