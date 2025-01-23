<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Occupation_coms extends Controller
{
    
    public function occupation_coms_list(){
        $query = DB::select("select * from occupation_coms");
        return response()->json($query);
    }
}
		