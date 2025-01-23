<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Th_plants extends Controller
{
    
    public function th_plants_list(){
        $query = DB::select("select * from th_plants");
        return response()->json($query);
    }
}
		