<div id=registerDiv>
	<table border=0>
		<tr>
			<td>Nombre: </td><td><input type=text id=regName class=iTR></td>
		</tr>
		<tr>
			<td>Apellido: </td><td><input type=text id=regLastN class=iTR></td>
		</tr>
		<tr>
			<td>Cédula: </td><td><input type=text id=regId class=iTR></td>
		</tr>
		<tr>
			<td>Sexo: </td>
			<td>
				<select name="gen" id=regGen>
					<option value=null>--</option>
					<option value=M>M</option>
					<option value=F>F</option>
				</select>
		</td>
		</tr>
		<tr>
			<td>Fecha de nacimiento (año/mes/día): </td>
			<td>
				<select name="anoNac" class=regDate id=regBYear>
					<option value=null>--</option>
					<? for ( $i = 1950 ; $i <= 1993 ; $i ++) {
						if($i==1950){
							$j=0;
						}
						$j++;
					?>
						<option value="<? echo $i;?>"><?echo $i;?></option>
					<? }?>
				</select> / 
				<select name="mesNac" class=regDate id=regBMonth>
					<option value=null>--</option>
					<? for ( $i = 1 ; $i <= 12 ; $i ++) {
						if($i==1){
							$j=0;
						}
						$j++;
					?>
						<option value="<? echo $j;?>"><?echo $i;?></option>
					<? }?>
					</select> / 
				<select name="diaNac" class=regDate id=regBDay>
					<option value=null>--</option>
					<? for ( $i = 1 ; $i <= 31 ; $i ++) {
						if($i==1){
							$j=0;
						}
						$j++;
					?>
						<option value="<? echo $j;?>"><?echo $i;?></option>
					<? }?>
				</select> 
			</td>
		</tr>
		<tr>
			<td>Foto: </td><td><input type=file id=regPho class=iTR></td>
		</tr>
		<tr>
			<td>Departamento: </td><td><input type=text id=regAr class=iTR></td>
		</tr>
		<tr>
			<td>Cargo: </td><td><input type=text id=regPos class=iTR></td>
		</tr>
		<tr>
			<td>Período de prueba: </td><td>
				<select name="test" id=regTest>
					<option value=null>--</option>
					<option value=No>Si</option>
					<option value=Si>No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>¿Operario?: </td><td>
				<select name="oper" id=regOp>
					<option value=null>--</option>
					<option value=Si>Si</option>
					<option value=No>No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Comentarios: </td>
			<td>
				<textarea rows=2 cols=20 id=regCom class=iTR></textarea>
			</td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=button id=previewB value="Vista previa" onclick=userRegPrev()>
				<input type=button id=cancel1 value="Cancelar" onclick=cancelReg("1")>
			</td>
	</table>
</div>

