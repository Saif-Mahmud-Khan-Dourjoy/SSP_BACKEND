<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_xpictureextra_ref extends Controller
	{
		
		public function sufal192020_xpictureextra_ref_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_DOM_AURI" => Request::input("_dom_auri"),
"_SUB_AURI" => Request::input("_sub_auri"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"PART" => Request::input("part"),

			);
			$insert_id = DB::table("SUFAL192020_XPICTUREEXTRA_REF")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_xpictureextra_ref_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_XPICTUREEXTRA_REF"');
			return response()->json($query);
		}
	}
			