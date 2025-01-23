<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _form_info_submission_association extends Controller
	{
		
		public function _form_info_submission_association_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"URI_MD5_SUBMISSION_FORM_ID" => Request::input("uri_md5_submission_form_id"),
"URI_MD5_FORM_ID" => Request::input("uri_md5_form_id"),
"SUBMISSION_FORM_ID" => Request::input("submission_form_id"),
"IS_PERSISTENCE_MODEL_COMPLETE" => Request::input("is_persistence_model_complete"),
"IS_SUBMISSION_ALLOWED" => Request::input("is_submission_allowed"),
"URI_SUBMISSION_DATA_MODEL" => Request::input("uri_submission_data_model"),

			);
			$insert_id = DB::table("_form_info_submission_association")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _form_info_submission_association_list(){
			$query = DB::select('select * from aggregate."_form_info_submission_association"');
			return response()->json($query);
		}
	}
			