<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_mauza_boundary extends Controller
{
    
    public function geo_mauza_boundary_list(){
        $query = DB::select("select * from geo_mauza_boundary");
        return response()->json($query);
    }
}
		