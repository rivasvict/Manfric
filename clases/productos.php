<?
class productos {

function selectId($nombre){

	$sql = "SELECT CodigoProducto FROM ProductoT WHERE Nombre = '$nombre'";
	$resultado = executeSQL($sql);
	return $resultado;

}

function insertProductos($nombre		,$Enero			,$Febrero	,$Marzo			,
													$Abril		,$Mayo			,$Junio		,$Julio			,
													$Agosto		,$Septiembre,$Octubre	,$Noviembre	,
													$Diciembre){

$dateC = @date("d-m-Y H:i:s");
$date = explode(" ", $dateC);
$aDate = explode("-", $date[0]);
$Ano = $aDate[2];

	$sqlInsert = "INSERT INTO ProductoT (Nombre	,Ano,Enero,Febrero	,
																			Marzo	,Abril,
																			Mayo		,Junio				,
																			Julio		,Agosto		,
																			Septiembre,Octubre	,
																			Noviembre, Diciembre					)
															 VALUES ('$nombre','$Ano','$Enero'	,'$Febrero',
																			'$Marzo'	,'$Abril','$Mayo'	,'$Junio',
																			'$Julio'	,'$Agosto','$Septiembre','$Octubre',
																			'$Noviembre','$Diciembre')";

//echo " --- ".$sqlInsert;

	$resultado = executeSQL($sqlInsert);
	if(!$resultado){
		$resultado = null;
	}
return $resultado;
}

function consultar(){

	$sqlInsert = "SELECT Nombre FROM ProductoT";

	$resultado = executeSQL($sqlInsert);
	if(!$resultado){
		$resultado = null;
	}
return $resultado;
}

function seleccionar_id(){
	$sql = "SELECT CodigoProducto FROM ProductoT";
	$resultado= executeSQL($sql);
	return $resultado;
}

function seleccionar_nombre_por_id($id){
	$sqlInsert = "SELECT Nombre FROM ProductoT WHERE CodigoProducto = $id";
	//echo $sqlInsert;
	$resultado = executeSQL($sqlInsert);
	if(!$resultado){
		$resultado = null;
	}
return $resultado;
}

}
?>
