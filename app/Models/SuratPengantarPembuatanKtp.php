<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengantarPembuatanKtp extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'surat_pengantar_pembuatan_ktp';

    protected $guarded = [];

    public function getKey()
    {
        return $this->id;
    }

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'id_surat', 'id');
    }
}
