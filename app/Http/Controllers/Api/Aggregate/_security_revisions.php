<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _security_revisions extends Controller
	{
		
		public function _security_revisions_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"LAST_REVISION" => Request::input("last_revision"),

			);
			$insert_id = DB::table("_security_revisions")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _security_revisions_list(){
			$query = DB::select('select * from aggregate."_security_revisions"');
			return response()->json($query);
		}
	}
			