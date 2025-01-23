<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Plantation_journals extends Controller
{
    
    public function plantation_journals_list(){
        $query = DB::select("select * from plantation_journals");
        return response()->json($query);
    }
}
		