<?php

namespace App\Models\comdev\Dokumentasi;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Dokumentasi extends Model
{
    protected $table = 'comdev__dokumentasi';

    // Accessor to format the tanggal_kegiatan field
    public function getFormattedTanggalKegiatanAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_kegiatan'])->translatedFormat('d F Y');
    }

    // Relationship to comments
    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'dokumentasi_id');
    }
}