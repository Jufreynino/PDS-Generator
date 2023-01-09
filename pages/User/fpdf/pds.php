<?php 

require('fpdf.php');



$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',17);
$pdf->cell(190,20,"sadasasdsa",1,0,'C');
$pdf->Output(); //force download file
exit;
?>