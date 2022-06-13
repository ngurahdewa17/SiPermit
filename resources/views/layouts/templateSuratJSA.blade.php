<!DOCTYPE html>
<head>
<title>Halaman Print A4</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
{{-- <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
<script src="{{asset('bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}
    <style type="text/css">
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            font: 12pt "Tahoma";
        }
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .page {
            /* width: 210mm; */
            width: 185mm;
            /* min-height: 346mm; */
            /* min-height: 338nm; */
            height: 200nm;
            padding-top: 15mm;
            /* margin: 10mm auto; */

            /* border: 1px #AAB7B8 solid; */
            border-radius: 5px;
            background: white;
            /* padding-right: 10px;
            padding-left:10 px; */
            /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); */
        }
        .subpage {
            padding: 1cm;
            border: 1px  #AAB7B8 solid;
            height: 257mm;
            outline: 2cm #ffffff solid;
        }
        .pageCover{

        }
       
        
        /* @page {
            size: A4;
            margin: 0;
        }
        @media print {
            html, body {
                width: 180mm;
                height: 300mm;        
            }
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
                padding:20 px;
            }

            
        } */
        .bordert{
            border: 2px solid black;
        }
        .bordert1{
            border: 1px solid rgb(0, 0, 0);
        }
        .background{
            background-color: red;
        }
        .background1{
            background-color: rgb(0, 13, 255);
        }
        .center{
            text-align: center;
        }
        h3{
            margin:8px;
        }
        h2{
            margin:0px;
        }
        h1{
            margin:0px;
        }
        h4{
            margin:0px;
        }
        h5{
            margin:0px;
        }
        .card{
            margin:60px;
            padding-top:20px;
            padding-left:20px;
            padding-right:20px;
            border: 1px solid black;
        }
        .cardPernyataan{
            padding-top:0px;
            padding-left:40px;
            padding-right:40px;
      
        }
       
        .footer{
            text-align: center;
            margin:50px;
        }

        .kontent{
            padding: 10px;
        }

        .pelaksanaPekerjaan{
            padding: 5px;
            border: 1px solid black;
        }
       

        /* .badan .kiri{
            
            float: left;
            height: 100%;
            width: 100%;
        }

        .badan .kanan{  
            float: left;
            height: 100%;
            width: 50%;
        } */
    </style>
    <body>
        {{-- @foreach ($data as $w)
            {{ $w->id}}    
        @endforeach
        <h1>cetak : {{'$data'}}</h1> --}}
   
        <div class="book">
             {{--COVER--}}
            <div class="pageCover ">
                <div class="center">
                    <h3 class="">DOKUMEN IJIN KERJA</h3>
                    <h2 class="">WORKING PERMIT DOCUMENT</h2><br/>
                    <h4 class="">EKSTERNAL</h4>
                </div>
                <br>
                <br>
                <br>
                <div style="height: 80mm; " class="center">
                    <img src="{{ public_path('iconpluskompresfix.jpg') }}" style="width:300px; height:280px"  />
                </div>
               <br>
               <br>
                <div class="bordert" style="background: white;">
                    <div class="card ">
                        <h3 class="center">FOC, FOT, SARPEN</h3>
                        <table class="" width="100%">                 
                            <tr class="">
                                <td ><b>Pekerjaan</b></td>
                                <td ><b> : {{ $data->pekerjaan }}</b></td>
                            </tr>
                            <tr class="">
                                <td width="150" ><b>Lokasi kerja</b></td>
                                <td width="200"><b> : {{ $data->namaLokasi }}</b></td>
                            </tr>
                            <tr class="">
                                <td width="150"><b>Tanggal Pekerjaan</b></td>
                                <td width="100"><b> : {{ $data->haritanggalMulai }}</b></td>
                            </tr>
                            <tr class="">
                                <td width="150"><b>Mitra Pelaksana</b></td>
                                <td width="100"><b> : {{ $data->namaMitra }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="footer">
                    <h2 class="">PT. INDONESIA COMNETS PLUS</h2>
                    <br/>
                    <h4 class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</h4>
                </div>     
            </div>
            {{-- <div class="page ">
                <div class="center">
                    <h3 class="">DOKUMEN IJIN KERJA</h3>
                    <h2 class="">WORKING PERMIT DOCUMENT</h2><br/>
                    <h4 class="">EKSTERNAL</h4>
                </div>
                <div style="height: 50mm; "></div>
                <div class="bordert" style="background: blue;">
                    <div class="card ">
                        <h3 class="center">FOC, FOT, SARPEN</h3>
                        <table class="" width="100%">                 
                            <tr class="">
                                <td width="150"><b>Pekerjaan</b></td>
                                <td width="500"><b> : {{ $data->pekerjaan }}</b></td>
                            </tr>
         3                   <tr class="">
                                <td width="150" ><b>Lokasi kerja</b></td>
                                <td width="500"><b> : {{ $data->namaLokasi }}</b></td>
                            </tr>
                            <tr class="">
                                <td width="150"><b>Tanggal Pekerjaan</b></td>
                                <td width="500"><b> : {{ $data->haritanggalMulai }}</b></td>
                            </tr>
                            <tr class="">
                                <td width="150"><b>Mitra Pelaksana</b></td>
                                <td width="500"><b> : {{ $data->namaMitra }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="footer">
                    <h2 class="">PT. INDONESIA COMNETS PLUS</h2>
                    <br/>
                    <h4 class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</h4>
                </div>                  
            </div> 
            --}}
           
             {{--HALAMAN 1--}}
            <div class="page">
                <div class="bordert  center">
                    <table class=" " width="100%">
                        <thead>
                           
                            <tr>
                                <th>
                                    <img src="{{ public_path('iconpluskompresfix.jpg') }}" style="width:50px; height:50px"  />
                                </th>
                                <th>
                                    <div>
                                        <p1 style="" class="">PT.INDONESIA COMNETS PLUS</p1>
                                        <p1 style="text-align: center;" class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</p1>
                                    </div>
                                </th>
                                <th>
                                    <img src="{{ public_path('pln.png') }}" style="width:50px; height:50px"  />
                                </th>
                            </tr>
                        </thead>                                
                    </table>
                </div>
                <br>
                <div class="subcard">
                    <table class="" width="100%" rules="rows" >
                        <tr class="">
                            <th rowspan="3" width="50%" ><h4>FORMULIR IJIN KERJA EKSTERNAL</h4></th>
                            <th colspan="2" align="left">No.SP2K/PA :</th>
                            <th colspan="3">{{ $data->noSP2KPA }}</th>
                        </tr> 
                        <tr class="">
                            <th colspan="2" align="left">Berlaku : </th>
                            <th colspan="3">{{ $data->haritanggalSelesai }}</th> 
                        </tr>
                        <tr class="">
                            <th colspan="2" align="left">Halaman :</th>
                            <th colspan="3">1 dari 3</th>   
                        </tr>              
                    </table>
                </div>
              
                <hr style="border: 3px solid rgb(117, 117, 116); width:98%;"/>
                <br>
                <div class="center">
                    <h4>PERMOHONAN IJIN KERJA</h4>
                    <h5><i>No.SP2K/PA : {{ $data->noSP2KPA }}</i></h5>
                </div>
                <div class="kontent ">
                    <table class=" " width="100%" >
                        <tr class="">
                            <th width="180" align="left">Nama Perusahaan</th>
                            <th width="10"> : </th>
                            <th align="left"> {{ $data->namaPerusahaan }}</th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left">Email Pemohon</th>
                            <th width="10"> : </th>
                            <th align="left"> {{ $data->email }}</th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left">Nama Pemohon</th>
                            <th width="10"> : </th>
                            <th align="left">{{ $data->namaMitra }}</th>   
                        </tr>
                        <tr class="">
                            <th width="180" align="left">No.Pemohon</th>
                            <th width="10"> : </th>
                            <th align="left">{{ $data->noHPPegawaiPekerjaan }}</th>   
                        </tr>                            
                    </table> 
                </div>
                <div class="kontent">
                    <h5 style="margin-bottom:5px;"><i>*Project List :</i></h5>
                    <table class=" " width="100%" rules="rows" >
                        <tr class="">
                            <th width="180" align="left"><h5>Pekerjaan</h5></th>
                            <th width="10"><h5> :</h5> </th>
                            <th align="left"> <h5>{{ $data->pekerjaan }}</h5></th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5>no.SP2K/PA</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5> {{ $data->noSP2KPA }} </h5></th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left"><h5>Hari/Tanggal Mulai</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5>{{ $data->haritanggalMulai }}</h5></th>   
                            <th align="left" width="100"><h5>Jam Mulai</h5></th>
                            <th width="10"><h5> : </h5></th>   
                            <th><h5> 08:00 </h5></th>   
                        </tr>
                        <tr class="">
                            <th width="180" align="left"><h5>Hari/Tanggal Selesai</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5>{{ $data->haritanggalSelesai }}</h5></th> 
                            <th align="left" width="100"><h5>Jam Selesai</h5></th> 
                            <th width="10"><h5> : </h5></th>    
                            <th><h5> 17:00 </h5></th> 
                        </tr>                            
                    </table> 
                </div>
                <div class="kontent ">
                    <h5 style="margin-bottom:5px;"><i>Activity Li
                        st(*) :</i></h5>
                    <table class=" bordert1" width="100%" rules="all">
                        <tr class="">
                            <th width="180" align="left"><h5>Lokasi Kerja</h5></th>
                            <th width="10"><h5> :</h5> </th>
                            <th align="left"> <h5>{{ $data->namaLokasi }}</h5></th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5>Aktifitas</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5> {{ $data->aktifitas }} </h5></th> 
                            <th align="left"><h5 style="color: rgb(105, 102, 102);"><i> *(List Aktifitas, pilihan diantaranya:^FOC, ^FOT, ^Sarpen)* </i></h5></th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left"><h5>Lokasi</h5></th>
                            <th ><h5> : </h5></th>
                            <th align="left"><h5>{{ $data->lokasi }}</h5></th>
                            <th align="left"><h5 style="color: rgb(105, 102, 102)"><i> *(List Aktifitas, pilihan diantaranya:^POP, ^Outdoor, ^Customer)* </i></h5></th>    
                        </tr>
                    </table> 
                </div>
                <div class="kontent ">
                    <h5 style="margin-bottom:5px;"><i>Task List(*) :</i></h5>
                    <table class=" bordert1" width="100%" >
                        <tr class="">
                            <th width="180" align="left"><h5>Detail Pekerjaan</h5></th>
                            <th width="10"><h5> :</h5> </th>
                            <th align="left"> <h5>{{ $data->taskList }}</h5></th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5></h5></th>
                            <th width="10"><h5></h5> </th>
                            <th align="left"> <h5 style="color: rgb(105, 102, 102)"><i> *(Task List, pilihan diantaranya : ^Penarikan ^Perapihan ^Tracing, ^Survey, ^Pulling, ^Deaktivasi, ^Instalasi, ^QC, ^PM, FOC, ^Jointing, ^Relokasi, ^PM FO, ^Repair, ^Splicing, ^Tesccomm, ^PM Sarpen, ^Pemasangan, ^Pengembalian, ^Penggalian, ^Lainya : ..............)*</i></h5></th>       
                        </tr> 
                    </table> 
                </div>
                
                <div class="kontent">
                    <table class=" bordert1" width="100%" rules="all" >
                        <tr class="center">
                            <th width="10%">No</th>
                            <th width="40%"> Uraian </th>
                            <th width="70%"> Nama </th>
                            <th width="15%">Jabatan di Perusahaan</th>
                            <th width="15%">No HP/Telepone</th> 
                        </tr>
                        <tr class="center">
                            <th>1</th>
                            <th>PENANGGUNG JAWAB PEKERJAAN JOB DIRECTION</th>
                            <th>Hiltanto Sidik Sudrajat</th>
                            <th>Manager Pembangunan & Aktivasi</th>
                            <th>08123764789</th>
                        </tr> 
                        <tr class="center">
                            <th>2</th>
                            <th>PENGAWAS PEKERJAAN JOB SUPERVISOR</th>
                            <th>{{ $data->pengawasPekerjaan }}</th>
                            <th>Team Koordinator</th>
                            <th>08133794763</th>
                        </tr>
                        <tr class="center">
                            <th>3</th>
                            <th>PENGAWAS K3 SAFETY SUPERVISOR</th>    
                            <th>{{ $data->pengawasK3 }}</th>                            
                            <th>Team Leader</th>
                            <th>{{ $data->noHPPegawaiK3 }}</th>
                        </tr>        
                    </table> 
                </div>

                

                {{-- Page 2/4 --}}
            
    
            <div class="page">
                <div class="bordert  center">
                    <table class=" " width="100%">
                        <thead>      
                            <tr>
                                <th>
                                    <img src="{{ public_path('iconpluskompresfix.jpg') }}" style="width:50px; height:50px"  />
                                </th>
                                <th>
                                    <div>
                                        <p1 style="" class="">PT.INDONESIA COMNETS PLUS</p1>
                                        <p1 style="text-align: center;" class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</p1>
                                    </div>
                                </th>
                                <th>
                                    <img src="{{ public_path('pln.png') }}" style="width:50px; height:50px"  />
                                </th>
                            </tr>
                        </thead>     
                    </table>
                </div>
                <br>
                <div class="subcard">
                    <table class="" width="100%" rules="rows" >
                        <tr class="">
                            <th rowspan="3" width="50%" ><h4>FORMULIR IJIN KERJA EKSTERNAL</h4></th>
                            <th colspan="2" align="left">No.SP2K/PA :</th>
                            <th colspan="3">{{ $data->noSP2KPA }}</th>
                        </tr> 
                        <tr class="">
                            <th colspan="2" align="left">Berlaku : </th>
                            <th colspan="3">{{ $data->haritanggalSelesai }}</th> 
                        </tr>
                        <tr class="">
                            <th colspan="2" align="left">Halaman :</th>
                            <th colspan="3">2 dari 3</th>   
                        </tr>              
                    </table>
                </div>
              
                <hr style="border: 3px solid rgb(117, 117, 116); width:98%;"/>
                <div class=" center">
                    <br>
                    <br>
                    <h4>DAFTAR PERALATAN</h4>
                    <h4>KERJA DAN APD</h4>
                    <br>
                </div>
                <div class="kontent ">
                    <table class=" bordert1 center" width="100%" rules="all" >
                        <tr class=" center">
                            <th width="40">No</th>
                            <th width="180"> Alat Kerja Dan APD </th>
                            <th width="190"> Ketersediaan </th>
                            <th > Keterangan </th>
                        </tr>
                        <tbody>
                            <tr class="">
                                <td>1</td>
                                <td>Rompi</td>
                                <td>5</td>
                                <td></td>
                            </tr> 
                        <tbody>
                            <tr class=" ">
                                <td>2</td>
                                <td>Safety helmet</td>
                                <td>5</td>
                                <td></td>
                            </tr>          
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>3</td>
                                <td>Safety Shoes</td>
                                <td>5</td>
                                <td></td>
                            </tr>                    
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>3</td>
                                <td>Safety Back</td>
                                <td>5</td>
                                <td></td>
                            </tr>                    
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>4</td>
                                <td>Tangga</td>
                                <td>2</td>
                                <td></td>
                            </tr>                    
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>5</td>
                                <td>Safety Back</td>
                                <td>2</td>
                                <td></td>
                            </tr>                    
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>6</td>
                                <td>Masker</td>
                                <td>5</td>
                                <td></td>
                            </tr>                    
                        </tbody>
                    </table> 
                </div>
                <br>
                <div class="kontent ">
                    <table class="bordert1 center" width="100%" rules="all" >
                        <tr class=" center">
                            <th>No</th>
                            <th width="250">Check List Of Activity</th>
                            <th width="30">Ya</th>
                            <th>Tidak</th>
                            {{-- <th rowspan="3" width="40">No</th>
                            <th width="349"> Check List Of Activity </th>
                            <th width="30"> Ya </th>
                            <th > Tidak </th> --}}
                        </tr>
                        <tbody>
                            <tr class="">
                                <td>1</td>
                                <td width="250">Apakah Pengawas Pekerjaan telah memastikan bahwa semua Pelaksana
                                    Pekerjaan telah menggunakan APD (Alat Pelindung Diri) ?</td>
                                <td width="30"></td>
                                <td></td>
                            </tr> 
                        <tbody>
                            <tr class="">
                                <td>2</td>
                                <td width="250">Apakah Semua Pelaksana Pekerjaan telah memahami potensi bahaya yang akan
                                    terjadi ?
                                </td>
                                <td width="30"></td>
                                <td></td>
                            </tr>         
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>3</td>
                                <td width="250">Apakah semua Pelaksana Pekerjaan berdasarkan prosedur/SOP/IK ?
                                </td>
                                <td width="30"></td>
                                <td></td>
                            </tr>                 
                        </tbody>
                    </table> 
                </div>
        
                <br>
                <div class="kontent">
                    <h5 style="margin-bottom:5px; ">PELAKSANA PEKERJAAN :</h5>
                    <div class="badan">
                        <div class="kiri">
                            <div class="kontent" >
                                <table class="pelaksanaPekerjaan" width="50%" rules="all" >
                                    <tr class="">
                                        <th width="20" align="left"><h5>1</h5></th>
                                        <th width="10"><h5> :</h5> </th>
                                        <th align="left"> <h5>Adi</h5></th>
                                    </tr> 
                                    <tr class="">
                                        <th width="20" align="left"><h5>2</h5></th>
                                        <th width="10"><h5> : </h5></th>
                                        <th align="left"><h5> Dede </h5></th> 
                                    </tr>
                                    <tr class="">
                                        <th width="20" align="left"><h5>3</h5></th>
                                        <th width="10"><h5> : </h5></th>
                                        <th align="left"><h5>Dodo</h5></th>      
                                    </tr>
                                    <tr class="">
                                        <th width="20" align="left"><h5>4</h5></th>
                                        <th width="10"><h5> : </h5></th>
                                        <th align="left"><h5> Gogo </h5></th> 
                                    </tr>
                                    <tr class="">
                                        <th width="20" align="left"><h5>5</h5></th>
                                        <th width="10"><h5> : </h5></th>
                                        <th align="left"><h5>Wowo</h5></th>  
                                    </tr>
                    
                                </table> 
                            </div>
                        </div>
                        {{-- <div class="kanan">
                            <div class="kontent" >
                                <table class="pelaksanaPekerjaan" width="100%" rules="all" >
                                    <tr class="">
                                        <th width="20" align="left"><h5>4</h5></th>
                                        <th width="10"><h5> :</h5> </th>
                                        <th align="left"> <h5>Judi</h5></th>
                                    </tr> 
                                    <tr class="">
                                        <th width="20" align="left"><h5>5</h5></th>
                                        <th width="10"><h5> : </h5></th>
                                        <th align="left"><h5> Wedi </h5></th> 
                                    </tr>
                                    <tr class="">
                                        <th width="20" align="left"><h5>6</h5></th>
                                        <th width="10"><h5> : </h5></th>
                                        <th align="left"><h5>Didi</h5></th>      
                                    </tr>
                                </table> 
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="kontent ">
                    <table class="center" width="100%" >
                        <thead class="center">
                            <th width="50%">Mengajukan,</th>
                            <th width="50%">Menyetujui,</th>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td >ttd</td>
                                <td >ttd</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="">
                                <td><b>{{$data->pengawasPekerjaan}}</b></td>
                                <td><b>Hiltanto Sidik Sudrajat</b></td>
                            </tr>         
                        </tbody>
                        <tbody>
                            <tr class="">
                                <td><b>Pengawas Pekerjaan</b></td>
                                <td><b>SPV/Manager ICON+</b></td>
                            </tr>         
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>No. Hp : 081234765467</td>
                                <td>No. Hp : 081356789657</td>
                            </tr>                 
                        </tbody>
                    </table> 
    
                    <table class="  center" width="100%" >
                        <thead class=" center">
                            <th>Mengajukan,</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ttd</td>
                            </tr>    
                        </tbody>
                        
                        <tbody>
                            <tr>
                                <td><b>{{ $data->pengawasK3 }}</b></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td><b>Pengawas Pekerjaan K3</b></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>No. Hp : {{ $data->noHPPegawaiK3 }}</td>
                            </tr>
                        </tbody>
                    </table> 
                </div> --}}
                {{-- Page 3/4   --}}
                      
            </div>
            
            <div class="page">
                <div class="bordert  center">
                    <table class=" " width="100%">
                        <thead>  
                            <tr>
                                <th>
                                    <img src="{{ public_path('iconpluskompresfix.jpg') }}" style="width:50px; height:50px"  />
                                </th>
                                <th>
                                    <div>
                                        <p1 style="" class="">PT.INDONESIA COMNETS PLUS</p1>
                                        <p1 style="text-align: center;" class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</p1>
                                    </div>
                                </th>
                                <th>
                                    <img src="{{ public_path('pln.png') }}" style="width:50px; height:50px"  />
                                </th>
                            </tr>
                        </thead>     
                    </table>
                </div>
                <br>
                <div class="subcard">
                    <table class="" width="100%" rules="rows" >
                        <tr class="">
                            <th rowspan="3" width="50%" ><h4>FORMULIR IJIN KERJA EKSTERNAL</h4></th>
                            <th colspan="2" align="left">No.SP2K/PA :</th>
                            <th colspan="3">{{ $data->noSP2KPA }}</th>
                        </tr> 
                        <tr class="">
                            <th colspan="2" align="left">Berlaku : </th>
                            <th colspan="3">{{ $data->haritanggalSelesai }}</th> 
                        </tr>
                        <tr class="">
                            <th colspan="2" align="left">Halaman :</th>
                            <th colspan="3">3 dari 3</th>   
                        </tr>              
                    </table>
                </div>
              
                <hr style="border: 3px solid rgb(117, 117, 116); width:98%;"/>
                <div class=" center">
                    <br>
                    <h4>JOB SAFETY ANALYSIS</h4>
                    <br>
                </div>
                <div class="kontent ">
                    <table class=" bordert1" width="100%" rules="all" >
                        <tr class="">
                            <th width="180" align="left">Nama Pekerjaan</th>
                            <th width="10"> : </th>
                            <th align="left"> {{ $data->pekerjaan }}</th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left">Tanggal Pekerjaan</th>
                            <th width="10"> : </th>
                            <th align="left"> {{ $data->haritanggalMulai }} </th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left">Lokasi Pekerjaan</th>
                            <th width="10"> : </th>
                            <th align="left">{{ $data->namaLokasi }}</th>   
                        </tr>      
                    </table> 
                </div>
                <br>
                <div class="kontent ">
                    <table class=" bordert1 center" width="100%" rules="all" >
                        <tr class="center">
                            <th width="40">No</th>
                            <th width="170">  Kondisi Tidak Aman </th>
                            <th width="170"> Tindakan Tidak Aman </th>
                            <th > Pengendalian Risiko </th>
                        </tr>
                        <tbody>
                            <tr class="">
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> 
                        <tbody>
                            <tr class=" ">
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>          
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>                    
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>                    
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>                    
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>6</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>                    
                        </tbody>
                    </table> 
                </div>
                <br>
                <br>
                <div class="cardPernyataan">
                    <h4>Dengan ini menyatakan dengan sebenar-benarnya bahwa seluruh data diatas benar dan dapat dipertanggung jawabkan </h4>                
                </div>
                <br>
                
                <div class="kontent ">
                    <table class="center" width="100%" >
                        <thead class="center">
                            <th width="50%">Mengajukan,</th>
                            <th width="50%">Menyetujui,</th>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td >ttd</td>
                                <td >ttd</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="">
                                <td><b>{{$data->pengawasPekerjaan}}</b></td>
                                <td><b>{{$data->namaVerifikasi}}</b></td>
                            </tr>         
                        </tbody>
                        <tbody>
                            <tr class="">
                                <td><b>Pengawas Pekerjaan</b></td>
                                <td><b>PTL/SPV/Manager ICON+</b></td>
                            </tr>         
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>No. Hp : 081234765467</td>
                                <td>No. Hp : 081356789657</td>
                            </tr>                 
                        </tbody>
                    </table> 
    
                    <table class="  center" width="100%" >
                        <thead class=" center">
                            <th>Mengajukan,</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ttd</td>
                            </tr>    
                        </tbody>
                        
                        <tbody>
                            <tr>
                                <td><b>{{ $data->pengawasK3 }}</b></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td><b>Pengawas Pekerjaan K3</b></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>No. Hp : {{ $data->noHPPegawaiK3 }}</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>

                {{-- Page 4/4 --}}
            </div>

            <div class="page">
                <img src="{{ public_path('storage/images/'.$data->image) }}" style="width:100%; height:90%" />
            </div>
           
        </div> 
    {{-- <script>
        const export2Pdf = async () => {
       
          let printHideClass = document.querySelectorAll('.print-hide');
          printHideClass.forEach(item => item.style.display = 'none');
          await fetch('http://localhost:8000/export-pdf', {
            method: 'GET'
          }).then(response => {
            if (response.ok) {
              response.json().then(response => {
                var link = document.createElement('a');
                link.href = response;
                link.click();
                printHideClass.forEach(item => item.style.display='');
              });
            }
          }).catch(error => console.log(error));
        }
      </script> --}}

   
    </body>
</html>
{{-- <script src="{{ asset('popper.min.js') }}" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="{{ asset('bootstrap.min.js') }}" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> --}}

