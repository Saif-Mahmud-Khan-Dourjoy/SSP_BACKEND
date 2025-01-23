<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Canopycover_lists extends Controller
{
    
    public function canopycover_lists_list(){
        $query = DB::select("select * from canopycover_lists");
        return response()->json($query);
    }
}
		