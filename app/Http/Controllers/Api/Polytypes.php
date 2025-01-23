<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Polytypes extends Controller
{
    
    public function polytypes_list(){
        $query = DB::select("select * from polytypes");
        return response()->json($query);
    }
}
		