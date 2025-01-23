<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Aspects extends Controller
{
    
    public function aspects_list(){
        $query = DB::select("select * from aspects");
        return response()->json($query);
    }
}
		