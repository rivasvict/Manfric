<?
session_start();
include "../clases/insumos.php";
include "../clases/Bd.php";
$counting = $_POST['number'] + 1;
if($_POST['number']){
	$insumLst = insumos::selectInsumos();
	$insumLstId = insumos::sIduno();
}
$_SESSION['nE']="new";
$_SESSION['E']=null;
?>
Ingrediente #<? echo $_POST['number'];?>:
<select name="insumSl" class=ins id="insumSel<? echo $_POST['number'];?>">
	<option value=null>--</option>
	<? for ( $i = 0 ; $i <= count($insumLst)-1 ; $i ++) {?>
		<option value="<? echo $insumLstId[$i];?>"><? echo $insumLstId[$i];?></option>
	<? }?>
</select>
Cantidad: <input type=text id="txt<? echo $_POST['number'];?>"> Kg
<input type=button id="more<? echo $_POST['number'];?>" value="+" onclick="agregarAFormula('<? echo $_POST['number'];?>')">
<input type=button id="menos<? echo $_POST['number'];?>" value="-" onclick="quitarDeFormula('<? echo $_POST['number'];?>')">
<div id="mas<? echo $counting;?>">
</div>
