<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        // Define the validation rules
        $rules = [
            'userid' => 'required',
            'password' => 'required',
        ];

        // Define the validation messages
        $messages = [
            'userid.required' => 'Email atau username harus diisi.',
            'password.required' => 'Password harus diisi.',
        ];

        // Perform the validation
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            // Redirect back with validation errors
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $userid = $request->input('userid');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $field = 'username';
        }

        $credential = [
            $field => $request->input('userid'),
            'password' => $request->input('password')
        ];

        $req_remember = $request->input('remember');
        $remember = (isset($req_remember)) ? true : false;
        if (auth()->attempt($credential, $remember)) {
            $user = auth()->user();
            session()->flash('success', 'Login Berhasil');
            return $this->menageRedirect($user);
        } else {
            return view('auth.login', ['message' => 'Login Gagal']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }

    public function menageRedirect($user)
    {
        $list_roles = $user->role;

        // Pastikan pengguna memiliki setidaknya satu role
        if ($list_roles->isEmpty()) {
            // Tangani kasus ketika pengguna tidak memiliki role
            return redirect('some-default-url')->with('message', 'No roles assigned to the user.');
        }

        // Inisialisasi array untuk menyimpan URL dari setiap peran
        $role_urls = [];

        foreach ($list_roles as $role) {
            // Pastikan role memiliki module yang terkait
            if ($role->module) {
                $role_urls[] = $role->module->url;
            } else {
                // Tangani kasus ketika role tidak memiliki module
                // Tambahkan pesan atau tindakan yang sesuai di sini, jika perlu
            }
        }

        // Jika tidak ada peran yang memiliki module yang terkait
        if (empty($role_urls)) {
            return redirect('some-default-url')->with('message', 'No modules assigned to the roles.');
        }

        // Redirect pengguna ke URL dari peran pertama yang ditemukan
        return redirect($role_urls[0]);

        // Jika Anda ingin memberikan pengguna opsi untuk memilih peran tertentu,
        // Anda dapat menampilkan halaman yang memungkinkan pengguna memilih peran,
        // dan kemudian mengarahkan mereka ke URL peran yang mereka pilih.
    }
}
