<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksana extends Model
{
    use HasFactory;
    protected $table ="data_pelaksanas";
    protected $guarded = ['id'];
    protected $fillable = [
        'idDataPengajuan','namaPelaksana','noTlp'
    ];

    public function pengajuancontroller()
    {
        return $this->belongsTo(dataPengajuan::class);
    }
}
