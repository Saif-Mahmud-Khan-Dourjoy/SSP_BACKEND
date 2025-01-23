<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Treesperha_lists extends Controller
{
    
    public function treesperha_lists_list(){
        $query = DB::select("select * from treesperha_lists");
        return response()->json($query);
    }
}
		