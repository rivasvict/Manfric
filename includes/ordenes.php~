<? 
include "../clases/users.php";
include "../clases/productos.php";
include "../clases/insumos.php";
include "../clases/Bd.php";
if($_POST['pst']){
	$productos = productos::consultar();
}
?>
<div id=registerDiv>
<table border=0>
	<tr>
		<td>
			Nombre del producto requerido: 
		</td>
		<td>
			<select name="productS" class=prod id="productoSel" onclick=mostrar_formulas()>
				<option value=null>--</option>
				<? for ( $i = 0 ; $i <= count($productos)-1 ; $i ++) {?>
					<option value="<?echo $productos[$i]['0'];?>"><?echo $productos[$i]['0'];?></option>
				<? }?>
			</select>
		<td>
	</tr>
<tr><td><div id=complete_form></div></td></tr>
</table>
</div>
