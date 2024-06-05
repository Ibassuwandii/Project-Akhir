<?php

namespace App\Services\comdev\site_sk;

use App\Models\comdev\site_sk\Perikanan;

class PerikananService
{
    public function getAllPerikanan()
    {

        return Perikanan::all();
    }

    public function getPerikananById($id)
{

    return Perikanan::find($id);
}
}
