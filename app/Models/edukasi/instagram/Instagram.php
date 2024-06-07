<?php

namespace App\Models\Edukasi\Instagram;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $table ='edukasi__instagram';

    function handleUploadFoto()
    {
        $this->handleDeleteFoto();
        if (request()->hasFile('file_Foto')) {
            $file_Foto = request()->file('file_Foto');
            $destination = "Instagram/Foto";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $file_Foto->extension();
            $url = $file_Foto->storeAs($destination, $filename);
            $this->file_Foto = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFoto()
    {
        $file_Foto = $this->file_Foto;
        if ($file_Foto) {
            $path = public_path($file_Foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
