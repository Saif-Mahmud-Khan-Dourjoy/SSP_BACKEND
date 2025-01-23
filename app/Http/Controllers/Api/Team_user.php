<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Team_user extends Controller
{
    
    public function team_user_list(){
        $query = DB::select("select * from team_user");
        return response()->json($query);
    }
}
		