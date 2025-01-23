<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Team_invitations extends Controller
{
    
    public function team_invitations_list(){
        $query = DB::select("select * from team_invitations");
        return response()->json($query);
    }
}
		