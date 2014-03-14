<form id=two action="index.php" method=post>

<div id=menuPanel>
	<div id=register class=menuP>
                <div class="menuTitle"><a> Registrar </a></div>
		<div id=registerFloat class=floatMenu>
			<table border=0>
				<tr>
					<td onclick=userReg()><a>Empleado</a></td>
				</tr>
				<tr>
					<td><a>Usuario</a></td>
				</tr>
				<tr>
					<td onclick=insReg()><a>Insumo</a></td>
				</tr>
				<tr>
					<td onclick=prodReg()><a>Producto terminado</a></td>
				</tr>
				<tr>
					<td onclick=formulaReg()><a>Fórmulas editadas</a></td>
				</tr>
			</table>
		</div>
	</div>
	<div id=report class=menuP>
                <div class="menuTitle"><a> Reportes </a></div>
		<div id=reportFloat class=floatMenu>
			<table border=0>
				<tr>
					<td><a>Producto termindo</a></td>
				</tr>
				<tr>
					<td><a>Insumos</a></td>
				</tr>
				<tr>
					<td><a>Horas hombre</a></td>
				</tr>
				<tr>
					<td><a>Producción</a></td>
				</tr>
			</table>
		</div>
	</div>
	<div id=order class=menuP>
                <div class="menuTitle"><a> Ordenes de Producción </a></div>
		<div id=orderFloat class=floatMenu>
			<table border=0>
				<tr>
					<td onclick=orderReg()><a>Nueva orden</a></td>
				</tr>
				<tr>
					<td onclick=orderEdit()><a>Editar ordenes</a></td>
				</tr>
				<tr>
					<td onclick=orderLiquid()><a>Liquidar ordenes</a></td>
				</tr>
				<tr>
					<td onclick=oederSee()><a>Ver ordenes</a></td>
				</tr>
			</table>
		</div>
	</div>
<div id=invI class=menuP>
                <div class="menuTitle"><a> Inventarios de insumos</a></div>
		<div id=invIFloat class=floatMenu>
			<table border=0>
				<tr>
					<td onclick=addMat()><a>Ingresar material</a></td>
				</tr>
				<tr>
					<td onclick=consumMat()><a>Consumo de material</a></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div id=content>

</div>
<div id=previewV>

</div>
<div id=debugg><div>
<div id=order_Liquid>

</div>
<div id=order_liquid_message>

</div>
<input type=submit id=close name=close value=Cerrar>
</form>
