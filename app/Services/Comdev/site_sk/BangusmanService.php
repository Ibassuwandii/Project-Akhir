<?php

namespace App\Services\comdev\site_sk;

use App\Models\comdev\site_sk\Bangusman;

class BangusmanService
{
    public function getAllBangusman()
    {

        return Bangusman::all();
    }

    public function getBangusmanById($id)
{

    return Bangusman::find($id);
}
}
