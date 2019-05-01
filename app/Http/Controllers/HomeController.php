<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function get_mon_hoc($ma_nganh){
    	// $result = DB::table('mondaicuongs')->select('mondaicuongs.*')->get();
    	$result2 = DB::table('monchuyennganhs')->select('monchuyennganhs.*')->where('monchuyennganhs.department_code', '=', $ma_nganh)->get();
    	return $result2;
    }
}
