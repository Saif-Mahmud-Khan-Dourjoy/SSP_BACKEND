<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_ranges extends Controller
{
    
    public function geo_ranges_list(){
        $query = DB::select("select * from geo_ranges");
        return response()->json($query);
    }
}
		