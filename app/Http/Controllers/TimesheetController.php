<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    //
    public function index(Request $request)
    {
        // 
        $data = [
            'name' => $request->name,
            'date' => date('d/m/Y',strtotime($request->weekCommencing)),
            'dayData' => json_decode($request->dayData),
        ];

        $pdf = \PDF::loadView('pdf', $data);
        $pdf->save(storage_path().'_filename.pdf');

        return $pdf->download('customers.pdf');
    }
}
