<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal_13_2021_core extends Controller
	{
		
		public function sufal_13_2021_core_create(){
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
"FOREST_AD_TLOC_FD_DIVISION" => Request::input("forest_ad_tloc_fd_division"),
"FOREST_AD_TLOC_PLANT_TYPE" => Request::input("forest_ad_tloc_plant_type"),
"FOREST_AD_TLOC_PLANT_YEAR" => Request::input("forest_ad_tloc_plant_year"),
"REG_AVG_SEEDLING_ALL_PLOTS" => Request::input("reg_avg_seedling_all_plots"),
"PHONENUMBER" => Request::input("phonenumber"),
"FOREST_AD_TLOC_FD_BEAT" => Request::input("forest_ad_tloc_fd_beat"),
"FOREST_AD_TLOC_FD_CIR" => Request::input("forest_ad_tloc_fd_cir"),
"START_RAW" => Request::input("start_raw"),
"REGIN_NOTE_GENERATED_NOTE_NAME_62" => Request::input("regin_note_generated_note_name_62"),
"REGIN_NOTE_GENERATED_NOTE_NAME_63" => Request::input("regin_note_generated_note_name_63"),
"REGIN_NOTE_GENERATED_NOTE_NAME_64" => Request::input("regin_note_generated_note_name_64"),
"CHECKED" => Request::input("checked"),
"FOREST_AD_TLOC_ENTER_DIV" => Request::input("forest_ad_tloc_enter_div"),
"REGIN_NOTE_GENERATED_NOTE_NAME_65" => Request::input("regin_note_generated_note_name_65"),
"REGIN_NOTE_GENERATED_NOTE_NAME_66" => Request::input("regin_note_generated_note_name_66"),
"REGIN_NOTE_GENERATED_NOTE_NAME_67" => Request::input("regin_note_generated_note_name_67"),
"META_INSTANCE_ID" => Request::input("meta_instance_id"),
"SIMSERIAL" => Request::input("simserial"),
"END_RAW" => Request::input("end_raw"),
"CHECKED_BY" => Request::input("checked_by"),
"TODAY" => Request::input("today"),
"REG_AVG_SEEDLING_PER_HA_ALL_PLOTS" => Request::input("reg_avg_seedling_per_ha_all_plots"),
"SUBSCRIBERID" => Request::input("subscriberid"),
"FOREST_AD_TLOC_FD_BEAT_TXT" => Request::input("forest_ad_tloc_fd_beat_txt"),
"FOREST_AD_TLOC_FD_RANGE" => Request::input("forest_ad_tloc_fd_range"),
"REG_PLOT_NO" => Request::input("reg_plot_no"),
"DEVICEID" => Request::input("deviceid"),
"FOREST_AD_GENERATED_NOTE_NAME_13" => Request::input("forest_ad_generated_note_name_13"),
"FOREST_AD_TLOC_ENTER_RANGE" => Request::input("forest_ad_tloc_enter_range"),
"FOREST_AD_TLOC_FD_RANGE_TXT" => Request::input("forest_ad_tloc_fd_range_txt"),
"REG_AVG_TREES_PER_HA_ALL_PLOTS" => Request::input("reg_avg_trees_per_ha_all_plots"),
"START" => Request::input("start"),
"END" => Request::input("end"),
"REG_AVG_TREES_ALL_PLOTS" => Request::input("reg_avg_trees_all_plots"),
"TODAY_RAW" => Request::input("today_raw"),
"APPROVED" => Request::input("approved"),
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
			$insert_id = DB::table("SUFAL_13_2021_CORE")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal_13_2021_core_list(){
			$query = DB::select('select * from aggregate."SUFAL_13_2021_CORE"');
			return response()->json($query);
		}
	}
			