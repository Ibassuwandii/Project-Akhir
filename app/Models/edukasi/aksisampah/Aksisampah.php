<?php

namespace App\Models\Edukasi\Aksisampah;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Aksisampah extends Model
{
    protected $table ='edukasi__aksisampah';

    function handleUploadPdf()
    {
        $this->handleDeletePdf();
        if (request()->hasFile('file_pdf')) {
            $file_pdf = request()->file('file_pdf');
            $destination = "laporan/pdf";
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
