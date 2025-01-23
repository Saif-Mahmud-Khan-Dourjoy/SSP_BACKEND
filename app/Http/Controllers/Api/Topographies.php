<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Topographies extends Controller
{
    
    public function topographies_list(){
        $query = DB::select("select * from topographies");
        return response()->json($query);
    }
}
		