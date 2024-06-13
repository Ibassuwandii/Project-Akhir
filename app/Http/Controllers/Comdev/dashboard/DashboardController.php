<?php

namespace App\Http\Controllers\Comdev\dashboard;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Mangrove;
use App\Models\comdev\site_sk\Perikanan;
use App\Models\Comdev\site_sk\Pertanian; // Sesuaikan dengan namespace model Anda

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data pertanian dari model Pertanian
        $data['list_pertanian']= Pertanian::all();
        $data['list_perikanan']= Perikanan::all();
        $data['list_mangrove']= Mangrove::all();


        // Kirim data ke view dashboard.blade.php
        return view('comdev.dashboard.index',$data );
    }
}
