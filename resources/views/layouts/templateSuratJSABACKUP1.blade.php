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
            width: 210mm;
            min-height: 346mm;
            padding-top: 15mm;
            margin: 10mm auto;
            /* border: 1px #AAB7B8 solid; */
            border-radius: 5px;
            background: white;
            /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); */
        }
        .subpage {
            border: 1px  #AAB7B8 solid;
            height: 303mm;
            outline: 2cm #ffffff solid;
            border-left-width: 0px;
            border-right-width:0px;
            border-bottom-width: 0px;
            border-top-width:0px;

        }
        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 346mm;        
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
            }
        }
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
      
        }
        .subcard{
            margin-left:0px;
            margin-right:0px;
            padding-top:0px;
            padding-left:15px;
            padding-right:15px;
            /* border: 1px solid black; */
        }
        .footer{
            text-align: center;
            margin:50px;
        }

        .kontent{
            padding: 10px;
        }
    </style>
    <body>
        <div class="book">
            <div class="page ">
                {{-- <div class="subpage"> --}}
                    <div class=" center"  >
                        <h3 class="">DOKUMEN IJIN KERJA</h3>
                        <h2 class="">WORKING PERMIT DOCUMENT</h2><br/>
                        <h4 class="">EKSTERNAL</h4>
                    </div>
                    <div style="height: 150mm; "></div>
                    <div class="bordert" style="background: yellow;">
                        <div class="card ">
                            <h3 class="center">FOC, FOT, SARPEN</h3>
                            <table class="" width="100%">
                                <tr class="">
                                    <td width="150"><b>Pekerjaan</b></td>
                                    <td width="500"><b> : Penarikan FOC Backbone Seririt Gerogak</b></td>
                                </tr>
                                <tr class="">
                                    <td width="150" ><b>Lokasi kerja</b></td>
                                    <td width="500"><b> : Singaraja</b></td>
                                </tr>
                                <tr class="">
                                    <td width="150"><b>Tanggal Pekerjaan</b></td>
                                    <td width="500"><b> : 27-05-2022</b></td>
                                </tr>
                                <tr class="">
                                    <td width="150"><b>Mitra Pelaksana</b></td>
                                    <td width="500"><b> : GMT</b></td>
                                </tr>
                            </table>
                            <br>
                        </div>
                    </div>
                    <div class="footer">
                        <h2 class="">PT. INDONESIA COMNETS PLUS</h2>
                        <br/>
                        <h4 class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</h4>
                    </div>                  
                {{-- </div>  --}}
            </div>
            <div class="page">
                <div class="bordert  center">
                    <table class=" " width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <div>
                                        {{-- <img src="{{ asset('iconplus.png') }}" width="50px"  class="img img-responsive"/> --}}
                                    </div>
                                    <div>
                                        <p1 style="" class="">PT.INDONESIA COMNETS PLUS</p1>
                                        <p1 class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</p1>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p1 class="fw-bold ">FORMULIR IJIN KERJA EKSTERNAL</p1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="subcard">
                    <table class="" width="100%" rules="rows" >
                        <tr class="">
                            <th rowspan="3" width="50%" ><h4>FORMULIR IJIN KERJA EKSTERNAL</h4></th>
                            <th colspan="2" align="left">No.SP2K/PA :</th>
                            <th colspan="2">IK25KKEW</th>
                        </tr> 
                        <tr class="">
                            <th colspan="2" align="left">Berlaku : </th>
                            <th colspan="3">12 Agustus 2022</th> 
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
                    <br>
                    <h5><i>No.SP2K/PA : IK25KKEW</i></h5>
                </div>
                <br>
                <br>
                <br>
                
                <div class="kontent ">
                    <table class=" " width="100%" >
                        <tr class="">
                            <th width="180" align="left">Nama Perusahaan</th>
                            <th width="10"> : </th>
                            <th align="left"> GMT</th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left">Email Pemohon</th>
                            <th width="10"> : </th>
                            <th align="left"> ewik@gmail.com </th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left">Nama Pemohon</th>
                            <th width="10"> : </th>
                            <th align="left">Ewik</th>   
                        </tr>
                        <tr class="">
                            <th width="180" align="left">No.Pemohon</th>
                            <th width="10"> : </th>
                            <th align="left">0812346789567</th>   
                        </tr>                            
                    </table> 
                </div>
                <div class="kontent">
                    <h5 style="margin-bottom:5px;"><i>*Project List :</i></h5>
                    <table class=" " width="100%" rules="rows" >
                        <tr class="">
                            <th width="180" align="left"><h5>Pekerjaan</h5></th>
                            <th width="10"><h5> :</h5> </th>
                            <th align="left"> <h5>Penarikan Kabel Backbone</h5></th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5>no.SP2K/PA</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5> IK25KKEW </h5></th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left"><h5>Hari/Tanggal Mulai</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5>6/1/2022</h5></th>   
                            <th align="left" width="100"><h5>Jam Mulai</h5></th>
                            <th width="10"><h5> : </h5></th>   
                            <th><h5> 08:00 </h5></th>   
                        </tr>
                        <tr class="">
                            <th width="180" align="left"><h5>Hari/Tanggal Selesai</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5>6/3/2022</h5></th> 
                            <th align="left" width="100"><h5>Jam Selesai</h5></th> 
                            <th width="10"><h5> : </h5></th>    
                            <th><h5> 17:00 </h5></th> 
                        </tr>                            
                    </table> 
                </div>
                <div class="kontent ">
                    <h5 style="margin-bottom:5px;"><i>Activity List(*) :</i></h5>
                    <table class=" bordert1" width="100%" rules="all">
                        <tr class="">
                            <th width="180" align="left"><h5>Lokasi Kerja</h5></th>
                            <th width="10"><h5> :</h5> </th>
                            <th align="left"> <h5>Denpasar</h5></th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5>Aktifitas</h5></th>
                            <th width="10"><h5> : </h5></th>
                            <th align="left"><h5> FOC </h5></th> 
                            <th align="left"><h5 style="color: rgb(105, 102, 102);"><i> *(List Aktifitas, pilihan diantaranya:^FOC, ^FOT, ^Sarpen)* </i></h5></th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left"><h5>Lokasi</h5></th>
                            <th ><h5> : </h5></th>
                            <th align="left"><h5>Outdoor</h5></th>
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
                            <th align="left"> <h5>Perapihan, Relokasi</h5></th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5></h5></th>
                            <th width="10"><h5></h5> </th>
                            <th align="left"> <h5 style="color: rgb(105, 102, 102)"><i> *(Task List, pilihan diantaranya : ^Penarikan ^Perapihan ^Tracing, ^Survey, ^Pulling,</i></h5></th>       
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5></h5></th>
                            <th width="10"><h5></h5> </th>
                            <th align="left"> <h5 style="color: rgb(105, 102, 102)"><i> :^Deaktivasi, ^Instalasi, ^QC, ^PM, FOC, ^Jointing,</i></h5></th> 
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5></h5></th>
                            <th width="10"><h5></h5> </th>
                            <th align="left"> <h5 style="color: rgb(105, 102, 102)"><i> :^Relokasi, ^PM FO, ^Repair, ^Splicing, ^Tesccomm,</i></h5></th>     
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5></h5></th>
                            <th width="10"><h5></h5> </th>
                            <th align="left"> <h5 style="color: rgb(105, 102, 102)"><i> :^PM Sarpen, ^Pemasangan, ^Pengembalian, ^Penggalian, </i></h5></th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left"><h5></h5></th>
                            <th width="10"><h5></h5> </th>
                            <th align="left"> <h5 style="color: rgb(105, 102, 102)"><i> :^Lainya : ..............)* </i></h5></th>
                        </tr> 
                    </table> 
                </div>
                <br>
                <br>
                <div class="kontent ">
                    <table class=" bordert1" width="100%" rules="all" >
                        <thead class=" center">
                            <th width="40">No</th>
                            <th width="180"> Uraian </th>
                            <th width="190"> Nama </th>
                            <th > Jabatan di Perusahaan </th>
                            <th > No HP/Telepone </th> 
                        </thead>
                        <tbody>
                            <tr class=" center">
                                <td rowspan="3">1</td>
                                <td rowspan="3">PENANGGUNG JAWAB PEKERJAAN JOB DIRECTION</td>
                                <td rowspan="3">Hiltanto Sidik Sudrajat</td>
                                <td rowspan="3">Manager Pembangunan & Aktivasi</td>
                                <td rowspan="3">08123764789</td>
                            </tr> 
                        <tbody>
                            <tr class=" center">
                                <td rowspan="3">2</td>
                                <td rowspan="3">PENGAWAS PEKERJAAN JOB SUPERVISOR</td>
                                <td rowspan="3">Ewik</td>
                                <td rowspan="3">Team Koordinator</td>
                                <td rowspan="3">08133794763</td>
                            </tr>           
                        </tbody>
                        <tbody>   
                            <tr class="center">
                                <td rowspan="3">3</td>
                                <td rowspan="3">PENGAWAS K3 SAFETY SUPERVISOR</td>
                                <td rowspan="3">Karya</td>
                                <td rowspan="3">Team Leader</td>
                                <td rowspan="3">0812349876</td>
                            </tr>                    
                        </tbody>
                    </table> 
                </div>

                <div class="kontent " ">
                    <h5 style="margin-bottom:5px; ">PELAKSANA PEKERJAAN :</h5>
                    <table class="border1 " width="100%" style="margin-left:70px" rules="all"  >
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
                    </table> 
                </div>
                
                {{-- Page 2/4 --}}
            </div>
    
            <div class="page">
                <div class="bordert  center">
                    <table class=" " width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <div>
                                        PICTURE
                                    </div>
                                    <div>
                                        <p1 style="" class="">PT.INDONESIA COMNETS PLUS</p1>
                                        <p1 class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</p1>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p1 class="fw-bold ">FORMULIR IJIN KERJA EKSTERNAL</p1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="subcard">
                    <table class="" width="100%" rules="rows" >
                        <tr class="">
                            <th rowspan="3" width="50%" ><h4>FORMULIR IJIN KERJA EKSTERNAL</h4></th>
                            <th colspan="2" align="left">No.SP2K/PA :</th>
                            <th colspan="2">IK25KKEW</th>
                        </tr> 
                        <tr class="">
                            <th colspan="2" align="left">Berlaku : </th>
                            <th colspan="3">12 Agustus 2022</th> 
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
                        <thead class=" center">
                            <th width="40">No</th>
                            <th width="180"> Alat Kerja Dan APD </th>
                            <th width="190"> Ketersediaan </th>
                            <th > Keterangan </th>
                        </thead>
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
                    <table class=" bordert1 center" width="100%" rules="all" >
                        <thead class=" center">
                            <th width="40">No</th>
                            <th width="349"> Check List Of Activity </th>
                            <th width="30"> Ya </th>
                            <th > Tidak </th>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>1</td>
                                <td width="600" rowspan="3">Apakah Pengawas Pekerjaan telah memastikan bahwa semua Pelaksana
                                    Pekerjaan telah menggunakan APD (Alat Pelindung Diri) ?</td>
                                <td></td>
                                <td></td>
                            </tr> 
                        <tbody>
                            <tr class="">
                                <td>2</td>
                                <td rowspan="3" width="349">Apakah Semua Pelaksana Pekerjaan telah memahami potensi bahaya yang akan
                                    terjadi ?
                                </td>
                                <td width="30"></td>
                                <td></td>
                            </tr>         
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>2</td>
                                <td rowspan="3" width="349">Apakah semua Pelaksana Pekerjaan berdasarkan prosedur/SOP/IK ?
                                </td>
                                <td width="30"></td>
                                <td></td>
                            </tr>                 
                        </tbody>
                    </table> 
                </div>
                <br>
                <br>
                <div class="cardPernyataan">
                    <h4>Dengan ini menyatakan dengan sebenar-benarnya bahwa seluruh data diatas benar dan </h4>
                    <h4>dapat dipertanggung
                        jawabkan</h4>
                </div>
                <br>
                <br>
                <br>
                <div class="kontent ">
                    <table class="  center" width="100%" >
                        <thead class=" center">
                            <th rowspan="4" width="50%">Mengajukan,</th>
                            <th rowspan="4" width="50%">Menyetujui,</th>
                        </thead>
                        <tr class="">
                            <td rowspan="3">ttd</td>
                            <td rowspan="3">ttd</td>
                        </tr>
                        <tbody>
                            <tr class="">
                                <td rowspan="3"><b>Pengawas Pekerjaan</b></td>
                                <td rowspan="3"><b>SPV/Manager ICON+</b></td>
                            </tr>         
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>No. Hp : 081234765467</td>
                                <td>No. Hp : 081356789657</td>
                            </tr>                 
                        </tbody>
                    </table> 
                    <br>
                    <br>
                    <table class="  center" width="100%" >
                        <thead class=" center">
                            <th rowspan="4">Mengajukan,</th>
                        </thead>
                        <tr>
                            <td>ttd</td>
                        </tr>
                        <tbody>
                            <tr>
                                <td><b>Pengawas Pekerjaan</b></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>No. Hp : 0813456789</td>
                            </tr>
                        </tbody>
                           
                      
                    </table> 
                </div>
                {{-- Page 3/4   --}}
                      
            </div>
            
            <div class="page">
                <div class="bordert  center">
                    <table class=" " width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <div>
                                        PICTURE
                                    </div>
                                    <div>
                                        <p1 style="" class="">PT.INDONESIA COMNETS PLUS</p1>
                                        <p1 class="">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</p1>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p1 class="fw-bold ">FORMULIR IJIN KERJA EKSTERNAL</p1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="subcard">
                    <table class="" width="100%" rules="rows" >
                        <tr class="">
                            <th rowspan="3" width="50%" ><h4>FORMULIR IJIN KERJA EKSTERNAL</h4></th>
                            <th colspan="2" align="left">No.SP2K/PA :</th>
                            <th colspan="2">IK25KKEW</th>
                        </tr> 
                        <tr class="">
                            <th colspan="2" align="left">Berlaku : </th>
                            <th colspan="3">12 Agustus 2022</th> 
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
                    <br>
                    <h4>JOB SAFETY ANALYSIS</h4>
                    <br>
                </div>
                <br>
                <br>
                <br>
                <div class="kontent ">
                    <table class=" bordert1" width="100%" rules="all" >
                        <tr class="">
                            <th width="180" align="left">Nama Pekerjaan</th>
                            <th width="10"> : </th>
                            <th align="left"> Penarikan Kabel Backbone</th>
                        </tr> 
                        <tr class="">
                            <th width="180" align="left">Tanggal Pekerjaan</th>
                            <th width="10"> : </th>
                            <th align="left"> 1/6/2022 </th> 
                        </tr>
                        <tr class="">
                            <th width="180" align="left">Lokasi Pekerjaan</th>
                            <th width="10"> : </th>
                            <th align="left">Denpasar</th>   
                        </tr>      
                    </table> 
                </div>
                <br>
                <div class="kontent ">
                    <table class=" bordert1 center" width="100%" rules="all" >
                        <thead class="center">
                            <th width="40" rowspan="8">No</th>
                            <th width="200" rowspan="4">  Kondisi Tidak Aman </th>
                            <th width="200" rowspan="4"> Tindakan Tidak Aman </th>
                            <th rowspan="4" > Pengendalian Risiko </th>
                        </thead>
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
                <br>
                <br>
                <br>
                <br>
                <div class="kontent ">
                    <table class="  center" width="100%" >
                        <thead class=" center">
                            <th rowspan="4" width="50%">Mengajukan,</th>
                            <th rowspan="4" width="50%">Menyetujui,</th>
                        </thead>
                        <tr class="">
                            <td rowspan="3">ttd</td>
                            <td rowspan="3">ttd</td>
                        </tr>
                        <tbody>
                            <tr class="">
                                <td rowspan="3"><b>Pengawas Pekerjaan</b></td>
                                <td rowspan="3"><b>SPV/Manager ICON+</b></td>
                            </tr>         
                        </tbody>
                        <tbody>   
                            <tr class="">
                                <td>No. Hp : 081234765467</td>
                                <td>No. Hp : 081356789657</td>
                            </tr>                 
                        </tbody>
                    </table> 
                    <br>
                    <br>
                    <table class=" center" width="100%" >
                        <thead class=" center">
                            <th rowspan="4">Mengajukan,</th>
                        </thead>
                        <tr>
                            <td>ttd</td>
                        </tr>
                        <tbody>
                            <tr>
                                <td><b>Pengawas Pekerjaan</b></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>No. Hp : 0813456789</td>
                            </tr>
                        </tbody>
                           
                      
                    </table> 
                </div>
                {{-- Page 4/4 --}}
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

