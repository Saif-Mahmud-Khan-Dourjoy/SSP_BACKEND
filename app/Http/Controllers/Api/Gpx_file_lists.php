<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Gpx_file_lists extends Controller
{

    public function gpx_file_lists_create(Request $request)
    {
        DB::EnableQueryLog();
        $data = array(
            "title" => !empty($request->post("title")) ? $request->post("title") : null,
            "beat_code" => !empty($request->post("beat_code")) ? $request->post("beat_code") : null,
            "core_uri" => !empty($request->post("core_uri")) ? $request->post("core_uri") : null,
            "ssp_uri" => !empty($request->post("ssp_uri")) ? $request->post("ssp_uri") : null,
            "file_name" => !empty($request->post("file_name")) ? $request->post("file_name") : null,
            "file_path" => !empty($request->post("file_path")) ? $request->post("file_path") : null,
            "loc" => !empty($request->post("loc")) ? $request->post("loc") : null,
            "sort" => !empty($request->post("sort")) ? $request->post("sort") : null,
            "created_at" => !empty($request->post("created_at")) ? $request->post("created_at") : null,
            "created_by" => !empty($request->post("created_by")) ? $request->post("created_by") : null,
            "updated_at" => !empty($request->post("updated_at")) ? $request->post("updated_at") : null,
            "updated_by" => !empty($request->post("updated_by")) ? $request->post("updated_by") : null,
            "status" => !empty($request->post("status")) ? $request->post("status") : null,

        );
        $response = DB::table("gpx_file_lists")->insert($data);
        $q = DB::GetQueryLog();
        return response()->json($response);
    }
    
    public function gpx_file_lists_list(){
        $query = DB::select("select * from gpx_file_lists");
        return response()->json($query);
    }
}
		