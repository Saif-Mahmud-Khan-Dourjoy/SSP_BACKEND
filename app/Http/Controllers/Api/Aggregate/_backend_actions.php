<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _backend_actions extends Controller
	{
		
		public function _backend_actions_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"LAST_REVISION" => Request::input("last_revision"),

			);
			$insert_id = DB::table("_backend_actions")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _backend_actions_list(){
			$query = DB::select('select * from aggregate."_backend_actions"');
			return response()->json($query);
		}
	}
			