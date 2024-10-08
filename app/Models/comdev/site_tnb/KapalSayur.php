<?php

namespace App\Models\comdev\site_tnb;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Kapalsayur extends Model
{
    protected $table ='site_tnb__kapalsayur';

    function handleUploadFoto()
   {
       $this->handleDeleteFoto();
       if (request()->hasFile('file_foto')) {
           $file_foto = request()->file('file_foto');
           $destination = "SiteSK/Kapalsayur";
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