<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Lmvh_lists extends Controller
{
    
    public function lmvh_lists_list(){
        $query = DB::select("select * from lmvh_lists");
        return response()->json($query);
    }
}
		