<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geom_vw_ssp_map extends Controller
{
    
    public function geom_vw_ssp_map_list(){
        $query = DB::select("select * from geom_vw_ssp_map");
        return response()->json($query);
    }
}
		