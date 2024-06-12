<?php
	require_once "modelos/conexion.php";
	$conexione=conexiones();
	$sql="SELECT fechaVenta,montoVenta 
			from ventas order by fechaVenta";
	$result=mysqli_query($conexione,$sql);
	$valoresY=array();//montos
	$valoresX=array();//fechas

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
 ?>

<div id="graficaPastel"></div>
<script type="text/javascript">
	function crearCadenaPastel(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX=crearCadenaPastel('<?php echo $datosX ?>');
	datosY=crearCadenaPastel('<?php echo $datosY ?>');

	var data = [
		{
			x: datosX,
			y: datosY,
            labels: ['Residential', 'Non-Residential'],
			type: 'pie'
		}
	];

	Plotly.newPlot('graficaPastel', data, );
</script>


