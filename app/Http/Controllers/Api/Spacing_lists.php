<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Spacing_lists extends Controller
{
    
    public function spacing_lists_list(){
        $query = DB::select("select * from spacing_lists");
        return response()->json($query);
    }
}
		