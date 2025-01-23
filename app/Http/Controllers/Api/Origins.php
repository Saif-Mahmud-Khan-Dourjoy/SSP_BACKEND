<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Origins extends Controller
{
    
    public function origins_list(){
        $query = DB::select("select * from origins");
        return response()->json($query);
    }
}
		