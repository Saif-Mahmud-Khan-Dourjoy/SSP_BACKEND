<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_district_boundary extends Controller
{
    
    public function geo_district_boundary_list(){
        $query = DB::select("select * from geo_district_boundary");
        return response()->json($query);
    }
}
		