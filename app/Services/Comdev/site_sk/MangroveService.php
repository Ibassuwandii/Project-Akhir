<?php

namespace App\Services\comdev\site_sk;

use App\Models\comdev\site_sk\Mangrove;

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
