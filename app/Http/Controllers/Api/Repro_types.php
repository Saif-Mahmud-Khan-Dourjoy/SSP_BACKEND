<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Repro_types extends Controller
{
    
    public function repro_types_list(){
        $query = DB::select("select * from repro_types");
        return response()->json($query);
    }
}
		