<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    
use Codedge\Fpdf\Fpdf\Fpdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $fpdf = new FPDF('P','mm','A4');
        $fpdf->AddFont('Courier','','courier.php');
        $fpdf->SetTopMargin(20);
        $fpdf->SetLeftMargin(20);
        $fpdf->SetRightMargin(20);
        $fpdf->SetAutoPageBreak('true','20');

        $fpdf->AddPage();
        $fpdf->SetY(5);
        $fpdf->SetX(5);

        $fpdf->SetFont('Courier','',30);
        $fpdf->SetTextColor(0,0,0);

        $fpdf->Cell(200,15,'teste',0,0,'L');
        $fpdf->Ln();
        $fpdf->Output('teste.pdf', 'I');
        exit();
    }
}

