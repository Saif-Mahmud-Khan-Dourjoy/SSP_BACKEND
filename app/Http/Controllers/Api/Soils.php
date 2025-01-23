<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Soils extends Controller
{
    
    public function soils_list(){
        $query = DB::select("select * from soils");
        return response()->json($query);
    }
}
		