<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>How to Export HTML to Pdf in Laravel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
{{-- <style>
  body {
    margin: 0;
    padding: 0;
    font-size: 14px;
    background-image: linear-gradient(315deg, #9fa4c4 0%, #9e768f 74%);
    font-family: sans-serif;
    background-size: cover;
  }
 
  h1 {
    font-size: 22px;
  }
 
  .container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 600px;
    padding: 30px;
    background: #fff;
    box-sizing: border-box;
    border-radius: 10px;
    box-shadow: 0 15px;
    50px rgba(0, 0, 0, .2)
  }
 
  .image {
    width: 200px;
    height: 200px;
    background: url(authr.jpg);
    background-size: cover;
    float: left;
    margin: 30px 30px 30px 0;
  }
</style> --}}
<body>
  <div class="page">
    <div class="subpage">
      <h3 class="text-decoration-underline text-center fw-bold" >DOKUMEN IJIN KERJA</h3>
      <h4 class="text-center fw-bold pb-5">WORKING PERMIT DOCUMENT</h4>
      <h5 class="text-decoration-underline text-center fw-bold pb-1">EKSTERNAL</h5>
      <div class="p-5"></div>
        </div><img src="{{ asset('iconplus.png') }}" width="80px"  class="rounded mx-auto d-block"/> </div>
        <div class="p-5"></div>
        <div class="card border-dark">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold">FOC, FOT, SARPEN</h5>
                <table align="center">
            <tr>
                <td width="150">Pekerjaan</td>
                <td width="500"> :</td>
            </tr>
            <tr>
                <td width="150" >Lokasi kerja</td>
                <td width="500"> :</td>
            </tr>
            <tr>
                <td width="150">Tanggal Pekerjaan</td>
                <td width="500"> :</td>
            </tr>
            <tr>
                <td width="150">Mitra Pelaksana</td>
                <td width="500"> :</td>
            </tr>
            </tr>
        </table>
            </div>
        </div>
        <div class="p-5"></div><div class="p-5"></div>
        <h5 class="text-center fw-bold">PT. INDONESIA COMNETS PLUS</h5>
        <h6 class="text-center fw-bold">STRATEGIC BUSINESS UNITS BALI NUSA TENGGARA</h6>
        
                
    </div>    
</div> 
  

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
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
  </script>
</body>
</html>