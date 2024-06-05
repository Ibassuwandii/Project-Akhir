<?php

namespace App\Http\Controllers\Edukasi\TamanBaca;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class TamanBacaController extends Controller
{
    public function __invoke()
    {
        return view('edukasi.taman_baca');
    }
}
