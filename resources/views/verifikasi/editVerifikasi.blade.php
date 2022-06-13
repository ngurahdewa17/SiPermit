@extends('layouts.mainindex')
@section('container')
<div class="content-wrapper"  style="background:white">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Verifikasi</h1>
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
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="/edit/{{$editVerifikasi->id}}/updateVerifikasi" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label class="font-weight-bold">ID Pengajuan</label>
                                        <select id="sistem_pengajuan_id" name="sistem_pengajuan_id" class="form-control">
                                            @foreach($idPengajuan as $idP)
                                            <option value={{$idP->id}} @if($idP->id == $idP->id) selected @endif>{{$idP->id}}, no.SP2K/PA({{$idP->noSP2KPA}})</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Pengaju</label>
                                        <input type="text" class="form-control @error('namaPengaju') is-invalid @enderror" name="namaPengaju"  placeholder="Masukkan nama anda" required value="{{$editVerifikasi->namaPengaju}}">
                                    
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
                                            <option value='Kamal Syarif'  @if($editVerifikasi->namaVerifikasi == 'Kamal Syarif') selected @endif>Kamal Syarif</option>
                                            <option value='Hiltanto Sidik Sudrajat'  @if($editVerifikasi->namaVerifikasi == 'Hiltanto Sidik Sudrajat') selected @endif>Hiltanto Sidik Sudrajat</option>
                                            <option value='Rio Wawit Widyanto'  @if($editVerifikasi->namaVerifikasi == 'Rio Wawit Widyanto') selected @endif>Rio Wawit Widyanto</option>
                                            <option value='Joko'  @if($editVerifikasi->namaVerifikasi == 'Joko' ) selected @endif>Joko</option>
                                            <option value='Dede'  @if($editVerifikasi->namaVerifikasi == 'Dede') selected @endif>Dede</option>
                                            <option value='Wahid'  @if($editVerifikasi->namaVerifikasi == 'Wahid') selected @endif>Wahid</option>
                                            <option value='Gus Teguh'  @if($editVerifikasi->namaVerifikasi == 'Gus Teguh') selected @endif>Gus Teguh</option>
                                            <option value='Ida Bagus Rathu Eka Surya Wibawa'  @if($editVerifikasi->namaVerifikasi == 'Ida Bagus Rathu Eka Surya Wibawa') selected @endif>Ida Bagus Rathu Eka Surya Wibawa</option>
                                            <option value='Nofal Agusta'  @if($editVerifikasi->namaVerifikasi == 'Nofal Agusta') selected @endif>Nofal Agusta</option>
                                            <option value='Afit Ristianto'  @if($editVerifikasi->namaVerifikasi == 'Afit Ristianto') selected @endif>Afit Ristianto</option>
                                            <option value='Achmad Faizal'  @if($editVerifikasi->namaVerifikasi == 'Achmad Faizal') selected @endif>Achmad Faizal</option>
                                            <option value='Yoga'  @if($editVerifikasi->namaVerifikasi == 'Yoga') selected @endif>Yoga</option>
                                            <option value='Mahardika'  @if($editVerifikasi->namaVerifikasi == 'Mahardika') selected @endif>Mahardika</option>
                                            <option value='Iwan'  @if($editVerifikasi->namaVerifikasi == 'Iwan') selected @endif>Iwan</option>
                                            <option value='Utari'  @if($editVerifikasi->namaVerifikasi == 'Utari') selected @endif>Utari</option>
                                            <option value='Gusti Ngurah Widia'  @if($editVerifikasi->namaVerifikasi == 'Gusti Ngurah Widia') selected @endif>Gusti Ngurah Widia</option>
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

                                    <button type="submit" class="btn btn-md btn-success">UPDATE</button>
                                    <a href="/tampil_verifikasi" class="btn btn-warning">KEMBALI</a>
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