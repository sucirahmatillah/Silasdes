<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'surat';

    protected $guarded = [];

    public function getKey()
    {
        return $this->id;
    }

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk', 'id');
    }

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class, 'id_jenis_surat', 'id');
    }

    public function statusSurat()
    {
        return $this->belongsTo(StatusSurat::class, 'id_status_surat', 'id');
    }

    public function suratKeteranganDomisili()
    {
        return $this->hasOne(SuratKeteranganDomisili::class, 'id_surat', 'id');
    }

    public function suratKeteranganKelahiran()
    {
        return $this->hasOne(SuratKeteranganKelahiran::class, 'id_surat', 'id');
    }

    public function suratKeteranganKematian()
    {
        return $this->hasOne(SuratKeteranganKematian::class, 'id_surat', 'id');
    }

    public function suratKeteranganTidakMampu()
    {
        return $this->hasOne(SuratKeteranganTidakMampu::class, 'id_surat', 'id');
    }

    public function suratPengantarPembuatanKtp()
    {
        return $this->hasOne(SuratPengantarPembuatanKtp::class, 'id_surat', 'id');
    }
}
