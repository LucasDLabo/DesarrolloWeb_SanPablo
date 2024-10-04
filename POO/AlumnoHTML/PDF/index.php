<?php

require ('Fpdf/fpdf.php');

class PDF extends FPDF{
    function Header(){
        $this->SetFont('Arial','B','16');
        $this->Cell(80);
        $this->Cell(30,10,'issp',1,0,'C');
        $this->Ln();
    }
    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'pagina' . this-> PageNo() .'/{nb}',0,0,'C');
    }
}


$pdf = new FPDF();

$pdf->AddPage();

//$pdf->Cell(40,10,utf8_decode("Hola mundo"));

//$pdf->SetFont('Arial', 'B', 16);

$pdf->Output('', 'hola mundo.pdf');