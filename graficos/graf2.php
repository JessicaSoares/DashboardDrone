<?php

include 'conexao/conexao.php';

$sql = "SELECT  Memoria_VM01, Memoria_VM02 , idDados FROM dadosbd2_drone ORDER BY idDados DESC limit 10";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$RTT_vm01 = '';
$Memoria_VM02 = '';
$Memoria_VM01 = '';
$idDados = '';

while ($dados = mysqli_fetch_array($buscar)) {
				
	$Memoria_VM01 = $Memoria_VM01 . '"' . $dados['Memoria_VM01'] . '",';
	$Memoria_VM02 = $Memoria_VM02 . '"' . $dados['Memoria_VM02'] . '",';

	$idDados = $idDados . '"' . $dados['idDados'] . '",';
    
    
    

	 $Memoria_VM01 = trim($Memoria_VM01); #tira os espaços da variável
	 $Memoria_VM02 = trim($Memoria_VM02);
	
	 
	 $idDados = trim($idDados);

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gráfico Linha</title>
    <link href="css/default.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/Chart.min.js"></script>

 
</head>
<body>

<div class="container" style="background-color: #F3F3F3">
<canvas id="Linha2"></canvas>
</div>

<script type="text/javascript">
	var ctx = document.getElementById('Linha2').getContext('2d');
	var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
    		labels:[<?php echo $idDados; ?>],
    		datasets:
    		[{
    			label:'VM1',
    			data:[<?php echo $Memoria_VM01; ?>],
    			backgroundColor: 'transparent',
    			borderColor: 'rgba(255,99,132)',
    			borderWidth: 3
    		},
    		{
    			label:'VM2',
    			data:[<?php echo $Memoria_VM02; ?>],
    			backgroundColor: 'transparent',
    			borderColor: 'rgba(0,255,255)',
    			borderWidth: 3

    		},
			
			
			
			]

    },
    options: { 
    	scales: {scales:{yAxes: [{beginAtZero: false}], xAxes : [{autoskip: true, maxTicketsLimit: 20 }]}},
    	tooltips: {mode: 'index'},
    	legend:{display: true,position: 'top', labels:{fontColor: 'rgb(0,0,0)',fontSize: 16}}
    }

});
</script>
<!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
</body>
</html>