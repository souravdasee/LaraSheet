<?php

namespace App\Http\Controllers;

use App\Imports\ExhibitionsImport;
use App\Imports\SecondTableImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExhibitionController extends Controller
{
    public function index()
    {
        return view('import');
    }

    public function import(Request $req)
    {
        // dd($req->file('file'));
        Excel::import(new ExhibitionsImport, $req->file('file'));
        Excel::import(new SecondTableImport, $req->file('file'));

        return back()->with('success', 'All good!');
    }
}
