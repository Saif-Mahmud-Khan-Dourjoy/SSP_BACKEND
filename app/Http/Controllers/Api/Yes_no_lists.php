<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Yes_no_lists extends Controller
{
    
    public function yes_no_lists_list(){
        $query = DB::select("select * from yes_no_lists");
        return response()->json($query);
    }
}
		