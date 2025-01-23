<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Structures extends Controller
{
    
    public function structures_list(){
        $query = DB::select("select * from structures");
        return response()->json($query);
    }
}
		