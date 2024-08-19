<?php

namespace App\Services\comdev\site_tnb;

use App\Models\comdev\site_tnb\Kapalsayur;

class KapalsayurService
{
    public function getAllKapalsayur()
    {

        return Kapalsayur::all();
    }

    public function getKapalsayurById($id)
    {

        return Kapalsayur::find($id);
    }
}