<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _user_granted_authority extends Controller
	{
		
		public function _user_granted_authority_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"USER" => Request::input("user"),
"GRANTED_AUTHORITY" => Request::input("granted_authority"),

			);
			$insert_id = DB::table("_user_granted_authority")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _user_granted_authority_list(){
			$query = DB::select('select * from aggregate."_user_granted_authority"');
			return response()->json($query);
		}
	}
			