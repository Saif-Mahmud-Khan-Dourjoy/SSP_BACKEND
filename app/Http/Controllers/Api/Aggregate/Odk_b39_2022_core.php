<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Odk_b39_2022_core extends Controller
	{
		
		public function odk_b39_2022_core_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_MODEL_VERSION" => Request::input("_model_version"),
"_UI_VERSION" => Request::input("_ui_version"),
"_IS_COMPLETE" => Request::input("_is_complete"),
"_SUBMISSION_DATE" => Request::input("_submission_date"),
"_MARKED_AS_COMPLETE_DATE" => Request::input("_marked_as_complete_date"),
"PHONENUMBER" => Request::input("phonenumber"),
"GUSER_USER_CELL" => Request::input("guser_user_cell"),
"TODAY" => Request::input("today"),
"GUSER_TLOC_ENTER_RANGE" => Request::input("guser_tloc_enter_range"),
"START_RAW" => Request::input("start_raw"),
"SUBSCRIBERID" => Request::input("subscriberid"),
"GUSER_DCOLLECTION" => Request::input("guser_dcollection"),
"GUSER_TLOC_FD_DIVISION" => Request::input("guser_tloc_fd_division"),
"GUSER_TLOC_FD_RANGE" => Request::input("guser_tloc_fd_range"),
"GUSER_USER" => Request::input("guser_user"),
"GUSER_TLOC_FD_BEAT" => Request::input("guser_tloc_fd_beat"),
"META_INSTANCE_ID" => Request::input("meta_instance_id"),
"GUSER_DESIGNATION" => Request::input("guser_designation"),
"SIMSERIAL" => Request::input("simserial"),
"GUSER_DCOLLECTION_RAW" => Request::input("guser_dcollection_raw"),
"DEVICEID" => Request::input("deviceid"),
"END_RAW" => Request::input("end_raw"),
"GUSER_TLOC_FD_BEAT_TXT" => Request::input("guser_tloc_fd_beat_txt"),
"GUSER_GENERATED_NOTE_NAME_10" => Request::input("guser_generated_note_name_10"),
"START" => Request::input("start"),
"END" => Request::input("end"),
"GUSER_TLOC_ECOZONE" => Request::input("guser_tloc_ecozone"),
"TODAY_RAW" => Request::input("today_raw"),
"GUSER_TLOC_FD_CIR" => Request::input("guser_tloc_fd_cir"),

			);
			$insert_id = DB::table("ODK_B39_2022_CORE")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function odk_b39_2022_core_list(){
			$query = DB::select('select * from aggregate."ODK_B39_2022_CORE"');
			return response()->json($query);
		}
	}
			