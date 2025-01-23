<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _persistent_result_file_blb extends Controller
	{
		
		public function _persistent_result_file_blb_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"VALUE" => Request::input("value"),

			);
			$insert_id = DB::table("_persistent_result_file_blb")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _persistent_result_file_blb_list(){
			$query = DB::select('select * from aggregate."_persistent_result_file_blb"');
			return response()->json($query);
		}
	}
			