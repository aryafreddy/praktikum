<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand">Delicious - Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Freddy</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
		</form>
		<ul class="nav menu">
            <li><a href="/dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class="active"><a><em class="fa fa-cart-plus">&nbsp;</em> Product</a></li>
            <li><a href="/message"><em class="fa fa-comments">&nbsp;</em> Message</a></li>
			<li><a href="/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a>
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active">Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Our Product</h1>
			</div>
		</div><!--/.row-->						

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kue Brownies</td>
      <td>Rp. 180.000,00</td>
      <td>
	  	<a href="/editproduct" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
	  	<form action="" method="POST" style="display:inline-block">
          <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
        </form>
	  </td>
    </tr>
	<tr>
      <th scope="row">2</th>
      <td>Kue Tar</td>
      <td>Rp. 100.000,00</td>
      <td>
	  	<a href="/editproduct" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
	  	<form action="" method="POST" style="display:inline-block">
          <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
        </form>
	  </td>
    </tr>
  </tbody>
</table>

<a href="/tambahproduct" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">TAMBAH PRODUK</a>
        
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>