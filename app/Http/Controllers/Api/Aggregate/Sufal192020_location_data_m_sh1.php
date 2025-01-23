<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_location_data_m_sh1 extends Controller
	{
		
		public function sufal192020_location_data_m_sh1_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"MOUZA_SHEET1_SHEETS_OTHERS_S_TYPES" => Request::input("mouza_sheet1_sheets_others_s_types"),
"MOUZA_SHEET1_SURVEY_TYPES" => Request::input("mouza_sheet1_survey_types"),
"MOUZA_SHEET1_SHEETS_MOUZA1" => Request::input("mouza_sheet1_sheets_mouza1"),
"MOUZA_SHEET1_SHEETS_SHEET1" => Request::input("mouza_sheet1_sheets_sheet1"),
"MOUZA_SHEET1_SHEETS_PLOT_NO" => Request::input("mouza_sheet1_sheets_plot_no"),

			);
			$insert_id = DB::table("SUFAL192020_LOCATION_DATA_M_SH1")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_location_data_m_sh1_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_LOCATION_DATA_M_SH1"');
			return response()->json($query);
		}
	}
			