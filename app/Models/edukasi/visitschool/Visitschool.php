<?php

namespace App\Models\Edukasi\Visitschool;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Visitschool extends Model
{
    protected $table ='edukasi__visitschool';

    function handleUploadFoto()
    {
        $this->handleDeleteFoto();
        if (request()->hasFile('file_Foto')) {
            $file_Foto = request()->file('file_Foto');
            $destination = "VisitSchool/Foto";
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
