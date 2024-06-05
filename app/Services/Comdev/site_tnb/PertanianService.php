<?php

namespace App\Services\comdev\site_tnb;

use App\Models\comdev\site_tnb\Pertanian;

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
