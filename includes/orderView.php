<? 
include "../clases/users.php";
include "../clases/productos.php";
include "../clases/insumos.php";
include "../clases/Bd.php";
include "../clases/formulas.php";
include "../clases/ordenes.php";
$meses[0]="Enero";
$meses[1]="Febrero";
$meses[2]="Marzo";
$meses[3]="Abril";
$meses[4]="Mayo";
$meses[5]="Junio";
$meses[6]="Julio";
$meses[7]="Agosto";
$meses[8]="Septiembre";
$meses[9]="Octubre";
$meses[10]="Noviembre";
$meses[11]="Diciembre";
if($_POST['pstO']){
	$year = ordenes::selectOrder("null","null","null","null");
	//var_dump($year);
}
?>
Ver ordenes por: <select id="clas" onclick=viewOrders()>
																		<option value="">--</option>
																		<option value="Mes/Ano">Mes/Año</option>
																		<option value="Ano">Año</option>
																		<option value="Estado">Estado</option>
																	</select>
<div id="orderA">
	<tr>
		<td>
			Seleccionar año:	
		</td>
		<td>
			<select id="year" onclick=viewOrdersYear()>
				<option value="null">--</option>
					<? for($i=0;$i<=count($year)-1;$i++){?>
						<option value="<? echo $year[$i][0];?>"><? echo $year[$i][0];?></option>
					<? }?>
			</select>
		</td>
	</tr>
	<div id="orderAA">
		<tr>
			<td>
				Mes: 
			</td>
			<td>
				<select id="month" onclick=viewOrdersMonth()>
					<option value="null">--</option>
					<? for($i=0;$i<=count($meses)-1;$i++){?>
						<option value="<? echo $meses[$i];?>"><? echo $meses[$i];?></option>
					<? }?>
				</select>
			</td>
		</tr>
	<div>
</div>
<div id="orderB">


</div>
<div id="orderC">


</div>
<div id="orderV" class="viewOrder">
	<table border=0>
		<tr>
			<div id="resultQuery" class="viewOrder"></div>
		</tr>
	</table>
</div>
