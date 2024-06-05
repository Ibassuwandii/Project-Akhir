<?php

namespace App\Services\comdev\site_pgsb;

use App\Models\comdev\site_pgsb\Pertanian;

class PertanianService
{
    public function getAllPertanian()
    {

        return Pertanian::all();
    }

    public function getPertanianById($id)
{

    return Pertanian::find($id);
}
}
