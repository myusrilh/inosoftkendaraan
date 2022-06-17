<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'kendaraans';
    protected $fillable =['tipe_kendaraan','warna','tahun_keluaran','mesin','harga','tipe','kapasitas_penumpang','tipe_suspensi','tipe_transmisi'];

}
