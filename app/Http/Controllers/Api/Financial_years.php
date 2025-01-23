<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Financial_years extends Controller
{
    
    public function financial_years_list(){
        $query = DB::select("select * from financial_years");
        return response()->json($query);
    }
}
		