<? class formulas{

function seleccionar_formulas($id){
	if(!$id){
		$sql = "SELECT DISTINCT tipoFormula FROM Formula";
		$result = executeSQL($sql);
		return $result;
	}else{
		$sql = "SELECT CodigoInsumo,Cantidad FROM Formula WHERE tipoFormula = '$id' AND nuevo = 'si'";
		$result = executeSQL($sql);
		return $result;
	}
}

function feormula_segun_producto($id){
		$sql = "SELECT DISTINCT tipoFormula FROM Formula WHERE CodigoProducto = $id";
		$result = executeSQL($sql);
		return $result;
}

function insertForm($arrayForm,$codProducto){
	//var_dump($arrayForm);
	$nombre_producto_a_registrar = productos::seleccionar_nombre_por_id($codProducto[0][0]);
	if($arrayForm[4] == "no"){
		for ($i=0;$i<=count($arrayForm[0])-1;$i++){
		//$insumoId = insumos::selectId($arrayForm[0][$i]);
		$sql = "INSERT INTO Formula (CodigoInsumo,CodigoProducto,Cantidad,tipoFormula,nuevo)
															 VALUES (".$arrayForm[0][$i].",".$codProducto[0][0].",".$arrayForm[1][$i].",'".$arrayForm[2]."','".$arrayForm[3]."')";
//echo " --- ".$sql;
		$resultado = executeSQL($sql);
		}
	}else{
	for ($i=0;$i<=count($arrayForm[0])-1;$i++){
		//$insumoId = insumos::selectId($arrayForm[0][$i]);
		$sql = "INSERT INTO Formula (CodigoInsumo,CodigoProducto,Cantidad,tipoFormula,nuevo)
															 VALUES (".$arrayForm[0][$i].",".$codProducto[0][0].",".$arrayForm[1][$i].",'".$nombre_producto_a_registrar[0][0]." --- ".$arrayForm[2]."','".$arrayForm[3]."')";
//echo " --- ".$sql;
		$resultado = executeSQL($sql);
	}
}
}

}
?>
