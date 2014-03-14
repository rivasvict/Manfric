<?

class users {

function InsertarEmpleado($nombre		,$apellido,$sexo		,$cedula	,
													$anoViejo	,$mesViejo,$diaViejo,$foto		,
													$dpto			,$cargo		,$prueba	,$oper,
													$coment		){

$dateC = @date("d-m-Y H:i:s");
$date = explode(" ", $dateC);
$aDate = explode("-", $date[0]);

$eDate = $aDate[2]."-".$aDate[1]."-".$aDate[0];

$anoNuevo = $aDate[2];
$mesNuevo = $aDate[1];
$diaNuevo = $aDate[0];

$fechaIng = $date[0];
$fechaNac = $anoViejo."-".$mesViejo."-".$diaViejo;

$edadAnual = $anoNuevo - $anoViejo;
echo "Año: ".$aDate[2]."/";
echo "Mes: ".$aDate[1]."/";
echo "Día: ".$aDate[0];
//echo $aDate[1];
if($mesNuevo>=$mesViejo){
	if($mesNuevo==$mesViejo){
		if($diaNuevo>$diaViejo){
			$edad = $edadActual - 1;
		}else{
			$edad = $edadActual;
		}
	}
	$edad = $edadActual;
}else{
	$edad = $edadActual - 1;
}

$sqlInsert = "INSERT INTO Empleado (Nombre	,Apellido,Edad,Sexo	,
																		Cedula	,FechaNac,
																		Foto		,Departamento				,
																		Cargo		,FechaIng		,
																		PeriodoPrueba,Operario	,
																		Comentarios									)
														 VALUES ('$nombre','$apellido','$edad'	,'$sexo',
																		'$cedula'	,'$fechaNac','$foto'	,'$dpto',
																		'$cargo'	,'$eDate','$prueba','$oper',
																		'$coment')";

$resultado = executeSQL($sqlInsert);
if(!$resultado){
	$resultado = null;
}
return $resultado;
}

function ISesion($cedula,$contrasena){

$sqlConsult = "SELECT Cedula FROM Usuarios WHERE Cedula='$cedula' AND Contrasena='$contrasena'";
$resultado = executeSQL($sqlConsult);
if(!$resultado){
	echo "introduzca su contraseña de nuevo";
}
return $resultado;
}

}

?>
