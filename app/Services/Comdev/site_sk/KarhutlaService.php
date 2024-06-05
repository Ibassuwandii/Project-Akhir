<?php

namespace App\Services\comdev\site_sk;

use App\Models\comdev\site_sk\Karhutla;

class KarhutlaService
{
    public function getAllKarhutla()
    {

        return Karhutla::all();
    }

    public function getKarhutlaById($id)
{

    return Karhutla::find($id);
}
}
