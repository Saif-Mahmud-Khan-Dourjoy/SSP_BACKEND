<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Planting_modes extends Controller
{
    
    public function planting_modes_list(){
        $query = DB::select("select * from planting_modes");
        return response()->json($query);
    }
}
		