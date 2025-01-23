<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Vegpct_lists extends Controller
{
    
    public function vegpct_lists_list(){
        $query = DB::select("select * from vegpct_lists");
        return response()->json($query);
    }
}
		