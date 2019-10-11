<?php

namespace App\Http\Controllers;

use App\AlumniModel;
use App\ArtikelModel;
use App\ConfigModel;
use App\GalleryModel;
use App\User;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        $data = array(
          'config'     => ConfigModel::Where('id', '1')->first(),
          'artikel'    => ArtikelModel::all(),
          'recentPost' => ArtikelModel::orderBy('id','desc')->take(5)->get(),
          'user'       => User::all(),
          'gallery'    => GalleryModel::all(),
          'alumni'     => AlumniModel::all(),
        );
        return view('admin.index', $data);
    }

    public function setting(Request $request) {
        $config = ConfigModel::Where('id', '1')->first();
        $data = array(
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'title'       => 'required',
                'description' => 'required',
                'keyword'     => 'required',
                'nomor'       => 'required',
                'email'       => 'required',
                'alamat'      => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Harap data diisi dengan benar")</script>';
            } else {
                $ex = explode('.',$_FILES['favicon']['name']);
                if ($ex[count($ex) - 1] == "") {

                    $ex = explode('.',$_FILES['logo']['name']);
                    if ($ex[count($ex) - 1] == "") {
                        $config->title       = $request->input('title');
                        $config->description = $request->input('description');
                        $config->keyword     = $request->input('keyword');
                        $config->nomor       = $request->input('nomor');
                        $config->email       = $request->input('email');
                        $config->alamat      = $request->input('alamat');

                        $config->save();
                        return redirect('/admin/setting');
                    } else {
                        $config->title       = $request->input('title');
                        $config->description = $request->input('description');
                        $config->keyword     = $request->input('keyword');
                        $config->nomor       = $request->input('nomor');
                        $config->email       = $request->input('email');
                        $config->alamat      = $request->input('alamat');
                        $config->logo        = $request->input('logo');

                        $ex                   = explode('.',$_FILES['logo']['name']);
                        if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                            echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                        }else {
                            $namaGambar = 'logo' . '.jpg';
                            move_uploaded_file($_FILES['logo']['tmp_name'], 'assets/img/' . $namaGambar);

                            $config->logo = $namaGambar;
                            $config->save();
                            return redirect('/admin/setting');
                        }
                    }

                } else {
                    $ex = explode('.',$_FILES['logo']['name']);
                    if ($ex[count($ex) - 1] == "") {
                        $config->title       = $request->input('title');
                        $config->description = $request->input('description');
                        $config->keyword     = $request->input('keyword');
                        $config->nomor       = $request->input('nomor');
                        $config->email       = $request->input('email');
                        $config->alamat      = $request->input('alamat');
                        $config->favicon        = $request->input('favicon');

                        $ex                   = explode('.',$_FILES['favicon']['name']);
                        if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                            echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                        }else {
                            $namaGambar = 'a' . '.png';
                            move_uploaded_file($_FILES['favicon']['tmp_name'], 'assets/img/' . $namaGambar);

                            $config->favicon = $namaGambar;
                            $config->save();
                            return redirect('/admin/setting');
                        }
                    }
                }
            }
        }

        return view('admin.setting', $data);
    }
}
