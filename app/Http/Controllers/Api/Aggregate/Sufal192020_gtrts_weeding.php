<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_gtrts_weeding extends Controller
	{
		
		public function sufal192020_gtrts_weeding_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"WEEDING_CYCLE" => Request::input("weeding_cycle"),
"WEEDING_YEAR" => Request::input("weeding_year"),
"WEEDING_YEAR_RAW" => Request::input("weeding_year_raw"),

			);
			$insert_id = DB::table("SUFAL192020_GTRTS_WEEDING")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_gtrts_weeding_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_GTRTS_WEEDING"');
			return response()->json($query);
		}
	}
			