<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Csv\CsvRequest;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportStudentsController extends Controller
{
    

    public function import(CsvRequest $request,$id)
    {
        // dd($request->file('students_file'));
        
    $students = Excel::import(new StudentsImport($id), $request->file('students_file'));
    if(!$students){
        return 'error';
    }
    return redirect()->back();
    }
}
