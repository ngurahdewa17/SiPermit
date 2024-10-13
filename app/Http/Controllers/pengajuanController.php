<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verifikasi;
use App\Models\dataPengajuan;
use App\Models\Pelaksana;


use PDF;


class pengajuanController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard',[
        ]);
    }

    public function dashboardAdmin()
    {
        return view('dashboard.dashboardAdmin');
    }

    public function tampilPengajuan()
    {
        $dataPengajuan = dataPengajuan::latest()->paginate(5);
       
        return view('pengajuan.tampilPengajuan',compact(['dataPengajuan']))
        ->with('no',1);
    }

    public function form_pengajuan(){
        return view('pengajuan.formInputPengajuan',[
        ]);
    }

    public function store_pengajuan(Request $request)
    {
        $this->validate($request, [
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

        // $request->file('image')->store('posts-images');
        // $image = $request->file('image');
        // $image->public_path('posts', $image->hashName());
        $fileName = time().$request->file('image')->hashName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path; 
        $aktifitas = join(',',$request->input('aktifitas'));
        $lokasi = join(',',$request->input('lokasi'));
        $taskList = join(',',$request->input('taskList'));
        // dd($request);
        dataPengajuan::create([
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
            'taskList'  => $taskList,
            'pengawasPekerjaan' => $request->pengawasPekerjaan,
            'noHPPegawaiPekerjaan' => $request->noHPPegawaiPekerjaan,
            'pengawasK3' => $request->pengawasK3,
            'noHPPegawaiK3' => $request->noHPPegawaiK3,
            'image' =>  $fileName,
            'approve' => 3, 
        ]);
       
        return redirect('/tampil_pengajuan')->with('success','Data Berhasil Disimpan!');
        // return redirect('/form_dataPelaksana')->with('idDataPengajuan',$id);
    }

    public function formPelaksana($id)
    {
        $data=Pelaksana::where('idDataPengajuan',$id)->first();
       
       
        
        if(isset($data)){
            return view('pengajuan.editforminputPengajuanPelaksana')
            ->with('id',$id);
        }
        else{
            return view('pengajuan.forminputPengajuanPelaksana')
            ->with('id',$id);
        }   
    }

    public function formEditPelaksana(Request $request,$id)
    {   
        $request->validate([
            'moreFields.*.namaPelaksana' => 'required',
            'moreFields.*.noTlp' => 'required',
            'moreFields.*.idDataPengajuan' => 'required',
        ]);  

        $jumlahPelaksana = Pelaksana::where('idDataPengajuan',$id)->count();
        $dataPelaksana = Pelaksana::where('idDataPengajuan',$id)->get();
        for($i=0; $i<$jumlahPelaksana; $i++)
        {
            $idPelaksana=$dataPelaksana[$i]->id;
            $deleteData = Pelaksana::find($idPelaksana);
            $deleteData->delete();
        }
        
        foreach ($request->moreFields as $key => $value) {
            Pelaksana::create($value);
        }
        return redirect('/tampil_pengajuan')->with('success','Data Berhasil Update');

    }

    public function formEditPengajuan($id)
    {
        $editPengajuan = dataPengajuan::find($id);
        return view('pengajuan.editPengajuan', compact(['editPengajuan']));
    }


    public function storeEditPengajuan(Request $request,$id)
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
            'approve' => 3,
        ]);
      
        return redirect('/tampil_pengajuan')->with('success','Data Refisi Berhasil Diupdate');
    }

    public function storePelaksana(Request $request)
    {
        $request->validate([
            'moreFields.*.namaPelaksana' => 'required',
            'moreFields.*.noTlp' => 'required',
            'moreFields.*.idDataPengajuan' => 'required',
        ]);   

        // dd($request);  
        foreach ($request->moreFields as $key => $value) {
            Pelaksana::create($value);
        }
        return redirect('/tampil_pengajuan')->with('success','Data Berhasil Disimpan!');
    }

    // public function printTemplate()
    // {
    //     return view('layouts.templateSuratCoba',[
            
    //     ]);
    // }

    public function convert_Form()
    {
        $data=[];
		$pdf = PDF::loadView('layouts.templateSuratJSA', $data);
		// return $pdf->download('invoice'.now()->timestamp.'.pdf');
        return $pdf->download('invoice1.pdf');
		// return view('',[

		// ]);
    }
    public function tampil()
    {
        $pdf = PDF::loadView('layouts.templateSuratJSABACKUP1');
        $path = public_path('pdf_docs/');
        $fileName= time().'.'.'pdf';
        $pdf->save($path. '/' .$fileName);
        $generated_pdf_link = url('pdf_docs/'.$fileName);
        return $pdf->download($fileName);
        // return response()->json($generated_pdf_link);
    }

    // public function downloadFile($id)
    // {
       
    //     $data = dataPengajuan::find($id);
    //     $pdf= PDF::LoadView('layouts.templateSuratJSA', compact('data'));
    //     // $path = public_path('pdf_docs/');
    //     $fileName= time().'.'.'pdf';
    //     // $pdf->save($path. '/' .$fileName);
    //     // $generated_pdf_link = url('pdf_docs/'.$fileName);
    //     return $pdf->download($fileName);
    //     // return response()->json($generated_pdf_link);
    // }


    public function downloadFile($id)
    {
        $data = dataPengajuan::find($id);
        $idDataPelaksana = $data->id;
        $dataPelaksana = Pelaksana::where('idDataPengajuan', $idDataPelaksana)
        ->get('namaPelaksana');
        $pdf= PDF::LoadView('layouts.templateSuratJSA', [
            'data' => $data,
            'dataPelaksana' => $dataPelaksana,
            'no' => 1,
        ]);
        // $path = public_path('pdf_docs/');
        $fileName= time().'.'.'pdf';
        // $pdf->save($path. '/' .$fileName);
        // $generated_pdf_link = url('pdf_docs/'.$fileName);
        return $pdf->download($fileName);
        // return response()->json($generated_pdf_link);
    }

    public function testingView()
    {
        return view('layouts.templateSuratJSABACKUP1',[
            
        ]);
    }

  

    public function testing1()
    {
        return view('tes');
    }
}
