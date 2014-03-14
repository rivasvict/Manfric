<?
include "../clases/users.php";
include "../clases/productos.php";
include "../clases/insumos.php";
include "../clases/Bd.php";
include "../clases/formulas.php";
include "../clases/ordenes.php";
$formulaId = formulas::seleccionar_formulas(null);
$productos = productos::consultar();
?>
<div id=registerDiv class=cForm>
	<table border=0>
		<tr>
			<td>
				Nombre del producto requerido: 
			</td>
			<td>
				<select name="productS" class=prod id=productoSel onclick=mostrarDiv()>
					<option value=null>--</option>
					<? for ( $i = 0 ; $i <= count($productos)-1 ; $i ++) {?>
						<option value="<?echo $productos[$i]['0'];?>"><?echo $productos[$i]['0'];?></option>
					<? }?>
				</select>
			<td>
		</tr>
	</table>
<div id=selectedProduct>
	<table border=0>
		<!-- PARA AGREGAR NUEVAS FÓRMULAS-->
		<tr>
			<td class=plusForm>Agregar fórmula: </td><td class=plusForm><input type=button id=formula onclick=addForm() value="+"></td>
		</tr>
		<td>			
			<td><div id=apparedForm></div></td>
		</tr>
<!-- PARA UTILIZAR FORMULAS EXISTENTES-->
		<tr>
			<td class=existForm>Utilizar fómula existente: </td><td class=existForm><input type=button id=formulaExistente onclick=addFormE() value="Elegir"></td>
		</tr>
			<td class=sForm><div id=select_code_name class=sForm>Seleccionar código de fórmula existente:</div></td>
			<td class=sForm><div id=select_code_id class=sForm>
				</div>
			</td>
		</tr>
		<tr>
			<td><div id="formula_existente"></div></td><td></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=button id=previewB value="Vista previa" onclick=ProductRegFormPrev()>
				<input type=button id=cancel1 value="Cancelar" onclick=cancelReg("1")>
			</td>
		</tr>
	</table>
</div>
</div>
