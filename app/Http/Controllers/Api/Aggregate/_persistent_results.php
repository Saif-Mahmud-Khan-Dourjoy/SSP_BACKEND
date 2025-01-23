<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _persistent_results extends Controller
	{
		
		public function _persistent_results_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"REQUESTING_USER" => Request::input("requesting_user"),
"REQUEST_DATE" => Request::input("request_date"),
"REQUEST_PARAMETERS" => Request::input("request_parameters"),
"LAST_RETRY_DATE" => Request::input("last_retry_date"),
"ATTEMPT_COUNT" => Request::input("attempt_count"),
"STATUS" => Request::input("status"),
"RESULT_TYPE" => Request::input("result_type"),
"COMPLETION_DATE" => Request::input("completion_date"),
"FORM_ID_KEY" => Request::input("form_id_key"),
"URI_FILTER_GROUP" => Request::input("uri_filter_group"),

			);
			$insert_id = DB::table("_persistent_results")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _persistent_results_list(){
			$query = DB::select('select * from aggregate."_persistent_results"');
			return response()->json($query);
		}
	}
			