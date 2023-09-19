<?php

namespace App;

use TCPDF;


class PDF
{

    public function generatePDF($formData): TCPDF
    {
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);
        $pdf->SetFillColor(200, 200, 255); // Couleur de remplissage de la cellule (R, G, B)
        $pdf->Cell(0, 10, 'Justificatif de retard', 1, 1, 'C', true); // Titre du tableau
        //convertir en string
        $sujet = $formData['Sujet'];
        $choix = $formData['Choix'];




        $pdf->Write(0, $sujet);
        $pdf->Write(0, $choix);



        return $pdf;
    }

}