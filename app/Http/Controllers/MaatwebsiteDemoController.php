<?php

namespace App\Http\Controllers;

use App\Exports\CsvExport;
use App\User;
use Illuminate\Http\Request;
use Input;
use DB;
use Excel;

class MaatwebsiteDemoController extends Controller
{
    public function downloadExcel($type)
	{
        return Excel::download(new CsvExport, 'users.xlsx');
	}
}
