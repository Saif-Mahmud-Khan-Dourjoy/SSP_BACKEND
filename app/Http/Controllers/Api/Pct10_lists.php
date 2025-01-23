<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Pct10_lists extends Controller
{
    
    public function pct10_lists_list(){
        $query = DB::select("select * from pct10_lists");
        return response()->json($query);
    }
}
		