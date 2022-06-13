@extends('layouts.mainadmin')
@section('container')
<div class="content-wrapper" style="background: white;">
    <div class="content-header ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">FORM KOMENTAR</h1>
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
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <h5 class="text-muted">Data mitra yang akan ditolak :</h5>
                        </div>  
                        <hr style="border:2px solid gray" width="100%">
                        <div class="container">
                            <table width="40%" class="text-muted">
                                <tr>
                                    <td width="200px"><i>No.SP2K/PA</i></td>
                                    <td widht="60px"><i>:</i></td>
                                    <td><i> {{$dataKomentar->sistemPengajuan->noSP2KPA}}</i></td>
                                </tr>
                                <tr>
                                    <td width="200px"><i>Judul Pekerjaan</i></td>
                                    <td widht="60px"><i>:</i></td>
                                    <td><i> {{$dataKomentar->sistemPengajuan->pekerjaan}}</i></td>
                                </tr>
                                
                                <tr>
                                    <td width="200px"><i>Nama Pengaju</i></td>
                                    <td widht="60px"><i>:</i></td>
                                    <td><i> {{$dataKomentar->namaPengaju}}</i></td>
                                </tr>
                                <tr>
                                    <td width="200px"><i>Nama Perusahaan Mitra</i></td>
                                    <td widht="60px"><i>:</i></td>
                                    <td><i> {{$dataKomentar->sistemPengajuan->namaPerusahaan}}</i></td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="/rejected/{{$dataKomentar->id}}/komentar" method="POST" >
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label class="font-weight-bold">KONTEN</label>
                                        <textarea class="form-control @error('coment') is-invalid @enderror" name="coment" rows="5" placeholder="Masukkan Konten Blog">{{ old('coment') }}</textarea>
                                    
                                        <!-- error message untuk content -->
                                        @error('coment')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>        
                                    <button type="submit" class="btn btn-md btn-success">KOMENTAR</button>
                                    <a href="/tampiladminVerifikasi" class="btn btn-primary">KEMBALI</a>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection