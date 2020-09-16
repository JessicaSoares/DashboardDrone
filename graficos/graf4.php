<?php

include 'conexao/conexao.php';

$sql = "SELECT  CPU_VM01, CPU_VM02 , Memoria_VM01 , idDados FROM dadosbd2_drone ORDER BY idDados limit 10";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$RTT_vm01 = '';
$RTT_vm02 = '';
$Memoria_VM01 = '';
$idDados = '';

while ($dados = mysqli_fetch_array($buscar)) {
				
	$RTT_vm01 = $RTT_vm01 . '"' . $dados['CPU_VM01'] . '",';
	$RTT_vm02 = $RTT_vm02 . '"' . $dados['CPU_VM02'] . '",';
	$Memoria_VM01 = $Memoria_VM01 . '"' . $dados['Memoria_VM01'] . '",';
	$idDados = $idDados . '"' . $dados['idDados'] . '",';
    
    
    

	 $RTT_vm01 = trim($RTT_vm01); #tira os espaços da variável
	 $RTT_vm02 = trim($RTT_vm02);
	 $Memoria_VM01 = trim($Memoria_VM01);
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
<canvas id="Linha3"></canvas>
</div>

<script type="text/javascript">
	var ctx = document.getElementById('Linha3').getContext('2d');
	var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
    		labels:[<?php echo $idDados; ?>],
    		datasets:
    		[{
    			label:'VM1',
    			data:[<?php echo $RTT_vm01; ?>],
    			backgroundColor: 'transparent',
    			borderColor: 'rgba(255,99,132)',
    			borderWidth: 3
    		},
    		{
    			label:'VM2',
    			data:[<?php echo $RTT_vm02; ?>],
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