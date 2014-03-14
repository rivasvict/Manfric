<?

class insumos{

function insertInsumos($nombre	,$exist			,$cost			,$Enero			,
												$Febrero,$Marzo			,$Abril			,$Mayo			,
												$Junio	,$Julio			,$Agosto		,$Septiembre,
												$Octubre,$Noviembre	,$Diciembre							){

$dateC = @date("d-m-Y H:i:s");
$date = explode(" ", $dateC);
$aDate = explode("-", $date[0]);
$Ano = $aDate[2];

	$sqlInsert = "INSERT INTO Insumos (Nombre			,Ano		,ExistenciaKg	,
																			CostoBsKg	,Enero	,Febrero			,
																			Marzo			,Abril	,Mayo					,
																			Junio			,Julio	,Agosto				,
																			Septiembre,Octubre,Noviembre		,
																			Diciembre)
															 VALUES ('$nombre'			,'$Ano',
																				'$exist'			,'$cost',
																				'$Enero'			,'$Febrero',
																				'$Marzo'			,'$Abril',
																				'$Mayo'				,'$Junio',
																				'$Julio'			,'$Agosto',
																				'$Septiembre'	,'$Octubre',
																				'$Noviembre'	,'$Diciembre')";

	$resultado = executeSQL($sqlInsert);
	if(!$resultado){
		$resultado = null;
	}
return $resultado;
}

function seleccionar_cantidades_por_id($id){
		//Consulta a fecha de sistema {	
	$dateC = @date("d-m-Y H:i:s");
	$date = explode(" ", $dateC);
	$aDate = explode("-", $date[0]);
	$Ano = $aDate[2];
	$Messtring = $aDate[1];
	if($Messtring<=9){
		$Mes = $Messtring[1];
	}
	// }
	// Asignación de vector meses con los meses del año
	$meses[0]="null";
	$meses[1]="Enero";
	$meses[2]="Febrero";
	$meses[3]="Marzo";
	$meses[4]="Abril";
	$meses[5]="Mayo";
	$meses[6]="Junio";
	$meses[7]="Julio";
	$meses[8]="Agosto";
	$meses[9]="Septiembre";
	$meses[10]="Octubre";
	$meses[11]="Noviembre";
	$meses[12]="Diciembre";
	/*if($Mes=="01"){
		$Mes = 1;
	}*/
	$existencia_en_el_mes = self::existencia_mes($id,$Mes,$Ano);
	if(($Mes=="1")&&($existencia_en_el_mes==null)){
		//echo "uno";
		$Mes = 12;
		$Ano = $Ano - 1;
		$flag = 1;
	}
	if(($Mes!="1")&&($existencia_en_el_mes==null)&&($flag!=1)){
		//echo "dos";
		$Mes = $Mes - 1;
	}
	$sql = "SELECT ".$meses[$Mes]." FROM Insumos WHERE CodigoInsumo = $id AND Ano = $Ano";
	//echo $sql;
	$resultado = executeSQL($sql);
	return $resultado;
}

/*function existencia_mes_liq($id,$mes,$ano){
	//var_dump($id);	
	if($mes=="01"){
		$mes = 1;
	}
	//var_dump($id);
	if($id!=null){
		//var_dump($id);
		$sql = "SELECT * FROM EntradasEmergentesInventarioInsumo WHERE codigoInsumo = ".$id." AND Ano = ".$ano." AND Mes = ".$mes."";
		//echo $sql;
		//$resultado = executeSQL($sql);
		if(count($resultado)==0){
			return null;
		}else{
			return $resultado;
		}
	}
}*/

function existencia_mes($id,$mes,$ano){
//var_dump($mes);
if($mes[0]==0){
	if($mes<=9){
		$mes = $mes[1];
	}
}
//var_dump($mes);
/*	if($mes=="01"){
		$mes = 1;
	}*/
	//var_dump($id);
	$sql = "SELECT * FROM EntradasEmergentesInventarioInsumo WHERE codigoInsumo = ".$id." AND Ano = ".$ano." AND Mes = ".$mes."";
	//echo $sql;
	$resultado = executeSQL($sql);
	if(count($resultado)==0){
		return null;
	}else{
		return $resultado;
	}
}

function selectInsumos(){

$sqlSelect = "SELECT DISTINCT Nombre FROM Insumos";

	$resultado = executeSQL($sqlSelect);
	if(!$resultado){
		$resultado = null;
	}
return $resultado;
}

function sIduno(){
	$ides = self::selectInsumos();
	//var_dump($ides[0][0]);
	for($i=0;$i<=count($ides)-1;$i++){
		$sql = "SELECT CodigoInsumo FROM Insumos WHERE Nombre = '".$ides[$i][0]."'";
		//var_dump($ides[$i][0]);
		$result = executeSQL($sql);
		//var_dump($result);
		$asd[$i] = $result[0][0];
	}
	return $asd;
}

function sId(){
	$sql = "SELECT CodigoInsumo FROM Insumos";
	$resultado = executeSQL($sql);
	return $resultado;
}

function selectId($nombre){

	$sql = "SELECT CodigoInsumo FROM Insumos WHERE Nombre = '$nombre'";
	$resultado = executeSQL($sql);
	return $resultado;

}

function adiccionarInsumo($nombre,$cantidad){
	//Consulta a fecha de sistema {	
	$dateC = @date("d-m-Y H:i:s");
	$date = explode(" ", $dateC);
	$aDate = explode("-", $date[0]);
	$Ano = $aDate[2];
	$Messtring = $aDate[1];
	if($Messtring<=9){
		$Mes = $Messtring[1];
	}else{
		$Mes = $Messtring;
	}
	// }
	// Asignación de vector meses con los meses del año
	$meses[0]="Enero";
	$meses[1]="Febrero";
	$meses[2]="Marzo";
	$meses[3]="Abril";
	$meses[4]="Mayo";
	$meses[5]="Junio";
	$meses[6]="Julio";
	$meses[7]="Agosto";
	$meses[8]="Septiembre";
	$meses[9]="Octubre";
	$meses[10]="Noviembre";
	$meses[11]="Diciembre";
	//Captura del mes actual y anterior{
	for ($i=0;$i<=count($meses)-1;$i++){
		if($i+1==$Mes){
			$mes = $meses[$i];
			$ant = $meses[$i-1];
			$numes = $i+1;
		}
	}
	//}
	//devuelve el ID del insumo
	$id = self::selectId($nombre);
	$sql1 = "SELECT * FROM EntradasEmergentesInventarioInsumo WHERE codigoInsumo = ".$id[0][0]." AND Ano = ".$Ano." AND Mes = '".$numes."'";
	$result1 = executeSQL($sql1);
	$s=0;
	for($i=2011;$i<=$Ano;$i++){
		$sql_anos_anteriores = "SELECT * FROM EntradasEmergentesInventarioInsumo WHERE codigoInsumo = ".$id[0][0]." AND Ano = ".$i."";
		$result_sql_anos_anteriores = executeSQL($sql_anos_anteriores);
		if(count($result_sql_anos_anteriores)!=0){
			$validador_de_insumos_en_anos_anteriores[$s] = $result_sql_anos_anteriores[0][0];
			$s++;
		}
	}
	//var_dump($result1);
	//var_dump(count($result1)==0);
	if(($mes=="Enero")&&(count($result1)==0)){
		//Consultar todas las cantidades para cada mes en el producto
		$AnoAnterior = $Ano - 1;
		$sql2 = "SELECT * FROM Insumos WHERE Ano = ".$AnoAnterior." AND codigoInsumo = ".$id[0][0]."";
		$result2 = executeSQL($sql2);
		if($result2[0][0]){
			//var_dump($result2);
			for($i=4;$i<=15;$i++){
				//maaa es Mes del año anterior
				$maa[$i-4] = $result2[0][$i];
			}
			$sql3 = "INSERT INTO Insumos (Nombre			,Ano		,ExistenciaKg	,
																				CostoBsKg	,Enero	,Febrero			,
																				Marzo			,Abril	,Mayo					,
																				Junio			,Julio	,Agosto				,
																				Septiembre,Octubre,Noviembre		,
																				Diciembre)
																	VALUES ('$nombre'			,'$Ano',
																					'$cantidad'			,	0,
																					'$cantidad'			,".$maa[1].",
																					".$maa[2]."			,".$maa[3].",
																					".$maa[4]."			,".$maa[5].",
																					".$maa[6]."			,".$maa[7].",
																					".$maa[8]."	,".$maa[9].",
																					".$maa[10].",".$maa[11].")";
			$result3 = executeSQL($sql3);
		}else{
			$sqlUpdateNewProduct = "UPDATE Insumos SET $mes = $cantidad WHERE Ano = ".$aDate[2]." AND Nombre = '$nombre'";
			echo "aqui estoy";
			$resultU = executeSQL($sqlUpdateNewProduct);
		}
		$sql4 = "INSERT INTO EntradasEmergentesInventarioInsumo (codigoInsumo,Cantidad,Fecha,Ano,Mes)
																																																																VALUES	(".$id[0][0].",$cantidad,'$dateC','$Ano','$Mes')";
		$result4 = executeSQL($sql4);
	}elseif((count($result1)==0)&&(count($validador_de_insumos_en_anos_anteriores)!=0)){
		$sql5 = "UPDATE Insumos SET $mes = 0 WHERE Ano = ".$aDate[2]." AND Nombre = '$nombre'";
		$resul5 = executeSQL($sql5);
		$sqlRegistroEntradas = "INSERT INTO EntradasEmergentesInventarioInsumo (codigoInsumo,Cantidad,Fecha,Ano,Mes)
																																																																		VALUES	(".$id[0][0].",$cantidad,'$dateC','$Ano','$Mes')";
		//echo $sqlRegistroEntradas;
		//echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
		$resultado2 = executeSQL($sqlRegistroEntradas);
		//var_dump("aaa");
		$sql6 = "SELECT $ant FROM Insumos WHERE Ano = ".$aDate[2]." AND Nombre = '$nombre'";
		$resul6 = executeSQL($sql6);
		$entradaTotal = $resul6[0][0] + $cantidad;
		//var_dump($resul6);
		//echo $resul6[0][0]." + ".$cantidad." = ".$entradaTotal."";
		$sql = "UPDATE Insumos SET $mes = $entradaTotal WHERE Ano = ".$aDate[2]." AND Nombre = '$nombre'";
		$resultado = executeSQL($sql);
		return $resultado;
	}elseif((count($result1)!=0)&&(count($validador_de_insumos_en_anos_anteriores)!=0)){
		$sqlRegistroEntradas = "INSERT INTO EntradasEmergentesInventarioInsumo (codigoInsumo,Cantidad,Fecha,Ano,Mes)
																																																																		VALUES	(".$id[0][0].",$cantidad,'$dateC','$Ano','$Mes')";
		$resultado2 = executeSQL($sqlRegistroEntradas);
		$sqlPrev = "SELECT $mes FROM Insumos WHERE Ano = ".$aDate[2]." AND Nombre = '$nombre'";
		$resultado1 = executeSQL($sqlPrev);
		$update = $resultado1[0][0] + $cantidad;
		$sql = "UPDATE Insumos SET $mes = $update WHERE Ano = ".$aDate[2]." AND Nombre = '$nombre'";
		$resultado = executeSQL($sql);
		return $resultado;
	}elseif((count($result1)==0)&&(count($validador_de_insumos_en_anos_anteriores)==0)){
		$sql_producto_nuevo = "UPDATE Insumos SET $mes = $cantidad WHERE Ano = ".$aDate[2]." AND Nombre = '$nombre'";
			echo "aqui estoy";
			$result_productoNuevo = executeSQL($sql_producto_nuevo);
			$sql_insertar_a_entradas_emergentes = "INSERT INTO EntradasEmergentesInventarioInsumo (codigoInsumo,Cantidad,Fecha,Ano,Mes)
																																																																VALUES	(".$id[0][0].",$cantidad,'$dateC','$Ano','$Mes')";
			$result_insertar_a_entradas_emergentes = executeSQL($sql_insertar_a_entradas_emergentes);
	}
}

function select_cant_id($id){
	//Consulta a fecha de sistema {	
	$dateC = @date("d-m-Y H:i:s");
	$date = explode(" ", $dateC);
	$aDate = explode("-", $date[0]);
	$Ano = $aDate[2];
	$Messtring = $aDate[1];
	if($Messtring<=9){
		$Mes = $Messtring[1];
	}else{
		$Mes = $Messtring;
	}
	// }
	// Asignación de vector meses con los meses del año
	$meses[0]="null";
	$meses[1]="Enero";
	$meses[2]="Febrero";
	$meses[3]="Marzo";
	$meses[4]="Abril";
	$meses[5]="Mayo";
	$meses[6]="Junio";
	$meses[7]="Julio";
	$meses[8]="Agosto";
	$meses[9]="Septiembre";
	$meses[10]="Octubre";
	$meses[11]="Noviembre";
	$meses[12]="Diciembre";
	//var_dump($id);
	$existencia_de_enero = self::existencia_mes($id,$Mes,$Ano);
/*	if($Mes=="01"){
		$Mes = 1;
	}*/
	//var_dump($existencia_de_enero);
	if(($meses[$Mes]=="Enero")&&($existencia_de_enero==null)){
		//echo "uno";
		$Mes = 12;
		$Ano = $Ano - 1;
		$flag = 1;
	}
	if(($meses[$Mes]!="Enero")&&($existencia_de_enero==null)&&($flag!=1)){
		//echo "dos";
		$Mes = $Mes - 1;
	}
	$sql = "SELECT CodigoInsumo,".$meses[$Mes]." FROM Insumos WHERE CodigoInsumo = $id AND Ano = $Ano";
	//echo $sql;	
	$resultado = executeSQL($sql);
	//var_dump($resultado);
//var_dump(count($resultado));
		if(count($resultado)==0){
		//echo "uno";
		return null;
	}else{
		//echo "dos";
		return $resultado;
	}
}
}
?>
