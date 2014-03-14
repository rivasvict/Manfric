<?
include "../clases/users.php";
include "../clases/productos.php";
include "../clases/insumos.php";
include "../clases/Bd.php";
include "../clases/formulas.php";
include "../clases/ordenes.php";
$id_producto = productos::selectId($_POST['nombre_producto']);
$formulas_producto = formulas::feormula_segun_producto($id_producto[0][0]);
?>
	<tr>
		<td>
			Fórmula a utilizar para la órden de producción: 
		</td>
		<td>
			<select name="formS" class=form id="formulaSel" onclick=mostrar_resto()>
				<option value=null>--</option>
				<? for ( $i = 0 ; $i <= count($formulas_producto)-1 ; $i ++) {?>
					<option value="<?echo $formulas_producto[$i]['0'];?>"><?echo $formulas_producto[$i]['0'];?></option>
				<? }?>
			</select>
		<td>
	</tr>
	<tr>
		<td class=hidde_order>
			Cantidad: 
		</td>
		<td class=hidde_order>
			<input type=text id=cantidad name=cant>
		</td>
	</tr>
	<tr>
		<td class=hidde_order>
			Comentarios: 
		</td>
		<td class=hidde_order>
			<textarea rows="5" cols="20" id=comments></textarea>
		</td>
	</tr>
	<tr>
		<td colspan=2 class=hidde_order>
			<input type=button id=previewO value="Vista previa" onclick=orderPrev()>
			<input type=button id=cancel1 value="Cancelar" onclick=cancelReg("1")>
		</td>
	</tr>
