<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Intervention_sites extends Controller
{
    
    public function intervention_sites_list(){
        $query = DB::select("select * from intervention_sites");
        return response()->json($query);
    }
}
		