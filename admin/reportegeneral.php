<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT * FROM actarecepcion";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('L');
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(40,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(40,6,utf8_decode('PARROQUIA'),1,0,'C',1);
	$pdf->Cell(35,6,utf8_decode('N° CELULAR'),1,0,'C',1);
	$pdf->Cell(40,6,'ENTIDAD',1,0,'C',1);
	$pdf->Cell(30,6,'FECHA',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,6,utf8_decode($row['id_acta']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode('Cumbayá'),1,0,'L');
		$pdf->Cell(35,6,utf8_decode($row['celular']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['entidad']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['fecha']),1,1,'C');
	}
	
	$pdf->Output();
?>