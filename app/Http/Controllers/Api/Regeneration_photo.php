<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Regeneration_photo extends Controller
{
    
    public function regeneration_photo_list(){
        $query = DB::select("select * from regeneration_photo");
        return response()->json($query);
    }
}
		