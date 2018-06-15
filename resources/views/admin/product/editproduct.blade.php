<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
<div class="container">
<h2 align="center"> Edit Produk </h2>

    <form action="/product/{{$get->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" value="{{$get->nama_kue}}">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{$get->harga}}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg active">FINISH</button>
        </div>
    </form>
</body>
</html>