<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
</head>
<?

$conexion = mysql_connect("localhost", "(usuario)", "(password)");
mysql_select_db("(base de datos)", $conexion);

$id = $_post['txt1'];
$ps = $_post['txt2'];

$rs= mysql_query("select * from Prueba", $conexion);

echo
$_post['txt3']= $rs;

?>
