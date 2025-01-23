<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Natural_issues extends Controller
{
    
    public function natural_issues_list(){
        $query = DB::select("select * from natural_issues");
        return response()->json($query);
    }
}
		