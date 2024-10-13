@extends('layouts.mainindex')
@section('container')
    <div class="content-wrapper" style="background: white">
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Pemohon</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item "><a href="#" class="d-block text-decoration-none">Data User</a></li>
                            <li class="breadcrumb-item active">MITRA</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">  
                                <div class="x_title">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <a href="/form_pengajuan" class="btn btn-success" class="text-decoration-none">AJUKAN PERMOHONAN</a >
                                        </div>
                                        <div class="col-md-4">
                                            <form class="d-flex" role="search">
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                            </form>          
                                        </div>
                                    </div>
                                    <br>
                                   
                                    {{-- <div class="mb-2">
                                        <a href="/convert" class="btn btn-success" class="text-decoration-none">DOWNLOAD FILE PDF</a >
                                    </div> --}}
                                    <div class="clearfix"></div>
                                </div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="x_content">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap text-center" cellspacing="0" width="50%">
                                        <thead class="primary">
                                            <tr class="text-bold">
                                                <td>No</td>
                                                <td>ID Pengajuan</td>
                                                <td>Email Pemohon</td>
                                                <td>No.SP2K/PA</td>
                                                <td>Tanggal Pekerjaan Mulai</td>
                                                <td>Tanggal Pekerjaan Berakhir</td>
                                                <td>Aktifitas</td>
                                                <td>Lokasi</td>
                                                <td>Pengawas Pekerjaan</td>
                                                <td>Pengawas K3</td>
                                                <td>Image K3</td>
                                                <td>Aksi | Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dataPengajuan as $dataP)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$dataP->id}}</td>  
                                                <td>{{$dataP->namaMitra}}</td>
                                                <td>{{$dataP->noSP2KPA}}</td>
                                                <td>{{$dataP->haritanggalMulai}}</td>
                                                <td>{{$dataP->haritanggalSelesai}}</td>
                                                <td>{{$dataP->aktifitas}}</td>
                                                <td>{{$dataP->lokasi}}</td>
                                                <td>{{$dataP->pengawasPekerjaan}}</td>
                                                <td>{{$dataP->pengawasK3}}</td>
                                                 
                                                <td><img src="{{ asset('storage/images/'.$dataP->image) }}" width="70" height="100" class="img img-responsive"/></td>
                                                @if($dataP->approve == 0)               
                                                    <td class="table-warning text-warning">
                                                        <div class="form-group">
                                                            <a href="/preview/{{$dataP->id}}/cek" class="btn btn-success" style="width: 220px;">DOWNLOAD</a>
                                                            {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="/tampil_verifikasi" class="btn btn-success" style="width: 220px;">UPLOAD/EDIT VERIFIKASI DATA</a>
                                                            {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-warning" style="width: 220px;">PENDING</a>
                                                        </div>
                                                    </td>                                     
                                                @elseif($dataP->approve == 1)
                                                    <td class="table-success text-success">
                                                        <div class="form-group">
                                                            <a href="/preview/{{$dataP->id}}/cek" class="btn btn-success" style="width: 220px;">DOWNLOAD</a>
                                                            {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-success" style="width: 220px;">APPROVED</a>
                                                        </div>
                                                    </td>
                                                @elseif($dataP->approve == 3)
                                                    <td>
                                                        <div class="form-group">
                                                            <a href="/form_editPengajuan/{{$dataP->id}}/cek" class="btn btn-success" style="width: 220px;">EDIT PENGAJUAN</a>
                                                            {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                        </div>
                                                        <div class="form-group"> 
                                                            <a href="/formdataPelaksana/{{$dataP->id}}/cek" class="btn btn-success" style="width: 220px;">TAMBAH / EDIT PELAKSANA</a>
                                                            {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-warning" style="width: 220px;">MENUNGGU KONFIRMASI</a>
                                                        </div>
                                                    </td>
                                                @elseif($dataP->approve == 4)
                                                    <td class="table-warning text-warning">
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-warning" style="width: 220px;">MENUNGGU KONFIRMASI</a>
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="table-danger text-danger">
                                                        <div class="form-group">
                                                            <a href="/preview/{{$dataP->id}}/cek" class="btn btn-success" style="width: 220px;">DOWNLOAD</a>
                                                            {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-danger" style="width: 220px;">REJECTED</a>
                                                        </div>
                                                    </td>
                                                @endif
                                          
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{  $dataPengajuan->links() }}
                                    {{-- {{ $data_pelanggan->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    </div>
@endsection