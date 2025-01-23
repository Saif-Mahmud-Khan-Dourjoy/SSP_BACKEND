<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Intervention_lists extends Controller
{
    
    public function intervention_lists_list(){
        $query = DB::select("select * from intervention_lists");
        return response()->json($query);
    }
}
		