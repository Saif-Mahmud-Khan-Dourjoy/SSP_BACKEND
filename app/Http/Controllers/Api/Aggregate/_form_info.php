<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _form_info extends Controller
	{
		
		public function _form_info_create(){
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
"FORM_ID" => Request::input("form_id"),

			);
			$insert_id = DB::table("_form_info")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _form_info_list(){
			$query = DB::select('select * from aggregate."_form_info"');
			return response()->json($query);
		}
	}
			