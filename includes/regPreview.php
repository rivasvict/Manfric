	<table border=0>
		<tr>
			<td>Nombre: </td><td><? echo $_POST['regName'];?></td>
		</tr>
		<tr>
			<td>Apellido: </td><td><? echo $_POST['regLastN'];?></td>
		</tr>
		<tr>
			<td>Cédula: </td><td><? echo $_POST['regId'];?></td>
		</tr>
		<tr>
			<td>Sexo: </td><td><? echo $_POST['regGen'];?></td>
		</tr>
		<tr>
			<td>Fecha de nacimiento (año/mes/día): </td>
			<td>
			<? echo $_POST['regBYear'];?> / <? echo $_POST['regBMonth'];?> / <? echo $_POST['regBDay'];?>
			</td>
		</tr>
		<tr>
			<td>Foto: </td><td><? echo $_POST['regPho'];?></td>
		</tr>
		<tr>
			<td>Departamento: </td><td><? echo $_POST['regAr'];?></td>
		</tr>
		<tr>
			<td>Cargo: </td><td><? echo $_POST['regPos'];?></td>
		</tr>
		<tr>
			<td>Período de prueba: </td><td><? echo $_POST['regTest'];?></td>
		</tr>
		<tr>
			<td>¿Operario?: </td><td><? echo $_POST['regOp'];?></td>
		</tr>
		<tr>
			<td>Comentarios: </td><td><? echo $_POST['regCom'];?></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=button id=save value="Guardar" onclick=userRegSave()>
				<input type=button id=cancel2 value="Cancelar" onclick=cancelReg("2")>
			</td>
	</table>
