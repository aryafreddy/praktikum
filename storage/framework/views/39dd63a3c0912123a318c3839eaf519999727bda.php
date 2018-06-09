<!DOCTYPE html>
<html>
<head>
<title>Delicious Cake</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo e(url('css/layout.css')); ?>" rel="stylesheet">
</head>
<body id="top">
<div class="bgded" style="background-image:url('img/img15.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-phone"></i> +081238058303</li>
          <li><i class="fa fa-envelope"></i> info@deliciouscake.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a class="faicon-pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Delicious Cake</a></h1>
      </div>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#"><i class="far fa-caret-square-down"></i>Produk</a>
          <ul>
            <li><a href="#">Cupcakes</a></li>
            <li><a href="#">Pudding</a></li>
          </ul>
        </li>
        <li><a href="#">About Us</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card1-->
      <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Masukkan Data Kue</div>
      <div class="card-body">
        <form action="<?php echo e(url('/kue')); ?>" method="POST">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Nama Kue</label>
                <input class="form-control" name="nama_kue" type="text">
              </div>
              <div class="col-md-12">
                <label for="exampleInputLastName">Harga Kue</label>
                <input class="form-control" name="harga" type="text">
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/kue">View Kue</a>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <footer id="footer" class="hoc topspace-0 clear"> 
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_quarter first">
        <h6 class="title">Tentang Kami</h6>
        <address class="btmspace-15">
        Delicious Cake<br>
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span> +081238058303</li>
          <li><span class="fa fa-envelope"></span> info@deliciouscake.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Kontak Kami</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Karir Kami</a></h2>
          <time class="font-xs" datetime="2018-04-13">Friday, 13<sup>th</sup> April 2018</time>
          <p></p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="title">TERM & CONDITION</h6>
        <ul class="nospace linklist">
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Sosial Media</h6>
        <p></p>
        <p></p>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
  </section>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Delicious Cake</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS -->
<script src="<?php echo e(url('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('js/jquery.backtotop.js')); ?>"></script>
<script src="<?php echo e(url('js/jquery.mobilemenu.js')); ?>"></script>
<!-- IE9 Placeholder Support -->
<script src="<?php echo e(url('js/jquery.placeholder.min.js')); ?>"></script>
<!-- / IE9 Placeholder Support -->
<script src="<?php echo e(url('js/fontawesome-all.js')); ?>"></script>
</body>
</html>