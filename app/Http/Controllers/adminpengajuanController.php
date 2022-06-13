<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verifikasi;
use App\Models\dataPengajuan;

class adminpengajuanController extends Controller
{
    public function tampilPengajuanAdmin()
    {
        $dataPengajuan = dataPengajuan::latest()->paginate(5);
        return view('admins.datapengajuan.AdminTampilPengajuan', compact(['dataPengajuan']))
        ->with('no',1);
    }

    public function konfirmasidataPengajuan(Request $request,$id)
    {
        $dataPengajuan=dataPengajuan::find($id);
        $dataPengajuan->update([
            'namaVerifikasi' => $request->namaVerifikasi,
            'approve' => 0,
        ]);
        return redirect('/tampilDataPengajuanAdmin')->with('success','Data Berhasil Di Konfirmasi');
    }
    
    public function refisikonfirmasidataPengajuan(Request $request, $id)
    {
        $dataPengajuan=dataPengajuan::find($id);
        $idPengajuan=$dataPengajuan->id;
        $dataVerifikasi=Verifikasi::where('sistem_pengajuan_id', $idPengajuan)->first();
        $idVerifikasi=$dataVerifikasi->id;
        $dataVerifikasi=Verifikasi::find($idVerifikasi);
        $dataPengajuan->update([
            'namaVerifikasi' => $request->namaVerifikasi,
            'approve' => 0,
        ]);
        $dataVerifikasi->update([
            'approve' => 5,
        ]);
        return redirect('/tampilDataPengajuanAdmin')->with('success','Data Refisi Berhasil Di Konfirmasi');
        
    }
}
