<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Plant27_2021_gtrts_community_protection extends Controller
	{
		
		public function plant27_2021_gtrts_community_protection_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"GENERATED_NOTE_NAME_257" => Request::input("generated_note_name_257"),
"COMMUNITY_YEAR_RAW" => Request::input("community_year_raw"),
"COMMUNITY_YEAR" => Request::input("community_year"),

			);
			$insert_id = DB::table("PLANT27_2021_GTRTS_COMMUNITY_PROTECTION")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function plant27_2021_gtrts_community_protection_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_GTRTS_COMMUNITY_PROTECTION"');
			return response()->json($query);
		}
	}
			