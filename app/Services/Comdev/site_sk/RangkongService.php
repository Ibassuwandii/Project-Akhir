<?php

namespace App\Services\comdev\site_sk;

use App\Models\comdev\site_sk\Rangkong;

class RangkongService
{
    public function getAllRangkong()
    {

        return Rangkong::all();
    }

    public function getRangkongById($id)
{

    return Rangkong::find($id);
}
}
