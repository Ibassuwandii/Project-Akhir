<?php

namespace App\Services\comdev\site_sk;

use App\Models\comdev\site_sk\Pertanian;

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
