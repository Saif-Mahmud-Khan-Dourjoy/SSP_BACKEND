<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _server_preferences_properties extends Controller
	{
		
		public function _server_preferences_properties_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"KEY" => Request::input("key"),
"VALUE" => Request::input("value"),

			);
			$insert_id = DB::table("_server_preferences_properties")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _server_preferences_properties_list(){
			$query = DB::select('select * from aggregate."_server_preferences_properties"');
			return response()->json($query);
		}
	}
			