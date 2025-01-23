<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Project_lists_audit extends Controller
{
    
    public function project_lists_audit_list(){
        $query = DB::select("select * from project_lists_audit");
        return response()->json($query);
    }
}
		