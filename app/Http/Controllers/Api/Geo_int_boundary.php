<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_int_boundary extends Controller
{
    
    public function geo_int_boundary_list(){
        $query = DB::select("select * from geo_int_boundary");
        return response()->json($query);
    }
}
		