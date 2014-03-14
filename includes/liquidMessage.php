<p>Usted va a liquidar la orden de producción: <? echo $_POST['oid'];?></p>
<p>Esta orden presenta una producción requerida de: <? echo $_POST['ocant'];?></p>
<p>A su vez una producción real de: <? echo $_POST['oreal'];?></p>
<? 
$desviacion = $_POST['oreal']/$_POST['ocant']-1;?>
<p>Su desviación estándar es de: <? echo $desviacion;?></p>
<p>¿Desea que ésta liquidación se haga efectiva en el sistema?</p>
<p>
	<input type=button id=si onclick=sil() value=Si>
	<input type=button id=no onclick=nol() value=No>
</p>
<p>
<div id=validador></div>
</p>
