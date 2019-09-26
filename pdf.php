<?php

	session_start();

	require 'librerias/fpdf/fpdf.php';
	require 'librerias/conexion.php';
	include 'librerias/barcode.php';
	
	$sql = "SELECT codigo_barras FROM pedidos WHERE id = ".$_SESSION["idPedido"];
	$resultado = mysqli_query($cn, $sql);
	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true, 20);
	$y = $pdf->GetY();
	
	while ($row = mysqli_fetch_assoc($resultado)){
		
		$code = $row['codigo_barras'];
		
		barcode('codigos/'.$code.'.png', $code, 20, 'horizontal', 'code128', true);
		
		$pdf->Image('codigos/'.$code.'.png',10,$y,50,0,'PNG');
		
		$y = $y+15;
	}
	$pdf->Output();	
	
?>