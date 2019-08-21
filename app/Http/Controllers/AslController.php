<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asl;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class AslController extends Controller
{
   public function index()
    {
    	$asls = Asl::all();
       return view('welcome', compact('asls'));
    }
}
