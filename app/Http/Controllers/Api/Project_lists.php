<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Project_lists extends Controller
{
    
    public function project_lists_list(){
        $query = DB::select("select * from project_lists");
        return response()->json($query);
    }
}
		