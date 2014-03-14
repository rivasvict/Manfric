<? 
include "../clases/users.php";
include "../clases/productos.php";
include "../clases/insumos.php";
include "../clases/Bd.php";
include "../clases/formulas.php";
include "../clases/ordenes.php";
$product_id = productos::selectId($_POST['prodId']);
$formulasId = formulas::feormula_segun_producto($product_id[0][0]);
?>
<select id="sCode" onclick=codeForm()>
						<option value="null">--</option>
				<? for($i=0;$i<=count($formulasId)-1;$i++){?>
						<option value="<? echo $formulasId[$i][0];?>"><? echo $formulasId[$i][0];?></option>
				<? }?>
</select>
<input type=button id=CSF value="Cancelar" onclick=cancelSelectForm()>
