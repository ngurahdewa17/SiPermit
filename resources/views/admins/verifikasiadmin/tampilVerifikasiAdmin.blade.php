@extends('layouts.mainadmin')
@section('container')
    <div class="content-wrapper" style="background: white;">
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Verifikasi Data Mitra</h1>
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
                                        <div class="col-md-4 ">
                                            <form class="d-flex" role="search">
                                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-success" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- <div class="mb-2">
                                        
                                    </div> --}}
                                  
                                    {{-- <div class="mb-2">
                                        <a href="/convert" class="btn btn-success" class="text-decoration-none">DOWNLOAD FILE PDF</a >
                                    </div> --}}
                                    <div class="clearfix"></div>
                                </div>
                                @if ($message = Session::get('success'))
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="x_content">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap text-center" cellspacing="0" width="50%">
                                        <thead class="primary">
                                            <tr class="text-bold">
                                                <td>ID Pengajuan</td>
                                                <td>No.SP2K/PA</td>
                                                <td>Nama Pengaju</td>
                                                <td>Nama Verifikasi</td>
                                                <td>Nama Perusahaan</td>
                                                <td>Komentar</td>
                                                <td>Status</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dataVerifikasi as $dataV)
                                            <tr>
                                                <td>{{$dataV->sistem_pengajuan_id}}</td>  
                                                <td>{{$dataV->sistemPengajuan->noSP2KPA}}</td>
                                                <td>{{$dataV->namaPengaju}}</td>
                                                <td>{{$dataV->namaVerifikasi}}</td> 
                                                <td>{{$dataV->sistemPengajuan->namaPerusahaan}}</td>
                                                <td>{{$dataV->coment}}</td>
                                                @if($dataV->approve == 0)
                                                    <td class="table-warning text-warning">PENDING</td>
                                                @elseif($dataV->approve == 1)
                                                    <td class="table-success text-success">APPROVED</td>
                                                @elseif($dataV->approve == 3)
                                                    <td class="table-warning text-warning">MENUNGGU KONFIRMASI</td>
                                                @elseif($dataV->approve == 4)
                                                    <td class="table-warning text-warning">MENUNGGU KONFIRMASI</td>
                                                @elseif($dataV->approve == 5)
                                                    <td class="table-warning text-warning">MENUNGGU KONFIRMASI</td>
                                                @elseif($dataV->approve == 6)
                                                    <td class="table-warning text-warning">PENDING</td>
                                                @else
                                                    <td class="table-danger text-danger">REJECTED</td>
                                                @endif
                                                <td>
                                                    <div class="row">
                                                        @if($dataV->approve == 0)
                                                            <div class="col-lg-12 col-md-12  col-sm-12 ">
                                                                <div class="form-group ">
                                                                <a href="/approved/{{$dataV->id}}/verifikasi" class="btn btn-success" style="width: 150px;">APPROVED</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                </div> 
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <a href="/downloadfile/{{$dataV->id}}/cek" class="btn btn-warning" style="width: 150px;">DOWNLOAD</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}              
                                                                </div>
                                                            </div>
                                                   
                                                            <div class="col-lg-12 col-md-12 col-sm-12" >
                                                                <div class="form-group ">
                                                                    <div class="form-group">
                                                                        <a href="/komentar/{{$dataV->id}}/cek" class="btn btn-danger" style="width: 150px;">REJECTED</a>
                                                                        {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif($dataV->approve == 1)
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group ">
                                                                    <a href="/unapproved/{{$dataV->id}}/verifikasi" class="btn btn-warning" style="width: 150px;">UNAPPROVED</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                </div> 
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <a href="/downloadfile/{{$dataV->id}}/cek" class="btn btn-info" style="width: 150px;">DOWNLOAD PDF</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                    
                                                                </div>
                                                            </div>
                                                        @elseif($dataV->approve == 3)
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <a href="#" class="btn btn-warning" style="width: 150px;">MENUNGGU KONFIRMASI</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                    
                                                                </div>
                                                            </div>
                                                        @elseif($dataV->approve == 4)
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <a href="" class="btn btn-warning" style="width: 150px;">MENUNGGU KONFIRMASI</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                    
                                                                </div>
                                                            </div>
                                                        @elseif($dataV->approve == 5)
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <a href="" class="btn btn-warning" style="width: 150px;">MENUNGGU KONFIRMASI</a>
                                                                {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                
                                                            </div>
                                                        </div>
                                                        @elseif($dataV->approve == 6)
                                                            <div class="col-lg-12 col-md-12  col-sm-12 ">
                                                                <div class="form-group ">
                                                                <a href="/approved/{{$dataV->id}}/verifikasi" class="btn btn-success" style="width: 150px;">APPROVED</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                </div> 
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <a href="/downloadfile/{{$dataV->id}}/cek" class="btn btn-warning" style="width: 150px;">DOWNLOAD</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                    
                                                                </div>
                                                            </div>
                                                
                                                            <div class="col-lg-12 col-md-12 col-sm-12" >
                                                                <div class="form-group ">
                                                                    <div class="form-group">
                                                                        <a href="/komentar/{{$dataV->id}}/cek" class="btn btn-danger" style="width: 150px;">REJECTED</a>
                                                                        {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                                                <div class="form-group ">
                                                                    <a href="/unapproved/{{$dataV->id}}/verifikasi" class="btn btn-warning" style="width: 150px;">UNAPPROVED</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                </div> 
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <a href="/downloadfile/{{$dataV->id}}/cek" class="btn btn-info" style="width: 150px;">DOWNLOAD PDF</a>
                                                                    {{-- <a href="/preview/cek" class="btn btn-success">DOWNLOAD</a> --}}
                                                                    
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>      
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{  $dataVerifikasi->links() }}
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