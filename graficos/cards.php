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

    <?php 
include 'conexao/conexao.php';
$sql = "SELECT Bateria_Drone FROM dadosbd2_drone ORDER BY idDados";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
echo $dados['Bateria_Drone'] ;echo "%";


?>
  </div>
  </div>
</div>
<div class = "col-md-2">
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Fog Node</div>
  <div class="card-body">

    <?php 
$sql = "SELECT Bateria_Drone FROM dadosbd2_drone ORDER BY idDados";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
echo $dados['Bateria_Drone'] ;echo "%";

?>
  </div>
</div>
</div>
<div class = "col-md-3">
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Cloudlet</div>
  <div class="card-body">

    <?php 

$sql = "SELECT Bateria_Drone FROM dadosbd2_drone ORDER BY idDados";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
echo $dados['Bateria_Drone'] ;echo "%";
?>
</div>


</div>
    
</div>

<div class = "col-md-2">
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Microfog</div>
  <div class="card-body">

    <?php 

$sql = "SELECT Bateria_Drone FROM dadosbd2_drone ORDER BY idDados";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
echo $dados['Bateria_Drone'] ;echo "%";

?>
  </div>
</div>

</div>

<div class = "col-md-2">
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Network</div>
  <div class="card-body">

    <?php 

$sql = "SELECT Bateria_Drone FROM dadosbd2_drone ORDER BY idDados";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);
echo $dados['Bateria_Drone'] ;echo "%";

?>
  </div>
</div>
</div>

</body>
</html>