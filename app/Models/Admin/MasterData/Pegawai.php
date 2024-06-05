<?php

namespace App\Models\Admin\MasterData;
use App\Models\ModelAuthenticate;
use App\Models\Admin\MasterData\Role;
use Illuminate\Support\Str;

class Pegawai extends ModelAuthenticate

{
    protected $table = 'admin__pegawai';
   public $fillable = ['nama', 'email'];

   public function setPasswordAttribute ($value)
   {
    $this->attributes['password'] = bcrypt($value);
   }

   public function role()
   {
       return $this->hasMany(Role::class, 'id_pegawai');
   }

   function handleUploadFoto()
   {
       $this->handleDeleteFoto();
       if (request()->hasFile('file_foto')) {
           $file_foto = request()->file('file_foto');
           $destination = "Pegawai/profile";
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
