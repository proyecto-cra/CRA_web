<?php
require_once('class.ezpdf.php');
$pdf = new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion,"bdcra");
$queEmp = "SELECT usuarios.id, usuarios.rut, usuarios.nombre, usuarios.apellido, usuarios.fecha_nacimiento, cargo.tipo_cargo, usuarios.telefono, usuarios.contrasena FROM usuarios, cargo WHERE (cargo.id = usuarios.cargo) ORDER BY usuarios.id ASC";
$resEmp = mysqli_query($conexion, $queEmp) or die(mysqli_error());
$totEmp = mysqli_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysqli_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>Num</b>',
				'id' => 'ID',
				'rut'=>'<b>RUT</b>',
				'nombre'=>'<b>NOMBRE</b>',
				'apellido'=>'<b>APELLIDO</b>',
				'fecha_nacimiento'=>'<b>FECHA_NAC</b>',
				'tipo_cargo'=>'<b>CARGO</b>',
				'telefono'=>'<b>TELEFONO</b>',
				'contrasena'=>'<b>CONTRASENIA</b>'
				);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>Informe de los Usuarios</b>\n";
$txttit.= "Team SPDL \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>