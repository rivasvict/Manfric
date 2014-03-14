<table border=0>
		<tr>
			<td>Nombre: </td><td><? echo $_POST['nameI']?></td>
		</tr>
		<tr>
			<td>Existencia: </td><td><? echo $_POST['exisI']?></td>
		</tr>
		<tr>
			<td>Costo(u/Bs): </td><td><? echo $_POST['costI']?></td>
		</tr>
		<tr>
			<td>Enero: </td><td><? echo $_POST['eneI']?></td>
		</tr>
		<tr>
			<td>Febrero: </td><td><? echo $_POST['febI']?></td>
		</tr>
		<tr>
			<td>Marzo: </td><td><? echo $_POST['marI']?></td>
		</tr>
		<tr>
			<td>Abril: </td><td><? echo $_POST['abrI']?></td>
		</tr>
		<tr>
			<td>Mayo: </td><td><? echo $_POST['mayI']?></td>
		</tr>
		<tr>
			<td>Junio: </td><td><? echo $_POST['junI']?></td>
		</tr>
		<tr>
			<td>Julio: </td><td><? echo $_POST['julI']?></td>
		</tr>
		<tr>
			<td>Agosto: </td><td><? echo $_POST['agoI']?></td>
		</tr>
		<tr>
			<td>Septiembre: </td><td><? echo $_POST['sepI']?></td>
		</tr>
		<tr>
			<td>Octubre: </td><td><? echo $_POST['octI']?></td>
		</tr>
		<tr>
			<td>Noviembre: </td><td><? echo $_POST['novI']?></td>
		</tr>
		<tr>
			<td>Diciembre: </td><td><? echo $_POST['dicI']?></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=button id=saveP value="Guardar" onclick=InsumRegSave()>
				<input type=button id=cancel2 value="Cancelar" onclick=cancelReg("2")>
			</td>
	</table>
