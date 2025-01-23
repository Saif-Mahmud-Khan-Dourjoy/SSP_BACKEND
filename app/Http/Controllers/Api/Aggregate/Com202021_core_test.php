<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Com202021_core_test extends Controller
	{
		
		public function com202021_core_test_create(){
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
"LOCATION_DATA_TLOC_FD_BEAT_TXT" => Request::input("location_data_tloc_fd_beat_txt"),
"CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_MALE" => Request::input("consultation_attendence_picture_participants_male"),
"CONSULTATION_GENERATED_NOTE_NAME_11" => Request::input("consultation_generated_note_name_11"),
"CONSULTATION_USER_CELL" => Request::input("consultation_user_cell"),
"LOCATION_DATA_TLOC_FD_CHAR" => Request::input("location_data_tloc_fd_char"),
"CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_GENERATED_NOTE_NAME_47" => Request::input("consultation_issues_livelihoods_aigas_generated_note_name_47"),
"CONSULTATION_CONSULTATION_PLACE" => Request::input("consultation_consultation_place"),
"CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_HIGH_BIODIVERSITY" => Request::input("consltton_issues_biodiversity_consrvton_high_biodiversity"),
"CONSULTATION_DCONSULTATION" => Request::input("consultation_dconsultation"),
"LOCATION_DATA_TLOC_ENTER_DIV" => Request::input("location_data_tloc_enter_div"),
"LOCATION_DATA_GENERATED_NOTE_NAME_22" => Request::input("location_data_generated_note_name_22"),
"LOCATION_DATA_TLOC_FD_RANGE" => Request::input("location_data_tloc_fd_range"),
"END_RAW" => Request::input("end_raw"),
"LOCATION_DATA_GENERATED_NOTE_NAME_24" => Request::input("location_data_generated_note_name_24"),
"CONSULTATION_ISSUES_FOREST_RESTORATION_COMMUNITY_RESTORATION" => Request::input("consultation_issues_forest_restoration_community_restoration"),
"CONSULTATION_DCONSULTATION_START" => Request::input("consultation_dconsultation_start"),
"LOCATION_DATA_TLOC_FD_BEAT" => Request::input("location_data_tloc_fd_beat"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_8" => Request::input("social_environmental_impacts_sei_8"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_5" => Request::input("social_environmental_impacts_sei_5"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_6" => Request::input("social_environmental_impacts_sei_6"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_3" => Request::input("social_environmental_impacts_sei_3"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_4" => Request::input("social_environmental_impacts_sei_4"),
"SUBSCRIBERID" => Request::input("subscriberid"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_1" => Request::input("social_environmental_impacts_sei_1"),
"CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_CONSERVATION_ACTIVITIES" => Request::input("consultation_issues_livelihoods_aigas_conservation_activities"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_2" => Request::input("social_environmental_impacts_sei_2"),
"CONSULTATION_DCONSULTATION_END_RAW" => Request::input("consultation_dconsultation_end_raw"),
"LOCATION_DATA_TLOC_ECOZONE" => Request::input("location_data_tloc_ecozone"),
"CONSULTATION_ISSUES_FOREST_RESTORATION_GENERATED_NOTE_NAME_51" => Request::input("consultation_issues_forest_restoration_generated_note_name_51"),
"LOCATION_DATA_TLOC_FD_BLOCK" => Request::input("location_data_tloc_fd_block"),
"CONSULTATION_DCONSULTATION_END" => Request::input("consultation_dconsultation_end"),
"DEVICEID" => Request::input("deviceid"),
"LOCATION_DATA_TLOC_FD_DIVISION" => Request::input("location_data_tloc_fd_division"),
"CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_FEMALE" => Request::input("consultation_attendence_picture_participants_female"),
"END" => Request::input("end"),
"CONSULTATION_ATTENDENCE_PICTURE_GENERATED_NOTE_NAME_79" => Request::input("consultation_attendence_picture_generated_note_name_79"),
"PHONENUMBER" => Request::input("phonenumber"),
"CONSULTATION_THOC_UNION" => Request::input("consultation_thoc_union"),
"LOCATION_DATA_TLOC_ENTER_RANGE" => Request::input("location_data_tloc_enter_range"),
"START_RAW" => Request::input("start_raw"),
"CONSULTATION_USER_EMAIL" => Request::input("consultation_user_email"),
"META_INSTANCE_ID" => Request::input("meta_instance_id"),
"SIMSERIAL" => Request::input("simserial"),
"NOTES" => Request::input("notes"),
"CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_BIODIVERSITY_LOSS" => Request::input("consltton_issues_biodiversity_consrvton_biodiversity_loss"),
"CONSULTATION_DCONSULTATION_START_RAW" => Request::input("consultation_dconsultation_start_raw"),
"CONSULTATION_USER_NAME" => Request::input("consultation_user_name"),
"CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_RESTORED_BIO" => Request::input("consltton_issues_biodiversity_consrvton_restored_bio"),
"TODAY" => Request::input("today"),
"LOCATION_DATA_TLOC_FD_CIR" => Request::input("location_data_tloc_fd_cir"),
"START" => Request::input("start"),
"CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_GENERATED_NOTE_NAME_41" => Request::input("consltton_issues_biodiversity_consrvton_generated_note_name_41"),
"TODAY_RAW" => Request::input("today_raw"),
"SOCIAL_ENVIRONMENTAL_IMPACTS_GENERATED_NOTE_NAME_69" => Request::input("social_environmental_impacts_generated_note_name_69"),
"CONSULTATION_ISSUES_FOREST_RESTORATION_JOINT_EFFORT" => Request::input("consultation_issues_forest_restoration_joint_effort"),
"project_id" => Request::input("project_id"),
"sort" => Request::input("sort"),
"last_log_id" => Request::input("last_log_id"),
"restore_id" => Request::input("restore_id"),
"created_at" => Request::input("created_at"),
"created_by" => Request::input("created_by"),
"updated_at" => Request::input("updated_at"),
"updated_by" => Request::input("updated_by"),
"deleted_at" => Request::input("deleted_at"),
"deleted_by" => Request::input("deleted_by"),
"deleted_status" => Request::input("deleted_status"),
"status" => Request::input("status"),

			);
			$insert_id = DB::table("COM202021_CORE_TEST")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function com202021_core_test_list(){
			$query = DB::select('select * from aggregate."COM202021_CORE_TEST"');
			return response()->json($query);
		}
	}
			