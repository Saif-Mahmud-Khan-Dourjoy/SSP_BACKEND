<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Percents extends Controller
{
    
    public function percents_list(){
        $query = DB::select("select * from percents");
        return response()->json($query);
    }
}
		