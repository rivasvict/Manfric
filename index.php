<? session_start();
include "clases/Bd.php";
include "clases/users.php";
//var_dump($_SESSION)?>
<html>
<head>
<link href="css/menuPrincipal.css" rel="stylesheet" type="text/css">
<script src="js/jQuery.js" type="text/javascript"></script>
<script src="js/requests.js" type="text/javascript"></script>
<script src="js/json.js" type="text/javascript"></script>
</head>
<body>

<? 
if($_POST['close']){
	$_SESSION['usr']=null;
}
if($_SESSION['usr']){
	include "includes/panelPrincipal.php";
}else{
	include "includes/login.php";
}

?>
</body></html>
