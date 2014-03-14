<?
function dbcon(){
$conex = mysql_connect("localhost","root","enrivaromanza61639093");
mysql_select_db("Manfric",$conex);
return $conex;
}

function executeSQL($SQL){

$result = mysql_query($SQL,$conex = dbcon());
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
$arr = array();
while($row = @mysql_fetch_array($result))
  $arr[] = $row;
mysql_close($conex);
return $arr;
//$exSQL = mysql_query($SQL,$conex = dbcon());
//$row = mysql_fetch_array($result);
//return $row;
}


?>
