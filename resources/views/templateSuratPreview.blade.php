@extends('layouts.templateSurat')
@section('container')
<div class="content-wrapper">
        <div class="rangkasurat">
            <table width="100%">
                <tr>
                    {{-- <td><img src={{asset('icon+.png')}} width="140px"></td> --}}
                    {{-- <td><img src="{{ asset('storage/template/iconplus.jpg') }}" width="150px"  class="img img-responsive"/></td> --}}
                    <td class="tengah">
                        <h1>FORM PERMOHONAN PEKERJAAN</h1><br>
                        <h2>SBU BALI ICON PLUS</h2>
                        <h1>DENPASAR</h1>
                        <b>Jl. Gunung Mandala Wangi No. 15, Kel Tegal Harum Denpasar, Bali</b><br>
                    </td>
                    {{-- <td><img src="{{ asset('storage/template/pln.jpg') }}" width="150px"  class="img img-responsive"/></td> --}}
                </tr>
            </table> 
            <br><br><br>
            <table align="center">
                <tr>
                    <td>Nama Pemohon</td>
                    <td width="300"> : {{$data->namaMitra}}</td>
                </tr>
                <tr>
                    <td>Nama Perusahaan</td>
                    <td width="300"> :  {{$data->namaPerusahaan}}</td>
                </tr>
                <tr>
                    <td>Judul Pekerjaan</td>
                    <td width="300"> :  {{$data->pekerjaan}}</td>
                </tr>
                <tr>
                    <td>No.SP2KPA</td>
                    <td width="300"> :  {{$data->noSP2KPA}}</td>
                </tr>
                <tr>
                    <td>Hari Tanggal Mulai Pekerjaan</td>
                    <td width="300"> :  {{$data->haritanggalMulai}}</td>
                </tr>
                <tr>
                    <td>Hari Tanggal Selesai Pekerjaan</td>
                    <td width="300"> :  {{$data->haritanggalSelesai}}</td>
                </tr>
                <tr>
                    <td>Nama Lokasi Pekerjaan</td>
                    <td width="300"> :  {{$data->namaLokasi}}</td>
                </tr>
                <tr>
                    <td>Aktifitas Pekerjaan</td>
                    <td width="300"> :  {{$data->aktifitas}}</td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td width="300"> :  {{$data->lokasi}}</td>
                </tr>
                <tr>
                    <td>Task List</td>
                    <td width="300"> :  {{$data->taskList}}</td>
                </tr>
                <tr>
                    <td colspan="2">Dengan ini Disampaikan bahwa pada hari senin akan
                        dilaksanakan upacara di halaman<br> kantor diskominfo kukar 
                        demikian pemberitahuan ini sekian terimakasih.
                    </td>
                </tr>
            </table>
            <br>
            
            <table class="ttd1">
                <tr>
                    <td><center>Pemohon</center></td>
                </tr>
                <tr>
                    <td height="70">ttd</td>
                </tr>
                <tr>
                    <td><center> <u> {{$data->namaMitra}} </u></center></td>
                </tr>
                <tr>
                    <td><center> {{$data->noHPPegawaiPekerjaan}} </center></td>
                </tr>
            </table>
            <table class="ttd2">
                <tr>
                    <td><center>K3</center></td>
                </tr>
                <tr>
                    <td height="70">ttd</td>
                </tr>
                <tr>
                    <td><center> <u>  {{$data->pengawasK3}} </u></center></td>
                </tr>
                <tr>
                    <td><center> {{$data->noHPPegawaiK3}} </center></td>
                </tr>
            </table>
            <table class="ttd3">
                <tr>
                    <td><center>Supervisor ICON+</center></td>
                </tr>
                <tr>
                    <td height="70">ttd</td>
                </tr>
                <tr>
                    <td><center> <u> Ir. Bahteramsyah </u></center></td>
                </tr>
                <tr>
                    <td><center> 08123678456 </center></td>
                </tr>
            </table>
        </div>
        <br>
    </div>
@endsection