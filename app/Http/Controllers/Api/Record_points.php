<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Record_points extends Controller
{
    
    public function record_points_list(){
        $query = DB::select("select * from record_points");
        return response()->json($query);
    }
}
		