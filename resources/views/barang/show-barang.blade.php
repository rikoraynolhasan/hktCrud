<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Barang</title>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@400;500;700&family=Karla:wght@200;300;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,700;1,200;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
</head>

<body>


  <div class="container-fluid cont">
    <div class="row ini">
      <div class="col-2 side-bar">
        <div class="img">
          <img src="{{ asset('img/1.jpg')}}" height="120" width="120" alt="">
        </div>
        <div style="border-bottom: 1px solid white;">
          <h1 class="admin-text">Admin</h1>
        </div>
        <div class="t">
          <a href="" class="badge tabel">Barang</a>
        </div>
        <div class="t">
          <a href="" class="badge tabel">Pelanggan</a>
        </div>
      </div>
      <div class="col-10 side-bar-2">
        <div class="headers">
          <div class="row">
            <div class="col-md-6">
              <h1>View Barang</h1>
            </div>
          </div>
        </div>
        @foreach($barangShow as $item)
        <div style="margin-top: 20px;">
          <P>Nama Barang : {{ $item->nama_barang }}</P>
          
        <P>Jenis : {{ $item->jenis }}</P>
        <P>Jumlah Barang : {{ $item->jumlah_barang }}</P>
        <P>Diskon : {{ $item->diskon }}</P>
        <p>Tanggal Masuk : {{ $item->tanggal_masuk }}</p>
        </div>

        @endforeach
    <!-- myjs -->
    <script src="{{ asset('javascript/myjavascript.js') }}" charset="utf-8"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>