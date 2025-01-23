<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Plant27_2021_location_data_m_sh1 extends Controller
	{
		
		public function plant27_2021_location_data_m_sh1_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
				"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
				"_CREATION_DATE" => Request::input("_creation_date"),
				"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
				"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
				"_PARENT_AURI" => Request::input("_parent_auri"),
				"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
				"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
				"MOUZA1" => Request::input("mouza1"),
				"GENERATED_NOTE_NAME_45" => Request::input("generated_note_name_45"),
				"SURVEY_TYPES" => Request::input("survey_types"),
				"OTHERS_S_TYPES" => Request::input("others_s_types"),
				"SHEET1" => Request::input("sheet1"),
				"PLOT_NO" => Request::input("plot_no"),

			);
			$insert_id = DB::table("PLANT27_2021_LOCATION_DATA_M_SH1")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function plant27_2021_location_data_m_sh1_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_LOCATION_DATA_M_SH1"');
			return response()->json($query);
		}
	}
			