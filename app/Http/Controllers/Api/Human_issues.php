<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Human_issues extends Controller
{
    
    public function human_issues_list(){
        $query = DB::select("select * from human_issues");
        return response()->json($query);
    }
}
		