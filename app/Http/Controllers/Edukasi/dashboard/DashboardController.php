<?php

namespace App\Http\Controllers\Edukasi\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Edukasi\aksisampah\Aksisampah;
use App\Models\Edukasi\Instagram\Instagram;
use App\Models\edukasi\Tamanbaca\Tamanbaca;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['list_instagram']= Instagram::all();
        $data['list_aksisampah']= Aksisampah::all();
        $data['list_tamanbaca']= Tamanbaca::all();


        return view('edukasi.dashboard.index',$data );
    }
}
