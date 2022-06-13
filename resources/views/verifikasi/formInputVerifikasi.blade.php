@extends('layouts.mainindex')
@section('container')
<div class="content-wrapper"  style="background:white">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Verifikasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="#" class="d-block text-decoration-none">Form User</a></li>
                    <li class="breadcrumb-item active">MITRA</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="/store_verifikasi" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold">ID Pengajuan</label>
                                        <select id="sistem_pengajuan_id" name="sistem_pengajuan_id" class="form-select" aria-label="Default select example" wire:model="account.0">
                                            @foreach($idPengajuan as $idP)
                                            <option value={{$idP->id}}>{{$idP->id}}, no.SP2K/PA({{$idP->noSP2KPA}})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  

                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Pengaju</label>
                                        <input type="text" class="form-control @error('namaPengaju') is-invalid @enderror" name="namaPengaju"  placeholder="Masukkan nama anda" required value="{{old('namaPengaju')}}">
                                    
                                        <!-- error message untuk title -->
                                        @error('namaPengaju')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Pemverifikasi</label>
                                        <select id="namaVerifikasi" name="namaVerifikasi" class="form-control">
                                            <option value='Kamal Syarif'>Kamal Syarif</option>
                                            <option value='Hiltanto Sidik Sudrajat'>Hiltanto Sidik Sudrajat</option>
                                            <option value='Rio Wawit Widyanto'>Rio Wawit Widyanto</option>
                                            <option value='Joko'>Joko</option>
                                            <option value='Dede'>Dede</option>
                                            <option value='Wahid'>Wahid</option>
                                            <option value='Gus Teguh'>Gus Teguh</option>
                                            <option value='Ida Bagus Rathu Eka Surya Wibawa'>Ida Bagus Rathu Eka Surya Wibawa</option>
                                            <option value='Nofal Agusta'>Nofal Agusta</option>
                                            <option value='Afit Ristianto'>Afit Ristianto</option>
                                            <option value='Achmad Faizal'>Achmad Faizal</option>
                                            <option value='Yoga'>Yoga</option>
                                            <option value='Mahardika'>Mahardika</option>
                                            <option value='Iwan'>Iwan</option>
                                            <option value='Utari'>Utari</option>
                                            <option value='Gusti Ngurah Widia'>Gusti Ngurah Widia</option>
                                        </select>

                                        <!-- error message untuk title -->
                                        @error('namaVerifikasi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Upload Hasil Scan Form Izin Pekerjaan</label>
                                        <input type="file" class="form-control @error('imageVerifikasi') is-invalid @enderror" name="imageVerifikasi">
                                    
                                        <!-- error message untuk title -->
                                        @error('imageVerifikasi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="/tampil_verifikasi" class="btn btn-primary">KEMBALI</a>
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