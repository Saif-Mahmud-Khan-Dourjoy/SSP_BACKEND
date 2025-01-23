<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Month_inun_lists extends Controller
{
    
    public function month_inun_lists_list(){
        $query = DB::select("select * from month_inun_lists");
        return response()->json($query);
    }
}
		