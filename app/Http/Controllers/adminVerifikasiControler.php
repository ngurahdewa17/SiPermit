<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verifikasi;
use App\Models\dataPengajuan;

class adminVerifikasiControler extends Controller
{
    public function verifikasiAdmin()
    {
        $dataVerifikasi = Verifikasi::latest()->paginate(5);
        return view('admins.verifikasiadmin.tampilVerifikasiAdmin', compact(['dataVerifikasi']));
    }

    public function approvedVerifikasi($id)
    {
        $dataVerifikasi = Verifikasi::find($id);
        $statusPengajuan = $dataVerifikasi->sistemPengajuan->id;
        $approvedataPengajuan = dataPengajuan::find($statusPengajuan);
        $dataVerifikasi->update([
            'approve' => 1,
        ]);
        $approvedataPengajuan->update([
            'approve' => 1,
        ]);
        return redirect('/tampiladminVerifikasi')->with('success','Data Berhasil Di Setujui');

    }

    public function unapprovedVerifikasi($id)
    {
        $dataVerifikasi = Verifikasi::find($id);
        $statusPengajuan = $dataVerifikasi->sistemPengajuan->id;
        $approvedataPengajuan = dataPengajuan::find($statusPengajuan);
        $dataVerifikasi->update([
            'approve' => 0,
        ]);
        $approvedataPengajuan->update([
            'approve' => 0,
        ]);

        return redirect('/tampiladminVerifikasi')->with('success','Data Berhasil Tidak Di Setujui');
    }

    public function komentarVerifikasi($id)
    {
        $dataKomentar = Verifikasi::find($id);
        return view('admins.verifikasiadmin.komentarVerifikasiAdmin', compact(['dataKomentar']));
    }

    public function dataRejectedVerifikasi(Request $request,$id)
    {
        $this->validate($request,[
            'coment' => 'required',
        ]);

        $dataVerifikasi= Verifikasi::find($id);
        $statusPengajuan = $dataVerifikasi->sistemPengajuan->id;
        $approvedataPengajuan = dataPengajuan::find($statusPengajuan);

        $dataVerifikasi->update([
            'coment' => $request->coment,
            'approve' => 2,
        ]);
        $approvedataPengajuan->update([
            'approve' => 2,
        ]); 

        return redirect('/tampiladminVerifikasi')->with('success','Data Berhasil Di Reject');

    }
}
