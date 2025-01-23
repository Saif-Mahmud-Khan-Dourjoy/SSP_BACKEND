<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Land_cover extends Controller
{
    
    public function land_cover_list(){
        $query = DB::select("select * from land_cover");
        return response()->json($query);
    }
}
		