<?php

namespace App\Models\edukasi;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Tamanbaca extends Model
{
    protected $table ='edukasi__tamanbaca';

    function handleUploadFoto()
   {
       $this->handleDeleteFoto();
       if (request()->hasFile('file_foto')) {
           $file_foto = request()->file('file_foto');
           $destination = "Edukasi/tamanbaca";
           $randomStr = Str::random(5);
           $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $file_foto->extension();
           $url = $file_foto->storeAs($destination, $filename);
           $this->file_foto = "app/" . $url;
           $this->save();
       }
   }

   function handleDeleteFoto()
   {
       $file_foto = $this->file_foto;
       if ($file_foto) {
           $path = public_path($file_foto);
           if (file_exists($path)) {
               unlink($path);
           }
           return true;
       }
   }
}
