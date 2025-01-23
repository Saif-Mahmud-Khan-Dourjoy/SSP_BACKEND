<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_union_pts extends Controller
{
    
    public function geo_union_pts_list(){
        $query = DB::select("select * from geo_union_pts");
        return response()->json($query);
    }
}
		