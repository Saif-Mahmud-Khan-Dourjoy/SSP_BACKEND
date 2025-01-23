<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Directions extends Controller
{
    
    public function directions_list(){
        $query = DB::select("select * from directions");
        return response()->json($query);
    }
}
		