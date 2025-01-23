<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Roles extends Controller
{
    
    public function roles_list(){
        $query = DB::select("select * from roles");
        return response()->json($query);
    }
}
		