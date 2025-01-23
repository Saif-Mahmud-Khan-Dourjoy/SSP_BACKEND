<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Spatial_ref_sys extends Controller
{
    
    public function spatial_ref_sys_list(){
        $query = DB::select("select * from spatial_ref_sys");
        return response()->json($query);
    }
}
		