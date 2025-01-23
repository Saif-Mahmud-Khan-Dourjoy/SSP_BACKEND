<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Logistic_conditions extends Controller
{
    
    public function logistic_conditions_list(){
        $query = DB::select("select * from logistic_conditions");
        return response()->json($query);
    }
}
		