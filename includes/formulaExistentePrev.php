<? 
$arrayIng = json_decode(str_replace('\\', '', $_POST['ingr']));
$arrayCant = json_decode(str_replace('\\', '', $_POST['cant']));?>
<table border=0>
<tr>
	<td>Nombre del producto al que se le agregará esta fórmula: </td>
	<td><? echo $_POST['nameProduct'];?></td>
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
				<input type=button id=saveP value="Guardar" onclick=FormulaExistenteRegSave()>
				<input type=button id=cancel2 value="Cancelar" onclick=cancelReg("2")>
			</td>
	</table>
