<?php

namespace App\Services\comdev\site_pgsb;

use App\Models\comdev\site_pgsb\Mangrove;

class MangroveService
{
    public function getAllMangrove()
    {

        return Mangrove::all();
    }

    public function getMangroveById($id)
{

    return Mangrove::find($id);
}
}
