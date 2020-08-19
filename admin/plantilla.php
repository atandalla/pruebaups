<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images/LOGO-UPS.png', 4, 4, 85 );
			$this->SetFont('Arial','B',20);
			$this->Cell(85);
			$this->Cell(120,20, utf8_decode('Reporte Acta-Recepción'),0,0,'C');
			$this->Ln(25);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>