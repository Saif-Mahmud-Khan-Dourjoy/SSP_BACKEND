<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Elevations extends Controller
{
    
    public function elevations_list(){
        $query = DB::select("select * from elevations");
        return response()->json($query);
    }
}
		