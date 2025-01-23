<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Slopes extends Controller
{
    
    public function slopes_list(){
        $query = DB::select("select * from slopes");
        return response()->json($query);
    }
}
		