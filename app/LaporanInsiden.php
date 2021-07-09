<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanInsiden extends Model
{
    protected $table="laporan_insiden";
    protected $fillable = ['nama','nomor_telpon','lokasi_insiden','jenis_kendaraan','keterangan'];
}
