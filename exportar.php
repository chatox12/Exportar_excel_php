<?php 
//conexion a base de datos 
    $mysqli = new mysqli('localhost','root','','bdclusac');

//fecha de exportacion
    $fecha = date("d-m-y");
    $consulta = "SELECT * FROM estudiante";
    $resultado = $mysqli->query($consulta);

//inicio de la instancia para la exportacion en Excel
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=Listado_$fecha.xls');
header('Pragma: no-cache');
header('Expires: 0');

echo  "<table Border = 1>";
echo "<tr> ";
echo     "<th>nombre N</th> ";
echo "</tr> ";

while($row = mysqli_fetch_array($resultado)){	
	$nombrec = $row['nombre'];
	echo "<tr> ";
	echo 	"<td>".$nombrec."</td> "; 
	echo "</tr> ";

}
echo "</table> ";

?>