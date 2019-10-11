<?php

namespace App\Http\Controllers;

use App\AlumniModel;
use App\ConfigModel;
use Validator;
use Illuminate\Http\Request;
use Image;

class AlumniController extends Controller
{
    //
    public function index() {
        $home = ConfigModel::Where('id', '1')->first();
        $home->view += 1;
        $home->save();

        $data = array(
            'alumni' => AlumniModel::orderBy('id', 'asc')->paginate(10),
            'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('alumni', $data);
    }

    public function admin() {
        $data = array(
            'alumni' => AlumniModel::orderBy('id', 'asc')->get(),
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        return view('admin.alumni', $data);
    }

    public function adminCari(Request $request) {
        $alumni = AlumniModel::Where('nama', 'like' , '%' . $request->kata . '%')->get();

        $data = array(
            'alumni' => $alumni,
            'config' => ConfigModel::Where('id', '1')->first(),
        );
        return view('admin.alumni_cari', $data);
    }

    public function tambah(Request $request) {
        $data = array(
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(),[
               'nama' => 'required',
               'status' => 'required',
//               'asal' => 'required',
               'alamat' => 'required',
               'tahun' => 'required',
               'pesan' => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Silahkan isi data dengan benar.")</script>';
            } else {
                $alumni = new AlumniModel();
                $alumni->nama = $request->input('nama');
                $alumni->status = $request->input('status');
                $alumni->asal = $request->input('asal');
                $alumni->nomor = $request->input('nomor');
                $alumni->alamat = $request->input('alamat');
                $alumni->tahun = $request->input('tahun');
                $alumni->pesan = $request->input('pesan');

                $alumni->gambar = $request->input('gambar');
                $ex = explode('.',$_FILES['gambar']['name']);

                if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                    echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                }else {
//                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/alumni/' . $namaGambar);
                    $namaGambar = date('d-m-Y-H-m-s-') . str_slug($request->input('nama'), '-') . '.jpg';
                    Image::make($_FILES['gambar']['tmp_name'])->fit(200, 200)->save('assets/img/alumni/'.$namaGambar);

                    $alumni->gambar = $namaGambar;

                    $alumni->save();
                    return redirect('/admin/alumni');
                }
            }
        }

        return view('admin.alumni_tambah', $data);
    }

    public function hapus(Request $request) {
//        $alumni = AlumniModel::find($request->id);
//        unlink('assets/img/alumni/' . $alumni->gambar);

        AlumniModel::Where('id', $request->id)->delete();
        return redirect('admin/alumni');
    }

    public function edit(Request $request) {

        $alumni = AlumniModel::find($request->id);
        $data = array(
            'alumni' => $alumni,
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(),[
                'nama'   => 'required',
                'status' => 'required',
//                'asal'   => 'required',
                'alamat' => 'required',
                'tahun'  => 'required',
                'pesan'  => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Silahkan isi data dengan benar.")</script>';
            } else {
//                unlink('assets/img/alumni/' . $alumni->gambar);

                $ex  = explode('.',$_FILES['gambar']['name']);
                if ($ex[count($ex) - 1] == "") {
                    $alumni->nama   = $request->input('nama');
                    $alumni->status = $request->input('status');
                    $alumni->asal   = $request->input('asal');
                    $alumni->nomor  = $request->input('nomor');
                    $alumni->alamat = $request->input('alamat');
                    $alumni->tahun  = $request->input('tahun');
                    $alumni->pesan  = $request->input('pesan');

                    $alumni->save();
                    return redirect('/admin/alumni');

                } else {
                    $alumni->nama   = $request->input('nama');
                    $alumni->status = $request->input('status');
                    $alumni->asal   = $request->input('asal');
                    $alumni->nomor  = $request->input('nomor');
                    $alumni->alamat = $request->input('alamat');
                    $alumni->tahun  = $request->input('tahun');
                    $alumni->pesan  = $request->input('pesan');

                    $alumni->gambar = $request->input('gambar');
                    $ex = explode('.',$_FILES['gambar']['name']);

                    if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                        echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                    }else {
                        $namaGambar = date('d-m-Y-H-m-s-') . str_slug($request->input('nama'), '-') . '.jpg';
                        Image::make($_FILES['gambar']['tmp_name'])->fit(200, 200)->save('assets/img/alumni/'.$namaGambar);

                        $alumni->gambar = $namaGambar;
                        $alumni->save();
                        return redirect('/admin/alumni');
                    }
                }
            }
        }

        return view('admin.alumni_tambah', $data);
    }
}
