<?php

namespace App\Models\Biodiv\antropogenik;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Antropogenik extends Model
{
    protected $table ='biodiv__antropogenik';

    // // Define the accessor for the 'bulan' attribute
    // public function getBulanAttribute($value)
    // {
    //     // If 'bulan' is not set or null, return null
    //     if (is_null($value)) {
    //         return null;
    //     }

    //     // Parse the 'bulan' value and format it as needed
    //     return Carbon::parse($value)->translatedFormat('F Y'); // Format to "Month Year"
    // }


    function handleUploadPdf()
   {
       $this->handleDeletePdf();
       if (request()->hasFile('file_pdf')) {
           $file_pdf = request()->file('file_pdf');
           $destination = "laporan/Antropogenik";
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