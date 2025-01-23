<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Polytypetrt_lists extends Controller
{
    
    public function polytypetrt_lists_list(){
        $query = DB::select("select * from polytypetrt_lists");
        return response()->json($query);
    }
}
		