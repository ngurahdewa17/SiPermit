@extends('layouts.mainindex')
@section('container')
<div class="content-wrapper" style="background: white">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Data Pelaksana</h1>
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
                                <form action="/store_pelaksana" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif 
                                    @if(Session::has('success'))
                                        <div class="alert alert-success text-center">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            <p>{{ Session::get('success') }}</p>
                                        </div>
                                    @endif
                                    <table class="table table-bordered" id="dynamicAddRemove">
                                        <tr>
                                            <th>Nama Pelaksana</th>
                                            <th>No Tlp/HP</th>
                                           
                                        </tr>
                                        <tr>
                                            <input type="hidden" name="moreFields[0][idDataPengajuan]" value="{{$id}}" />
                                            <td><input type="text" name="moreFields[0][namaPelaksana]" placeholder="Masukan nama pelaksana" class="form-control" /></td>
                                            <td><input type="text" name="moreFields[0][noTlp]" placeholder="Masukan no Tlp/HP" class="form-control" /></td>
                                           
                                            <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button></td>  
                                        </tr>
                                    </table>
                                    
                                
                                    <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                                 
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    var i = 0;
    $("#add-btn").click(function()
    {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields['+i+'][namaPelaksana]" placeholder="Masukan nama pelaksana" class="form-control" /></td><tr><td><input type="text" name="moreFields['+i+'][noTlp]" placeholder="Masukan no tlp/HP pelaksana" class="form-control" /></td><input type="hidden" name="moreFields['+i+'][idDataPengajuan]" value="{{$id}}" /><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function()
    {  
        $(this).parents('tr').remove();
    });  
  </script>
@endsection