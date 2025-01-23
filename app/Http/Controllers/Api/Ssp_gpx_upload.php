<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Ssp_gpx_upload extends Controller
{
    
    public function ssp_gpx_upload_list(){
        $query = DB::select("select * from ssp_gpx_upload");
        return response()->json($query);
    }
}
		