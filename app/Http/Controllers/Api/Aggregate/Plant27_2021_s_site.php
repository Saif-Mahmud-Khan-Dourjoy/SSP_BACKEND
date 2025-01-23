<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Plant27_2021_s_site extends Controller
	{
		
		public function plant27_2021_s_site_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"TRACE_GPX" => Request::input("trace_gpx"),
"POLYLINE" => Request::input("polyline"),
"TOTAREA_HA" => Request::input("totarea_ha"),
"TMAIN_POLYTYPE" => Request::input("tmain_polytype"),
"POLYTRACE" => Request::input("polytrace"),
"GENERATED_NOTE_NAME_54" => Request::input("generated_note_name_54"),
"TOTAREA_AC" => Request::input("totarea_ac"),

			);
			$insert_id = DB::table("PLANT27_2021_S_SITE")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function plant27_2021_s_site_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_S_SITE"');
			return response()->json($query);
		}
	}
			