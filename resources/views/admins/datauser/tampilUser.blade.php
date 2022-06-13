@extends('layouts.mainadmin')
@section('container')
    <div class="content-wrapper" style="background: white;">
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data User</h1>
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
                <div class="container mb-4 " >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">  
                                <div class="x_title">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <a href="/tambah_user" class="btn btn-success" class="text-decoration-none">TAMBAH USER</a >
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
                                                <td>Nama User</td>
                                                <td>Email User</td>
                                                <td>Level</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dataUsers as $dataU)
                                            <tr>
                                                <td>{{$no++}}</td>  
                                                <td>{{$dataU->name}}</td>
                                                <td>{{$dataU->email}}</td>
                                                @if($dataU->is_admin == 0)
                                                    <td>User</td>
                                                @else
                                                    <td>Admin</td>
                                                @endif
                                                {{-- <td>{{$dataU->is_admin}}</td> --}}
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <a href="user/{{$dataU->id}}/updateUser" class="btn btn-warning" style="width:80px;">  EDIT</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <form method="POST" action="/deleteUser/{{$dataU->id}}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input class="btn btn-danger" type="submit" value="HAPUS" style="width:80px;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>      
                                                </td>                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{  $dataUsers->links() }}
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