<?php
session_start();
if (isset($_SESSION['userrol'])) {
  header('location:Hindex.php');
}

 ?>
<!DOCTYPE html>
<!--
Template Name: Cooban
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Cooban | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <!-- ################################################################################################ -->
  <div class="row1">
    <?php require 'header.php'; ?>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <?php require_once 'dbHandler.php'; ?>
      <?php $db = new DbHandler('localhost','gebruikersrollen','root','');
      $admin = $db->Readdata(['selectQuery' => 'SELECT * FROM admin']);
      
      ?>

      <form class="" action="" method="post">
        <label>Gebruiker:</label><br>
        <input type="text" name="name" value=""><br>
        <label>wachtwoord</label><br>
        <input type="text" name="ww" value=""><br>
        <input type="submit" name="" value="Inloggen">
      </form>
      <?php
        if (isset($_REQUEST['name']) && isset($_REQUEST['ww'])) {
          if ($_REQUEST['name'] == $admin[0]['user'] && $_REQUEST['ww'] == $admin[0]['pass']) {
            $_SESSION["userrol"] = $admin[0]['G_id'];
            header("location: Hindex.php");
          }elseif ($_REQUEST['name'] == $admin[1]['user'] && $_REQUEST['ww'] == $admin[1]['pass']) {
            $_SESSION["userrol"] = $admin[1]['G_id'];
            header("location: Hindex.php");
          }elseif ($_REQUEST['name'] == $admin[2]['user'] && $_REQUEST['ww'] == $admin[2]['pass']) {
            $_SESSION["userrol"] = $admin[2]['G_id'];
            header("location: Hindex.php");
          }elseif ($_REQUEST['name'] == $admin[3]['user'] && $_REQUEST['ww'] == $admin[3]['pass']) {
            $_SESSION["userrol"] = $admin[3]['G_id'];
            header("location: Hindex.php");
          }
          else {
            header("location: #");
          }


        }
       ?>

      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Phasellus aenean</h6>
      <address class="btmspace-15">
      Company Name<br>
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Imperdiet aliquam</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Neque porta elit</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Dignissim tellus vitae posuere laoreet dui nulla pulvinar dolor at ultricies lectus orci aliquam ipsum vestibulum at.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Iaculis mauris</h6>
      <ul class="nospace linklist">
        <li><a href="#">Consectetur commodo orci</a></li>
        <li><a href="#">Vitae tempus maecenas</a></li>
        <li><a href="#">Feugiat eget nisi vel</a></li>
        <li><a href="#">Scelerisque fusce suscipit</a></li>
        <li><a href="#">At sodales facilisis vivamus</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Quis auctor nulla</h6>
      <p>Risus vivamus consectetur neque augue eu tincidunt urna varius nec phasellus.</p>
      <p>Dapibus rutrum interdum nullam commodo lacus sed neque porttitor.</p>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
