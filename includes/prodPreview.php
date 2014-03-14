<? 
$arrayIng = json_decode(str_replace('\\', '', $_POST['ingr']));
$arrayCant = json_decode(str_replace('\\', '', $_POST['cant']));?>
<table border=0>
		<tr>
			<td>Nombre: </td><td><? echo $_POST['nameP'];?></td>
		</tr>
		<tr>
			<td>Enero: </td><td><? echo $_POST['eneP'];?></td>
		</tr>
		<tr>
			<td>Febrero: </td><td><? echo $_POST['febP'];?></td>
		</tr>
		<tr>
			<td>Marzo: </td><td><? echo $_POST['marP'];?></td>
		</tr>
		<tr>
			<td>Abril: </td><td><? echo $_POST['abrP'];?></td>
		</tr>
		<tr>
			<td>Mayo: </td><td><? echo $_POST['mayP'];?></td>
		</tr>
		<tr>
			<td>Junio: </td><td><? echo $_POST['junP'];?></td>
		</tr>
		<tr>
			<td>Julio: </td><td><? echo $_POST['julP'];?></td>
		</tr>
		<tr>
			<td>Agosto: </td><td><? echo $_POST['agoP'];?></td>
		</tr>
		<tr>
			<td>Septiembre: </td><td><? echo $_POST['sepP'];?></td>
		</tr>
		<tr>
			<td>Octubre: </td><td><? echo $_POST['octP'];?></td>
		</tr>
		<tr>
			<td>Noviembre: </td><td><? echo $_POST['novP'];?></td>
		</tr>
		<tr>
			<td>Diciembre: </td><td><? echo $_POST['dicP'];?></td>
		</tr>
<? if($_POST['ingr']){
		for ($i=0;$i<count($arrayIng);$i++){?>
		<tr>
			<td>Ingrediente <? echo $i+1;?>:</td>
			<td><? echo $arrayIng[$i];?></td>
			<td>Cantidad:</td>
			<td><?
if(count($arrayIng)==1){
echo $arrayCant;
}else{
echo $arrayCant[$i];
}?>
	</td>
</tr>
<?
}
}?>
		<tr>
			<td colspan=2>
				<input type=button id=saveP value="Guardar" onclick=ProductRegSave()>
				<input type=button id=cancel2 value="Cancelar" onclick=cancelReg("2")>
			</td>
	</table>
