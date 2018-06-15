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
<h2 align="center"> Testimoni Baru </h2>

  <form action="/message" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label>Nama Member</label>
      <select name="member" id="member">
        @foreach($member as $row)
          <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Testimoni</label>
      <textarea type="text" class="form-control" name="testimoni" id="testimoni" placeholder="Testimoni"></textarea>
    </div>
    <div>
      <button type="submit" class="btn btn-primary btn-lg active">Save</button>
    </div>
  </form>
</body>
</html>