<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Intervention_sites_bk extends Controller
{
    
    public function intervention_sites_bk_list(){
        $query = DB::select("select * from intervention_sites_bk");
        return response()->json($query);
    }
}
		