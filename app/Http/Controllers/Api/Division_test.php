<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Division_test extends Controller
{
    
    public function division_test_list(){
        $query = DB::select("select * from division_test");
        return response()->json($query);
    }
}
		