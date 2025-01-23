<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Historys extends Controller
{
    
    public function historys_list(){
        $query = DB::select("select * from historys");
        return response()->json($query);
    }
}
		