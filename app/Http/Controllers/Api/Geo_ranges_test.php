<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_ranges_test extends Controller
{
    
    public function geo_ranges_test_list(){
        $query = DB::select("select * from geo_ranges_test");
        return response()->json($query);
    }
}
		