<?php

namespace App\Services\comdev\site_tnb;

use App\Models\comdev\site_tnb\Perikanan;

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
