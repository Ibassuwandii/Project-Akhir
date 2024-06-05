<?php

namespace App\Services\comdev\site_sk;

use App\Models\comdev\site_sk\Tpom;

class TpomService
{
    public function getAllTpom()
    {

        return Tpom::all();
    }

    public function getTpomById($id)
{

    return Tpom::find($id);
}
}
