<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Gpx_file_lists extends Controller
{
    
    public function gpx_file_lists_list(){
        $query = DB::select("select * from gpx_file_lists");
        return response()->json($query);
    }
}
		