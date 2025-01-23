<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Cardpoints extends Controller
{
    
    public function cardpoints_list(){
        $query = DB::select("select * from cardpoints");
        return response()->json($query);
    }
}
		