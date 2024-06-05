<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess()
    {
        $userid = request('userid');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $field = 'username';
        }

        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];

        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;
        if (auth()->attempt($credential, $remember)) {
            $user = auth()->user();
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
