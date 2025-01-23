<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Personal_access_tokens extends Controller
{
    
    public function personal_access_tokens_list(){
        $query = DB::select("select * from personal_access_tokens");
        return response()->json($query);
    }
}
		