<table border=0>
		<tr>
			<td>Producto: </td><td><? echo $_POST['prod'];?></td>
		</tr>
		<tr>
			<td>Fórmula: </td><td><? echo $_POST['form'];?></td>
		</tr>
		<tr>
			<td>Cantidad: </td><td><? echo $_POST['cant'];?></td>
		</tr>
		<tr>
			<td>Comentarios: </td><td><? echo $_POST['comm'];?></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=button id=save value="Guardar" onclick=orderSave()>
				<input type=button id=cancel2 value="Cancelar" onclick=cancelReg("2")>
			</td>
	</table>
