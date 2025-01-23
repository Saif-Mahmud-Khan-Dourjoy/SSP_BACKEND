<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Request as Request;

class Jur_fd_beats extends Controller
{
    
    public function jur_fd_beats_list(){
        
        $query = DB::select("select * from jur_fd_beats ");
        return response()->json($query);
    }
}
		