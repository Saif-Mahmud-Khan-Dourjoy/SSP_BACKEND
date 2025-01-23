<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_union_boundary extends Controller
{
    
    public function geo_union_boundary_list(){
        $query = DB::select("select * from geo_union_boundary");
        return response()->json($query);
    }
}
		