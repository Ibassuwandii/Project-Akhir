<?php

namespace App\Services\edukasi;

use App\Models\edukasi\peta\Peta;

class PetaService
{
    public function getAllPeta()
    {

        return Peta::all();
    }
}
