<? 
include "../clases/users.php";
include "../clases/productos.php";
include "../clases/insumos.php";
include "../clases/Bd.php";
include "../clases/formulas.php";
include "../clases/ordenes.php";
$formulaId = formulas::seleccionar_formulas(null);
$meses[0][0]="Enero";
$meses[1][0]="Febrero";
$meses[2][0]="Marzo";
$meses[3][0]="Abril";
$meses[4][0]="Mayo";
$meses[5][0]="Junio";
$meses[6][0]="Julio";
$meses[7][0]="Agosto";
$meses[8][0]="Septiembre";
$meses[9][0]="Octubre";
$meses[10][0]="Noviembre";
$meses[11][0]="Diciembre";
$meses[0][1]="eneP";
$meses[1][1]="febP";
$meses[2][1]="marP";
$meses[3][1]="abrP";
$meses[4][1]="mayP";
$meses[5][1]="junP";
$meses[6][1]="julP";
$meses[7][1]="agoP";
$meses[8][1]="sepP";
$meses[9][1]="octP";
$meses[10][1]="novP";
$meses[11][1]="dicP";
$dateC = @date("d-m-Y H:i:s");
$date = explode(" ", $dateC);
$aDate = explode("-", $date[0]);
?>
<div id=registerDiv>
	<table border=0>
		<tr>
			<td>Nombre: </td><td><input type=text id=nameP class=iTR></td>
		</tr>
		<? for ($i=0;$i<=count($meses)-1;$i++){?>
			<tr>
				<td><?echo $meses[$i][0]?>:</td>
				<td><input type=text id="<?echo $meses[$i][1]?>" class=iTR></td>
			</tr>
		<? }?>
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
			<td class=sForm>Seleccionar código de fórmula existente</td>
			<td class=sForm>
					<select id="sCode" onclick=codeForm()>
						<option value="null">--</option>
				<? for($i=0;$i<=count($formulaId)-1;$i++){?>
						<option value="<? echo $formulaId[$i][0];?>"><? echo $formulaId[$i][0];?></option>
				<? }?>
				</select>
				<input type=button id=CSF value="Cancelar" onclick=cancelSelectForm()>
			</td>
		</tr>
		<tr>
			<td><div id="formula_existente"></div></td><td></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=button id=previewB value="Vista previa" onclick=ProductRegPrev()>
				<input type=button id=cancel1 value="Cancelar" onclick=cancelReg("1")>
			</td>
		</tr>
	</table>
</div>

