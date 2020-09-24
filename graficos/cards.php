<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
</head>
<body>
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-md-2">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Bateria do Drone</div>
  <div class="card-body">
  <span class="d-inline-block text-truncate" style="max-width: 150px;">


    <?php 
include "conexao/conexao.php";
$sql = "SELECT Bateria_Drone FROM dadosbd2_drone ORDER BY idDados DESC limit 6";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['Bateria_Drone'];

}
$calc = (array_sum($array))/5 ;
 echo($calc); echo "%";


?>
</span>
  </div>
  </div>
</div>
<div class = "col-md-2">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Fog Node</div>
  <div class="card-body">




  </div>
</div>
</div>
<div class = "col-md-3">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Cloudlet</div>
  <div class="card-body">

    <?php 

$sql = "SELECT CPU_VM01 FROM dadosbd2_drone ORDER BY idDados DESC limit 6";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['CPU_VM01'];

}
$calc = array_sum($array)/5 ;
echo 'CPU VM01: '; echo($calc); echo '%<br/>' ;


$sql = "SELECT CPU_VM02 FROM dadosbd2_drone ORDER BY idDados DESC limit 6 ";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['CPU_VM02'];

}
$calc = array_sum($array)/5 ;
echo " CPU VM02:"; echo($calc); echo '%<br/>';




$sql = "SELECT Memoria_VM01 FROM dadosbd2_drone ORDER BY idDados DESC limit 6";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['Memoria_VM01'];

}
$calc = array_sum($array)/5 ;
echo " Memoria VM01"; echo($calc); echo '%<br/>';


$sql = "SELECT Memoria_VM02 FROM dadosbd2_drone ORDER BY idDados DESC limit 6";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['Memoria_VM02'];

}
$calc = array_sum($array)/5 ;
echo " Memoria VM02: "; echo($calc); echo '%<br/>';


?>
</div>


</div>
    
</div>

<div class = "col-md-2">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Microfog</div>
  <div class="card-body">


  </div>
</div>

</div>

<div class = "col-md-3">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Network</div>
  <div class="card-body">

    <?php 


$sql = "SELECT RTT_Orquestrador_VM01 FROM dadosbd2_drone ORDER BY idDados DESC limit 6";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['RTT_Orquestrador_VM01'];

}
$calc = array_sum($array)/5 ;
echo " RTT Orq. VM01: "; echo($calc); echo '<br/>';

$sql = "SELECT RTT_Orquestrador_VM02 FROM dadosbd2_drone ORDER BY idDados DESC limit 6 ";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['RTT_Orquestrador_VM02'];

}
$calc = array_sum($array)/5 ;
echo " RTT Orq. VM02: "; echo($calc); echo '<br/>';

$sql = "SELECT RSSI_Drone_Orquestrador FROM dadosbd2_drone ORDER BY idDados DESC limit 6 ";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['RSSI_Drone_Orquestrador'];

}
$calc = array_sum($array)/5 ;
echo " RSSI Drone Orq.: "; echo($calc); echo '<br/>';



$sql = "SELECT Vazao_Drone FROM dadosbd2_drone ORDER BY idDados DESC limit 6";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
$c[] = array();

while($dados = $buscar->fetch_array()) { 
 $array[] = $dados['Vazao_Drone'];

}
$calc = array_sum($array)/5 ;
echo " Vazao Drone: "; echo($calc); echo "";

?>
  </div>
</div>
</div>

</body>
</html>