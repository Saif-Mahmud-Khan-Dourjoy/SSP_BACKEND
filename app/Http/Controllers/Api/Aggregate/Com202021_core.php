<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
	use Illuminate\Http\Request;
	class Com202021_core extends Controller
	{
		
		public function com202021_core_create(Request $request){
			DB::EnableQueryLog();   
                $data = array(
                    "_URI" => !empty($request->post("_URI")) ? $request->post("_URI") : null ,
"_CREATOR_URI_USER" => !empty($request->post("_CREATOR_URI_USER")) ? $request->post("_CREATOR_URI_USER") : null ,
"_CREATION_DATE" => !empty($request->post("_CREATION_DATE")) ? $request->post("_CREATION_DATE") : null ,
"_LAST_UPDATE_URI_USER" => !empty($request->post("_LAST_UPDATE_URI_USER")) ? $request->post("_LAST_UPDATE_URI_USER") : null ,
"_LAST_UPDATE_DATE" => !empty($request->post("_LAST_UPDATE_DATE")) ? $request->post("_LAST_UPDATE_DATE") : null ,
// "_MODEL_VERSION" => !empty($request->post("_MODEL_VERSION")) ? $request->post("_MODEL_VERSION") : null ,
// "_UI_VERSION" => !empty($request->post("_UI_VERSION")) ? $request->post("_UI_VERSION") : null ,
// "_IS_COMPLETE" => !empty($request->post("_IS_COMPLETE")) ? $request->post("_IS_COMPLETE") : null ,
// "_SUBMISSION_DATE" => !empty($request->post("_SUBMISSION_DATE")) ? $request->post("_SUBMISSION_DATE") : null ,
// "_MARKED_AS_COMPLETE_DATE" => !empty($request->post("_MARKED_AS_COMPLETE_DATE")) ? $request->post("_MARKED_AS_COMPLETE_DATE") : null ,
// "LOCATION_DATA_TLOC_FD_BEAT_TXT" => !empty($request->post("LOCATION_DATA_TLOC_FD_BEAT_TXT")) ? $request->post("LOCATION_DATA_TLOC_FD_BEAT_TXT") : null ,
 "CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_MALE" => !empty($request->post("CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_MALE")) ? $request->post("CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_MALE") : null ,
// "CONSULTATION_GENERATED_NOTE_NAME_11" => !empty($request->post("CONSULTATION_GENERATED_NOTE_NAME_11")) ? $request->post("CONSULTATION_GENERATED_NOTE_NAME_11") : null ,
 "CONSULTATION_USER_CELL" => !empty($request->post("CONSULTATION_USER_CELL")) ? $request->post("CONSULTATION_USER_CELL") : null ,
 "LOCATION_DATA_TLOC_FD_CHAR" => !empty($request->post("LOCATION_DATA_TLOC_FD_CHAR")) ? $request->post("LOCATION_DATA_TLOC_FD_CHAR") : null ,
// "CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_GENERATED_NOTE_NAME_47" => !empty($request->post("CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_GENERATED_NOTE_NAME_47")) ? $request->post("CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_GENERATED_NOTE_NAME_47") : null ,
 "CONSULTATION_CONSULTATION_PLACE" => !empty($request->post("CONSULTATION_CONSULTATION_PLACE")) ? $request->post("CONSULTATION_CONSULTATION_PLACE") : null ,
 "CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_HIGH_BIODIVERSITY" => !empty($request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_HIGH_BIODIVERSITY")) ? $request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_HIGH_BIODIVERSITY") : null ,
// "CONSULTATION_DCONSULTATION" => !empty($request->post("CONSULTATION_DCONSULTATION")) ? $request->post("CONSULTATION_DCONSULTATION") : null ,
// "LOCATION_DATA_TLOC_ENTER_DIV" => !empty($request->post("LOCATION_DATA_TLOC_ENTER_DIV")) ? $request->post("LOCATION_DATA_TLOC_ENTER_DIV") : null ,
// "LOCATION_DATA_GENERATED_NOTE_NAME_22" => !empty($request->post("LOCATION_DATA_GENERATED_NOTE_NAME_22")) ? $request->post("LOCATION_DATA_GENERATED_NOTE_NAME_22") : null ,
"LOCATION_DATA_TLOC_FD_RANGE" => !empty($request->post("LOCATION_DATA_TLOC_FD_RANGE")) ? $request->post("LOCATION_DATA_TLOC_FD_RANGE") : null ,
// "END_RAW" => !empty($request->post("END_RAW")) ? $request->post("END_RAW") : null ,
// "LOCATION_DATA_GENERATED_NOTE_NAME_24" => !empty($request->post("LOCATION_DATA_GENERATED_NOTE_NAME_24")) ? $request->post("LOCATION_DATA_GENERATED_NOTE_NAME_24") : null ,
 "CONSULTATION_ISSUES_FOREST_RESTORATION_COMMUNITY_RESTORATION" => !empty($request->post("CONSULTATION_ISSUES_FOREST_RESTORATION_COMMUNITY_RESTORATION")) ? $request->post("CONSULTATION_ISSUES_FOREST_RESTORATION_COMMUNITY_RESTORATION") : null ,
// "CONSULTATION_DCONSULTATION_START" => !empty($request->post("CONSULTATION_DCONSULTATION_START")) ? $request->post("CONSULTATION_DCONSULTATION_START") : null ,
 "LOCATION_DATA_TLOC_FD_BEAT" => !empty($request->post("LOCATION_DATA_TLOC_FD_BEAT")) ? $request->post("LOCATION_DATA_TLOC_FD_BEAT") : null ,
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_8" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_8")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_8") : null ,
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_5" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_5")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_5") : null ,
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_6" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_6")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_6") : null ,
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_3" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_3")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_3") : null ,
"SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_4" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_4")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_4") : null ,
// "SUBSCRIBERID" => !empty($request->post("SUBSCRIBERID")) ? $request->post("SUBSCRIBERID") : null ,
 "SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_1" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_1")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_1") : null ,
 "CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_CONSERVATION_ACTIVITIES" => !empty($request->post("CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_CONSERVATION_ACTIVITIES")) ? $request->post("CONSULTATION_ISSUES_LIVELIHOODS_AIGAS_CONSERVATION_ACTIVITIES") : null ,
 "SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_2" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_2")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_SEI_2") : null ,
// "CONSULTATION_DCONSULTATION_END_RAW" => !empty($request->post("CONSULTATION_DCONSULTATION_END_RAW")) ? $request->post("CONSULTATION_DCONSULTATION_END_RAW") : null ,
 "LOCATION_DATA_TLOC_ECOZONE" => !empty($request->post("LOCATION_DATA_TLOC_ECOZONE")) ? $request->post("LOCATION_DATA_TLOC_ECOZONE") : null ,
// "CONSULTATION_ISSUES_FOREST_RESTORATION_GENERATED_NOTE_NAME_51" => !empty($request->post("CONSULTATION_ISSUES_FOREST_RESTORATION_GENERATED_NOTE_NAME_51")) ? $request->post("CONSULTATION_ISSUES_FOREST_RESTORATION_GENERATED_NOTE_NAME_51") : null ,
 "LOCATION_DATA_TLOC_FD_BLOCK" => !empty($request->post("LOCATION_DATA_TLOC_FD_BLOCK")) ? $request->post("LOCATION_DATA_TLOC_FD_BLOCK") : null ,
// "CONSULTATION_DCONSULTATION_END" => !empty($request->post("CONSULTATION_DCONSULTATION_END")) ? $request->post("CONSULTATION_DCONSULTATION_END") : null ,
// "DEVICEID" => !empty($request->post("DEVICEID")) ? $request->post("DEVICEID") : null ,
 "LOCATION_DATA_TLOC_FD_DIVISION" => !empty($request->post("LOCATION_DATA_TLOC_FD_DIVISION")) ? $request->post("LOCATION_DATA_TLOC_FD_DIVISION") : null ,
 "CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_FEMALE" => !empty($request->post("CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_FEMALE")) ? $request->post("CONSULTATION_ATTENDENCE_PICTURE_PARTICIPANTS_FEMALE") : null ,
// "END" => !empty($request->post("END")) ? $request->post("END") : null ,
// "CONSULTATION_ATTENDENCE_PICTURE_GENERATED_NOTE_NAME_79" => !empty($request->post("CONSULTATION_ATTENDENCE_PICTURE_GENERATED_NOTE_NAME_79")) ? $request->post("CONSULTATION_ATTENDENCE_PICTURE_GENERATED_NOTE_NAME_79") : null ,
// "PHONENUMBER" => !empty($request->post("PHONENUMBER")) ? $request->post("PHONENUMBER") : null ,
 "CONSULTATION_THOC_UNION" => !empty($request->post("CONSULTATION_THOC_UNION")) ? $request->post("CONSULTATION_THOC_UNION") : null ,
// "LOCATION_DATA_TLOC_ENTER_RANGE" => !empty($request->post("LOCATION_DATA_TLOC_ENTER_RANGE")) ? $request->post("LOCATION_DATA_TLOC_ENTER_RANGE") : null ,
// "START_RAW" => !empty($request->post("START_RAW")) ? $request->post("START_RAW") : null ,
 "CONSULTATION_USER_EMAIL" => !empty($request->post("CONSULTATION_USER_EMAIL")) ? $request->post("CONSULTATION_USER_EMAIL") : null ,
// "META_INSTANCE_ID" => !empty($request->post("META_INSTANCE_ID")) ? $request->post("META_INSTANCE_ID") : null ,
// "SIMSERIAL" => !empty($request->post("SIMSERIAL")) ? $request->post("SIMSERIAL") : null ,
// "NOTES" => !empty($request->post("NOTES")) ? $request->post("NOTES") : null ,
 "CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_BIODIVERSITY_LOSS" => !empty($request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_BIODIVERSITY_LOSS")) ? $request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_BIODIVERSITY_LOSS") : null ,
// "CONSULTATION_DCONSULTATION_START_RAW" => !empty($request->post("CONSULTATION_DCONSULTATION_START_RAW")) ? $request->post("CONSULTATION_DCONSULTATION_START_RAW") : null ,
 "CONSULTATION_USER_NAME" => !empty($request->post("CONSULTATION_USER_NAME")) ? $request->post("CONSULTATION_USER_NAME") : null ,
 "CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_RESTORED_BIO" => !empty($request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_RESTORED_BIO")) ? $request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_RESTORED_BIO") : null ,
// "TODAY" => !empty($request->post("TODAY")) ? $request->post("TODAY") : null ,
 "LOCATION_DATA_TLOC_FD_CIR" => !empty($request->post("LOCATION_DATA_TLOC_FD_CIR")) ? $request->post("LOCATION_DATA_TLOC_FD_CIR") : null ,
// "START" => !empty($request->post("START")) ? $request->post("START") : null ,
// "CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_GENERATED_NOTE_NAME_41" => !empty($request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_GENERATED_NOTE_NAME_41")) ? $request->post("CONSLTTON_ISSUES_BIODIVERSITY_CONSRVTON_GENERATED_NOTE_NAME_41") : null ,
// "TODAY_RAW" => !empty($request->post("TODAY_RAW")) ? $request->post("TODAY_RAW") : null ,
// "SOCIAL_ENVIRONMENTAL_IMPACTS_GENERATED_NOTE_NAME_69" => !empty($request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_GENERATED_NOTE_NAME_69")) ? $request->post("SOCIAL_ENVIRONMENTAL_IMPACTS_GENERATED_NOTE_NAME_69") : null ,
 "CONSULTATION_ISSUES_FOREST_RESTORATION_JOINT_EFFORT" => !empty($request->post("CONSULTATION_ISSUES_FOREST_RESTORATION_JOINT_EFFORT")) ? $request->post("CONSULTATION_ISSUES_FOREST_RESTORATION_JOINT_EFFORT") : null ,
// "project_id" => !empty($request->post("project_id")) ? $request->post("project_id") : null ,
// "sort" => !empty($request->post("sort")) ? $request->post("sort") : null ,
// "last_log_id" => !empty($request->post("last_log_id")) ? $request->post("last_log_id") : null ,
// "restore_id" => !empty($request->post("restore_id")) ? $request->post("restore_id") : null ,
 "created_at" => !empty($request->post("created_at")) ? $request->post("created_at") : null ,
 "created_by" => !empty($request->post("created_by")) ? $request->post("created_by") : null ,
"updated_at" => !empty($request->post("updated_at")) ? $request->post("updated_at") : null ,
"updated_by" => !empty($request->post("updated_by")) ? $request->post("updated_by") : null ,
// "deleted_at" => !empty($request->post("deleted_at")) ? $request->post("deleted_at") : null ,
// "deleted_by" => !empty($request->post("deleted_by")) ? $request->post("deleted_by") : null ,
// "deleted_status" => !empty($request->post("deleted_status")) ? $request->post("deleted_status") : null ,
// "status" => !empty($request->post("status")) ? $request->post("status") : null ,

                );
                $insert_id = DB::table("aggregate.COM202021_CORE")->insert($data);
				$q=DB::GetQueryLog();
                return response()->json($q);
            }

		public function com202021_core_list(){
			$query = DB::select('select * from aggregate."COM202021_CORE"');
			return response()->json($query);
		}
	}
			