<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_district_pts extends Controller
{
    
    public function geo_district_pts_list(){
        $query = DB::select("select * from geo_district_pts");
        return response()->json($query);
    }
}
		