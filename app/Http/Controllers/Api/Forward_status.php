<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Forward_status extends Controller
{
    
    public function forward_status_list(){
        $query = DB::select("select * from forward_status");
        return response()->json($query);
    }
}
		