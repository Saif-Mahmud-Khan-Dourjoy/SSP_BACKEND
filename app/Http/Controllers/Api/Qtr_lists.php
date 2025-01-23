<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Qtr_lists extends Controller
{
    
    public function qtr_lists_list(){
        $query = DB::select("select * from qtr_lists");
        return response()->json($query);
    }
}
		