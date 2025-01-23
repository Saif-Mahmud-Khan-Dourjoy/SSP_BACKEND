<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _granted_authority_hierarchy extends Controller
	{
		
		public function _granted_authority_hierarchy_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"DOMINATING_GRANTED_AUTHORITY" => Request::input("dominating_granted_authority"),
"SUBORDINATE_GRANTED_AUTHORITY" => Request::input("subordinate_granted_authority"),

			);
			$insert_id = DB::table("_granted_authority_hierarchy")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _granted_authority_hierarchy_list(){
			$query = DB::select('select * from aggregate."_granted_authority_hierarchy"');
			return response()->json($query);
		}
	}
			