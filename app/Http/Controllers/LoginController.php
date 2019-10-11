<?php

namespace App\Http\Controllers;

use App\ConfigModel;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(Request $request) {
        $data = array(
            'config' => ConfigModel::Where('id', '1')->first(),
        );

        if ($request->isMethod('post')) {
            if (Auth::attempt([
                'username' => $request->input('username'),
                'password' => $request->input('password')])
            ) {
                return redirect('admin');
            }
        }

        return view('admin.login', $data);
    }

    public function register(Request $request) {

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
               'name' => 'required',
               'username' => 'required|unique:users',
               'email' => 'required|unique:users',
               'password' => 'required',
            ]);

            if ($validator->fails()) {
                echo '<script>alert("Silahkan isi semua kolom. atau Username/Email sudah terdaftar")</script>';
            }else {
                User::create([
                    'name' => 'Muhammad Dzaky',
                    'email' => 'admin@mail.com',
                    'username' => 'admin',
                    'gambar' => 'avatar.png',
                    'bio' => 'Tech Enthusiast',
                    'password' => Hash::make('admin'),
                ]);
                return redirect('login');
            }
        }
        return view('admin/register');
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
