<?php

namespace App\Services\comdev\site_pgsb;

use App\Models\comdev\site_pgsb\Tpom;

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
