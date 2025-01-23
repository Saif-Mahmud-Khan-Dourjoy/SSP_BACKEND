<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Com202021_consultation_photo extends Controller
	{
		
		public function com202021_consultation_photo_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"GENERATED_NOTE_NAME_36" => Request::input("generated_note_name_36"),

			);
			$insert_id = DB::table("COM202021_CONSULTATION_PHOTO")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function com202021_consultation_photo_list(){
			$query = DB::select('select * from aggregate."COM202021_CONSULTATION_PHOTO"');
			return response()->json($query);
		}
	}
			