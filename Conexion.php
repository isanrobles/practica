<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
</head>
<?
	$var="";
	$var1="";
	$cn = mysql_connect("proyectoasistencia.database.windows.net", "Proyectoinicio", "ProyectoISAN#") or die("Error en Conexion")
	$db= mysql_select_db("bdAsistencia")or die("Error en Db");

      if(isset($_POST["btn1"])){
	$btn=$_POST["bt1"];
	$bus=$_POST["txt1"];

	  if($btn=="Buscar"){
		$sql="select * from prueba where id='$bus'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			if (&_post['txt1']==$var){
			&_post['txt3']=$var1;}
		}
	    }
       }
?>
