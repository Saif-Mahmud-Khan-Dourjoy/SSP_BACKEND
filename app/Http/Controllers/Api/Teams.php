<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Teams extends Controller
{
    
    public function teams_list(){
        $query = DB::select("select * from teams");
        return response()->json($query);
    }
}
		