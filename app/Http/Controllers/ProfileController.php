<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use App\ConfigModel;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function admin() {
        $data = array(
          'config'  => ConfigModel::Where('id', '1')->first(),
          'artikel' => ArtikelModel::orderBy('id', 'desc')->where('id_penulis', Auth::user()->id)->paginate(5),
        );
        return view('admin.profile', $data);
    }

    public function management() {
        $data = array(
            'config'  => ConfigModel::Where('id', '1')->first(),
            'user' => User::orderBy('id', 'desc')->get(),
        );
        return view('admin.user', $data);
    }

    public function hapus(Request $request) {
        $user = User::find($request->id);
        unlink('assets/img/user/' . $user->gambar);

        User::Where('id', $request->id)->delete();
        return redirect('admin/user');
    }

    public function tambah(Request $request) {
        $data = array (
          'config' => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
               'name'      => 'required',
               'email'     => 'required|unique:users',
               'username'  => 'required|unique:users',
               'alamat'    => 'required',
               'gambar'    => 'required',
               'status'    => 'required',
               'password'  => 'required',
               'password2' => 'same:password'
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Gagal, silahkan isi data dengan benar./ Username/email sudah ada")</script>';
            } else {

                $ex = explode('.',$_FILES['gambar']['name']);
                if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                    echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                }else {
                    $namaGambar = str_slug($request->input('username'), '-') . '.jpg';
                    User::create([
                        'name'     => $request->input('name'),
                        'email'    => $request->input('email'),
                        'username' => $request->input('username'),
                        'alamat'   => $request->input('alamat'),
                        'status'   => $request->input('status'),
                        'website'  => $request->input('website'),
                        'bio'      => $request->input('bio'),
                        'gambar'   => $namaGambar,
                        'password' => Hash::make($request->input('password')),
                    ]);

                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/user/' . $namaGambar);

                    return redirect('/admin/profile');
                }

                return redirect('admin/profile');
            }
        }

        return view('admin.user_tambah', $data);
    }

    public function edit(Request $request) {

        $user = User::find($request->id);
        $data = array(
          'config' => ConfigModel::Where('id', '1')->first(),
          'user' => $user,
        );

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name'      => 'required',
                'email'     => 'required',
                'username'  => 'required',
                'alamat'    => 'required',
                'status'    => 'required',
                'password2' => 'same:password'
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Update Gagal")</script>';
            } else {

                $ex  = explode('.',$_FILES['gambar']['name']);
                if ($ex[count($ex) - 1] == "") {
                    if ($request->input('password') == "") {
                        $user->name     = $request->input('name');
                        $user->email    = $request->input('email');
                        $user->username = $request->input('username');
                        $user->alamat   = $request->input('alamat');
                        $user->status   = $request->input('status');
                        $user->website  = $request->input('website');
                        $user->bio      = $request->input('bio');

                        $user->save();
                        return redirect('/admin/user');
                    } else {
                        $user->name     = $request->input('name');
                        $user->email    = $request->input('email');
                        $user->username = $request->input('username');
                        $user->alamat   = $request->input('alamat');
                        $user->status   = $request->input('status');
                        $user->website  = $request->input('website');
                        $user->bio      = $request->input('bio');
                        $user->password = Hash::make($request->input('password'));

                        $user->save();
                        return redirect('/admin/user');
                    }

                } else {
                    if ($request->input('password') == "") {
                        $user->name     = $request->input('name');
                        $user->email    = $request->input('email');
                        $user->username = $request->input('username');
                        $user->alamat   = $request->input('alamat');
                        $user->status   = $request->input('status');
                        $user->website  = $request->input('website');
                        $user->bio      = $request->input('bio');
                        $user->gambar   = $request->input('gambar');

                        $ex = explode('.',$_FILES['gambar']['name']);

                        if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                            echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                        }else {
                            $namaGambar = str_slug($request->input('name'), '-') . '.jpg';
                            move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/user/' . $namaGambar);

                            $user->gambar = $namaGambar;
                            $user->save();
                            return redirect('/admin/user');
                        }

                    } else {
                        $user->name     = $request->input('name');
                        $user->email    = $request->input('email');
                        $user->username = $request->input('username');
                        $user->alamat   = $request->input('alamat');
                        $user->status   = $request->input('status');
                        $user->website  = $request->input('website');
                        $user->bio      = $request->input('bio');
                        $user->gambar   = $request->input('gambar');
                        $user->password = Hash::make($request->input('password'));

                        $ex  = explode('.',$_FILES['gambar']['name']);
                        if ($ex[count($ex) - 1] != "jpg" && $ex[count($ex) - 1] != "jpeg" && $ex[count($ex) - 1] != "png") {
                            echo ' <script> alert("Gambar Fail harus JPG/PNG") </script> ';
                        }else {
                            $namaGambar = str_slug($request->input('name'), '-') . '.jpg';
                            move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/img/user/' . $namaGambar);

                            $user->gambar = $namaGambar;
                            $user->save();
                            return redirect('/admin/user');
                        }
                    }
                }
            }
        }

        return view('admin.user_tambah', $data);
    }
}
