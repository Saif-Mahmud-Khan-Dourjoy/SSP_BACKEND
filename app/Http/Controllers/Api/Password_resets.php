<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Password_resets extends Controller
{
    
    public function password_resets_list(){
        $query = DB::select("select * from password_resets");
        return response()->json($query);
    }
}
		