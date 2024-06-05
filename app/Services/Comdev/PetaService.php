<?php

namespace App\Services\comdev;

use App\Models\comdev\peta\Peta;

class PetaService
{
    public function getAllPeta()
    {

        return Peta::all();
    }
}
