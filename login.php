<?
if($_POST['env']){
	$returnI = users::ISesion($_POST['id'],$_POST['pass']);
	if($returnI){
		$_SESSION['usr']=$_POST['id'];?>
		<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php"><?
	}
}
?>
<form id=one action="index.php" method=post>
	<input type=text name=id id=id>
	<input type=password name=pass id=pass>
	<input type=submit name=env id=env value=Enviar>
</form>
