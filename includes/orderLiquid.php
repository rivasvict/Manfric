<? 
include "../clases/users.php";
include "../clases/productos.php";
include "../clases/insumos.php";
include "../clases/Bd.php";
include "../clases/formulas.php";
include "../clases/ordenes.php";
$orden_Mes_Ano = ordenes::selectOrder(null,null,null,4);
if($orden_Mes_Ano[1][0][0]){?>
	<tr>
		<td>Nombre: </td>
		<td>Código de orden de producción: </td>
		<td>Código de producto: </td>
		<td>Fecha de emisión de orden: </td>
		<td>Cantidad: </td>
		<td>Estado de la orden: </td>
		<td>Mes: </td>
		<td>Año: </td>
		<td>Comentarios de creación: </td>
		<td>Fórmula: </td>
	</tr>
	<?
	for($i=0;$i<=count($orden_Mes_Ano[1])-1;$i++){
		echo "<tr><td>".$orden_Mes_Ano[0][$i][0][0]."</td>";
		for($j=0;$j<=count($orden_Mes_Ano[1][$i])-1;$j++){
			echo "<td>".$orden_Mes_Ano[1][$i][$j]."</td>";
		}
		echo "<td><input type=button value=Liquidar onclick=liquid(".$orden_Mes_Ano[1][$i][0].")></td>";
?></tr><?
	}
}else{
	echo "No existen órdenes de producción activas en éste mes";
}
?>
