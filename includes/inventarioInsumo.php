<? 
include "../clases/insumos.php";
include "../clases/Bd.php";

if($_POST['pstI']){
	$insumLst = insumos::selectInsumos();
}?>
<div id=registerDiv>
	<table border=0>
		<tr>
			<td>Material: </td>
			<td>
				<select name="insumSl" class=ins id="insumSel" onclick="mC()">
					<option value=null>--</option>
						<? for ( $i = 0 ; $i <= count($insumLst)-1 ; $i ++) {?>
							<option value="<?echo $insumLst[$i]['0'];?>"><?echo $insumLst[$i]['0'];?></option>
						<? }?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="cantAppared">Cantidad: </td>
			<td class="cantAppared"><input type=text id=cantInvent class=iTR></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=button id=previewB value="Vista previa" class="cantAppared" onclick=iIPrev()>
				<input type=button id=cancel1 value="Cancelar" onclick=cancelReg("1")>
			</td>
	</table>
</div>

