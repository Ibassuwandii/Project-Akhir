<?php

namespace App\Http\Controllers\Biodiv\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Biodiv\antropogenik\Antropogenik;

class DashboardController extends Controller
{
    public function index()
    {
        $data['list_antropogenik']= Antropogenik::all();

        // Kirim data ke view dashboard.blade.php
        return view('comdev.dashboard.index',$data );
    }
}