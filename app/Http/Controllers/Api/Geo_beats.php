<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Geo_beats extends Controller
{
    
    public function geo_beats_list(){
        $query = DB::select("select * from geo_beats");
        return response()->json($query);
    }
}
		