<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Forward_beat_history extends Controller
{
    
    public function forward_beat_history_list(){
        $query = DB::select("select * from forward_beat_history");
        return response()->json($query);
    }
}
		