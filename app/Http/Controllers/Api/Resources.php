<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Resources extends Controller
{
    
    public function resources_list(){
        $query = DB::select("select * from resources");
        return response()->json($query);
    }
}
		