<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verifikasi;
use App\Models\dataPengajuan;

class verifikasiController extends Controller
{
    public function formVerifikasi()
    {
        $idPengajuan = dataPengajuan::all();
        return view('verifikasi.formInputVerifikasi', compact(['idPengajuan']));
    }

    public function insertVerifikasi(Request $request)
    {
        $this->validate($request,[
            'sistem_pengajuan_id' => 'required',
            'namaPengaju' => 'required',
            'namaVerifikasi' => 'required',
            'imageVerifikasi' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
        ]);
       

        $fileName = time().$request->file('imageVerifikasi')->hashName();
        $path = $request->file('imageVerifikasi')->storeAs('verifikasi', $fileName, 'public');
        $requestData["imageVerifikasi"] = '/storage/'.$path;

        Verifikasi::create([
            'sistem_pengajuan_id' => $request->sistem_pengajuan_id,
            'namaPengaju' => $request->namaPengaju,
            'namaVerifikasi' => $request->namaVerifikasi,
            'imageVerifikasi' => $fileName,
        ]);
        return redirect('/tampil_verifikasi')->with('success','Data Berhasil Disimpan!');

    }

    public function tampilVerifikasi()
    {
        $dataVerifikasi = Verifikasi::latest()->paginate(5);
        return view('verifikasi.tampilVerifikasi', compact(['dataVerifikasi']));
    }

    public function editVerifikasi($id)
    {
        $idPengajuan = dataPengajuan::all();
        $editVerifikasi = Verifikasi::find($id);
        return view('verifikasi.editVerifikasi',[
            'idPengajuan' => $idPengajuan,
            'editVerifikasi' => $editVerifikasi,
        ]);
    }

    public function updateVerifikasi(Request $request,$id)
    {
        $this->validate($request,[
            'sistem_pengajuan_id' => 'required',
            'namaPengaju' => 'required',
            'namaVerifikasi' => 'required',
            'imageVerifikasi' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
        ]);

        $fileName = time().$request->file('imageVerifikasi')->hashName();
        $path = $request->file('imageVerifikasi')->storeAs('verifikasi', $fileName, 'public');
        $requestData["imageVerifikasi"] = '/storage/'.$path;

        $dataVerifikasi = Verifikasi::find($id);
        $dataVerifikasi->update([
            'sistem_pengajuan_id' => $request->sistem_pengajuan_id,
            'namaPengaju' => $request->namaPengaju,
            'namaVerifikasi' => $request->namaVerifikasi,
            'imageVerifikasi' => $fileName,
        ]);
        return redirect('/tampil_verifikasi')->with('success','Data Berhasil Diupdate');
    }

    public function downloadScanPDF($id)
    {
        $namaScanPDF=Verifikasi::find($id);
        $file='storage/verifikasi/'.$namaScanPDF->imageVerifikasi;
        return redirect($file);
    }

    public function formrevisiRejectedVerifikasi($id)
    {
        $editVerifikasi = Verifikasi::find($id);
        return view('verifikasi.refisiRejectedVerifikasi',[
            'editVerifikasi' => $editVerifikasi,
        ]);
    }

    public function storeRefisiRejected(Request $request,$id)
    {
        $this->validate($request,[
            'namaMitra' => 'required|min:3',
            'email' => 'required',
            'namaPerusahaan' => 'required',
            'pekerjaan' => 'required',
            'noSP2KPA' => 'required',
            'haritanggalMulai' => 'required',
            'haritanggalSelesai' => 'required',
            'namaLokasi' => 'required',
            'aktifitas' => 'required',
            'lokasi' => 'required',
            'taskList' => 'required',
            'pengawasPekerjaan' => 'required',
            'noHPPegawaiPekerjaan' => 'required|numeric',
            'pengawasK3' => 'required',
            'noHPPegawaiK3' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $fileName = time().$request->file('image')->hashName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path; 
        $aktifitas = join(',',$request->input('aktifitas'));
        $lokasi = join(',',$request->input('lokasi'));
        $taskList = join(',',$request->input('taskList'));

        $dataPengajuan = dataPengajuan::find($id);
        $idVerifikasi = $request->idDataVerifikasi;
        
        $dataVerifikasi = Verifikasi::find($idVerifikasi);
      
        $dataPengajuan->update([
            'namaMitra' => $request->namaMitra,
            'email' => $request->email,
            'namaPerusahaan' => $request->namaPerusahaan,
            'pekerjaan' => $request->pekerjaan,
            'noSP2KPA' => $request->noSP2KPA,
            'haritanggalMulai' => $request->haritanggalMulai,
            'haritanggalSelesai' => $request->haritanggalSelesai,
            'namaLokasi' => $request->namaLokasi,
            'aktifitas' => $aktifitas,
            'lokasi' => $lokasi,
            'taskList' => $taskList,
            'pengawasPekerjaan' => $request->pengawasPekerjaan,
            'noHPPegawaiPekerjaan' => $request->noHPPegawaiPekerjaan,
            'pengawasK3' => $request->pengawasK3,
            'noHPPegawaiK3' => $request->noHPPegawaiK3,
            'image' =>  $fileName,
            'approve' => 4,
        ]);
        $dataVerifikasi->update([
            'approve' => 4,
        ]);
        return redirect('/tampil_verifikasi')->with('success','Data Refisi Berhasil Diupdate');   
    }

    public function formRefisiVerifikasi($id)
    {
        $idPengajuan = dataPengajuan::all();
        $editVerifikasi = Verifikasi::find($id);
        return view('verifikasi.refisiDataVerifikasi',[
            'idPengajuan' => $idPengajuan,
            'editVerifikasi' => $editVerifikasi,
        ]);
    }

    public function storeDataRevisiVerifikasi(Request $request,$id)
    {
        $this->validate($request,[
            'sistem_pengajuan_id' => 'required',
            'namaPengaju' => 'required',
            'namaVerifikasi' => 'required',
            'imageVerifikasi' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
        ]);

        $fileName = time().$request->file('imageVerifikasi')->hashName();
        $path = $request->file('imageVerifikasi')->storeAs('verifikasi', $fileName, 'public');
        $requestData["imageVerifikasi"] = '/storage/'.$path;

        $dataVerifikasi = Verifikasi::find($id);
        $dataVerifikasi->update([
            'sistem_pengajuan_id' => $request->sistem_pengajuan_id,
            'namaPengaju' => $request->namaPengaju,
            'namaVerifikasi' => $request->namaVerifikasi,
            'imageVerifikasi' => $fileName,
            'approve' => 6,
        ]);

        return redirect('/tampil_verifikasi')->with('success','Data Revisi Verifikasi Berhasil Diupdate');   
    }

  
}
