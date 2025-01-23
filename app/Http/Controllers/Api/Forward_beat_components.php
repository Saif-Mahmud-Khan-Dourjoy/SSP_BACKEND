<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Forward_beat_components extends Controller
{
    
    public function forward_beat_components_list(){
        $query = DB::select("select * from forward_beat_components");
        return response()->json($query);
    }
}
		