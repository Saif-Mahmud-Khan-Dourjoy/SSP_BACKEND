<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_upazila_boundary extends Controller
{
    
    public function geo_upazila_boundary_list(){
        $query = DB::select("select * from geo_upazila_boundary");
        return response()->json($query);
    }
}
		