<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Sessions extends Controller
{
    
    public function sessions_list(){
        $query = DB::select("select * from sessions");
        return response()->json($query);
    }
}
		