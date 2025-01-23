<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Intervention_sites_2d extends Controller
{
    
    public function intervention_sites_2d_list(){
        $query = DB::select("select * from intervention_sites_2d");
        return response()->json($query);
    }
}
		