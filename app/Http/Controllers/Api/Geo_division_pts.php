<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_division_pts extends Controller
{
    
    public function geo_division_pts_list(){
        $query = DB::select("select * from geo_division_pts");
        return response()->json($query);
    }
}
		