<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Plant27_2021_rphotoextra extends Controller
	{
		
		public function plant27_2021_rphotoextra_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"PPICLOCATIONEXTRA_ALT" => Request::input("ppiclocationextra_alt"),
"XPIC_BEARING" => Request::input("xpic_bearing"),
"GENERATED_NOTE_NAME_65" => Request::input("generated_note_name_65"),
"PPICLOCATIONEXTRA_LNG" => Request::input("ppiclocationextra_lng"),
"PPICLOCATIONEXTRA_ACC" => Request::input("ppiclocationextra_acc"),
"PPICLOCATIONEXTRA_LAT" => Request::input("ppiclocationextra_lat"),

			);
			$insert_id = DB::table("PLANT27_2021_RPHOTOEXTRA")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function plant27_2021_rphotoextra_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_RPHOTOEXTRA"');
			return response()->json($query);
		}
	}
			