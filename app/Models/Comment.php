<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['dokumentasi_id', 'comment'];

    public function dokumentasi()
    {
        return $this->belongsTo('App\Models\comdev\Dokumentasi\Dokumentasi', 'dokumentasi_id');
    }
}