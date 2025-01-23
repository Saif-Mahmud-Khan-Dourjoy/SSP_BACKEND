<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Dis_nurserys extends Controller
{
    
    public function dis_nurserys_list(){
        $query = DB::select("select * from dis_nurserys");
        return response()->json($query);
    }
}
		