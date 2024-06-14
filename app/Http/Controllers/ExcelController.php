<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class ExcelController extends Controller
{
    //export function ...
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    //import function ...
    public function import(Request $request) 
    {
        Excel::import(new UsersImport, $request->excel);
        /*
        #NOTE THAT:
        $request->excel 
        where excel is the input name
        from the form                
         */
        return "Data Imported Successfully";
    }
}
