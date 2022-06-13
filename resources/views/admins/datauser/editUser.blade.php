@extends('layouts.mainadmin')
@section('container')
<div class="content-wrapper" style="background: white;">
    <div class="content-header ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
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

    <section class="content">
        <div class="container-fluid">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="/user/{{$editUser->id}}/updateUser" method="POST" >
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama User</label>
                                        <input type="text" class="form-control @error('namaUser') is-invalid @enderror" name="namaUser"  placeholder="Masukkan nama anda" required value="{{$editUser->name}}">
                                    
                                        <!-- error message untuk title -->
                                        @error('namaUser')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Email User</label>
                                        <input type="text" class="form-control @error('emailUser') is-invalid @enderror" name="emailUser"  placeholder="Masukkan email anda" required value="{{$editUser->email}}">
                                    
                                        <!-- error message untuk title -->
                                        @error('emailUser')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Masukkan password anda" required autocomplete="new-password">
                                    
                                        <!-- error message untuk title -->
                                        @error('password')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                        

                                    <div class="form-group ">
                                        <label class="font-weight-bold">Level User</label>
                                        <select id="level" name="level" class="form-control">
                                            <option value=1 @if($editUser->is_admin == 1) selected @endif>ADMIN</option>
                                            <option value=0 @if($editUser->is_admin == 0) selected @endif>USER</option>
                                        </select>
                                    </div>

                                   
                                    <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                                    <a href="/tampil_user" class="btn btn-primary">KEMBALI</a>
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