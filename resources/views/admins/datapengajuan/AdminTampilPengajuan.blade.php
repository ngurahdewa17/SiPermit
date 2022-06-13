@extends('layouts.mainadmin')
@section('container')
    <div class="content-wrapper" style="background: white">
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Pengajuan Mitra</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item "><a href="#" class="d-block text-decoration-none">Data User</a></li>
                            <li class="breadcrumb-item active">ADMIN</li>
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
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
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
                                                <td>Status</td>
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
                                                            <a href="/preview/{{$dataP->id}}/cek" class="btn btn-success" style="width: 220px;">DOWNLOAD FORM</a>
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
                                                    <td class="table-warning text-warning">              
                                                        <form method="POST" action="/konfirmasiPTL/{{$dataP->id}}/update">
                                                            @csrf
                                                            @method('put')
                                                            <div class="form-group">
                                                                <input type="submit" name="print" value="KONFIRMASI"  class="btn btn-warning" style="width: 220px;" />
                                                                <input type="hidden" name="_method" value="PUT" />
                                                                <input type="hidden" name="namaVerifikasi" value="{{Auth::user()->name}}" />
                                                        </form>
                                                        {{-- <a href="/kofirmasiPTL/{{$dataP->id}}/update" class="btn btn-warning" style="width: 160px;">KONFIRMASI</a> --}}    
                                                    </td>
                                                @elseif($dataP->approve == 4)
                                                    <td class="table-warning text-warning">              
                                                        <form method="POST" action="/konfirmasirefisiPTL/{{$dataP->id}}/update">
                                                            @csrf
                                                            @method('put')
                                                            <div class="form-group">
                                                                <input type="submit" name="print" value="KONFIRMASI REVISI"  class="btn btn-danger" style="width: 220px;" />
                                                                <input type="hidden" name="_method" value="PUT" />
                                                                <input type="hidden" name="namaVerifikasi" value="{{Auth::user()->name}}" />
                                                        </form>
                                                        {{-- <a href="/kofirmasiPTL/{{$dataP->id}}/update" class="btn btn-warning" style="width: 160px;">KONFIRMASI</a> --}}    
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