<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{

    use HasFactory;
    protected $table="verifikasis";
    protected $guarded = ['id'];
    protected $fillable =[
        'sistem_pengajuan_id','namaPengaju','namaVerifikasi','imageVerifikasi','coment','approve'
    ];
    public function sistemPengajuan()
    {
        return $this->belongsTo(dataPengajuan::class);
    }
}
