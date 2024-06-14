<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function viewPdf()
    {
        $data['name'] = 'Ali';
        /*
        data can be taken from database (like show) 
        or form (like store) based on what we want 
        */
        $pdf = PDF::loadView('pdf.document', $data);
        /*
        $pdf = PDF::loadView('pdf.document', $data);
        $x = className::functionName('pdf.document', $data);
        #NOTE THAT:
        $data which we store the data in
        pdf.document -> folderName.viewName 
        we will use document view as a design for 
        our pdf file so this view the user will not see it
        it just for us to design how we want pdf file 
        to look like
         */

        return $pdf->stream('document.pdf');
        /*
        return $pdf->stream('document.pdf');
        document.pdf -> pdfFileName.pdf
        it is the name of the pdf file which will show for 
        the user after he generate his data as pdf in his
        computer 
         */
    }
}
