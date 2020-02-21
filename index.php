<?php 
require_once 'vendor/autoload.php';
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

$pdf = new Fpdi;



$pdf->AddPage();
$pdf->setSourceFile('./ejemplo.pdf');




// We import only page 1
$tpl = $pdf->importPage(1);

// Let's use it as a template from top-left corner to full width and height
$pdf->useTemplate($tpl, 0, 0, null, null);

// Set font and color
$pdf->SetFont('Helvetica', 'B', 20); // Font Name, Font Style (eg. 'B' for Bold), Font Size
$pdf->SetTextColor(0, 0, 0); // RGB

// Position our "cursor" to left edge and in the middle in vertical position minus 1/2 of the font size
$pdf->SetXY(0, 139.7-10);

// Add text cell that has full page width and height of our font
$pdf->Cell(215.9, 20, 'This text goes to middle', 0, 2, 'C');

// Output our new pdf into a file
// F = Write local file
// I = Send to standard output (browser)
// D = Download file
// S = Return PDF as a string

$pdf->Output('/newfile.pdf', 'D');
echo "sadsa";
exit(0);
?>