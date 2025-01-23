<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Mouza_types extends Controller
{
    
    public function mouza_types_list(){
        $query = DB::select("select * from mouza_types");
        return response()->json($query);
    }
}
		