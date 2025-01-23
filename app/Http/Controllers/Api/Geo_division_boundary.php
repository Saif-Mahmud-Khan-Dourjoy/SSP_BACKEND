<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_division_boundary extends Controller
{
    
    public function geo_division_boundary_list(){
        $query = DB::select("select * from geo_division_boundary");
        return response()->json($query);
    }
}
		