<?php

namespace App\Services\comdev\site_pgsb;

use App\Models\comdev\site_pgsb\Perikanan;

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
