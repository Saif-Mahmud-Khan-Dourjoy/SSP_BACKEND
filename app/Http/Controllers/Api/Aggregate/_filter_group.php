<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _filter_group extends Controller
	{
		
		public function _filter_group_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"FORM_ID" => Request::input("form_id"),
"NAME" => Request::input("name"),
"URI_USER" => Request::input("uri_user"),
"IS_PUBLIC" => Request::input("is_public"),
"INCLUDE_METADATA" => Request::input("include_metadata"),

			);
			$insert_id = DB::table("_filter_group")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _filter_group_list(){
			$query = DB::select('select * from aggregate."_filter_group"');
			return response()->json($query);
		}
	}
			