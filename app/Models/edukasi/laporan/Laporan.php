<?php

namespace App\Models\Edukasi\laporan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Laporan extends Model
{
    protected $table ='edukasi__laporan';


    function handleUploadPdf()
   {
       $this->handleDeletePdf();
       if (request()->hasFile('file_pdf')) {
           $file_pdf = request()->file('file_pdf');
           $destination = "laporan/Edukasi";
           $randomStr = Str::random(5);
           $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $file_pdf->extension();
           $url = $file_pdf->storeAs($destination, $filename);
           $this->file_pdf = "app/" . $url;
           $this->save();
       }
   }

   function handleDeletePdf()
   {
       $file_pdf = $this->file_pdf;
       if ($file_pdf) {
           $path = public_path($file_pdf);
           if (file_exists($path)) {
               unlink($path);
           }
           return true;
       }
   }

}
