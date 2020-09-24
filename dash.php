<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="setTime"></div>
  <body>

<div class="container-fluid" >
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">

              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>

        </ul>
        <div id="setTime">
        <?php 

$agora = date('d/m/Y H:i');
echo $agora;
?> </div>

      </div>
      
    </nav>

    

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
       </div>

        </div>
      </div>

      <?php

  include 'graficos/cards.php';
?>
  
  <div class = "container-fluid" style="margin-top: 40px">
  <div class = "row">
  <div class = "col-md-6">
  <div class="alert alert-primary" role="alert">
  <p style="text-align:center"> <b>Tempo de processamento</b></p>

  <?php  include 'graficos/graf1.php'; ?>
</div>
</div>
<div class="col-md-6">
<div class="alert alert-primary" role="alert">
  <p style="text-align:center"> <b>Memória</b></p>

<?php  include 'graficos/graf2.php'; ?>

</div>
  </div>

</div>

<div class = "container-fluid" style="margin-top: 40px">
<div class = "row">
  <div class = "col-md-6">
  <div class="alert alert-primary" role="alert">
  <p style="text-align:center"> <b>CPU</b></p>

  <?php  include 'graficos/graf3.php'; ?>
</div>
<div class="col-md-6">

</div>
</div>


</div>



    </main>
  </div>
</div>


</body></html>