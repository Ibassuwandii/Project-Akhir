<?php

namespace App\Http\Controllers\Edukasi\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Edukasi\aksisampah\Aksisampah;
use App\Models\Edukasi\Instagram\Instagram;
use App\Models\edukasi\Tamanbaca\Tamanbaca;
use App\Models\Edukasi\Visitschool\Visitschool;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $data['list_instagram']= Instagram::all();
        // $data['list_aksisampah']= Aksisampah::all();
        // $data['list_tamanbaca']= Tamanbaca::all();
        // $data['list_visitschool']= Visitschool::all();

        $list_visitschool = Visitschool::all();
        $list_instagram = Instagram::all();
        $list_aksisampah = Aksisampah::all();
        $list_tamanbaca = Tamanbaca::all();

        return view('edukasi.dashboard.index', compact('list_visitschool', 'list_tamanbaca', 'list_aksisampah','list_instagram'));
    }
}
