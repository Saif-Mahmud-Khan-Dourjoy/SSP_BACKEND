<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Sources extends Controller
{
    
    public function sources_list(){
        $query = DB::select("select * from sources");
        return response()->json($query);
    }
}
		