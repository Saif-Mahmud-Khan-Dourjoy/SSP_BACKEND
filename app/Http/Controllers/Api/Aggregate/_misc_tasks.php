<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _misc_tasks extends Controller
	{
		
		public function _misc_tasks_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"FORM_ID" => Request::input("form_id"),
"REQUESTING_USER" => Request::input("requesting_user"),
"REQUEST_DATE" => Request::input("request_date"),
"REQUEST_PARAMETERS" => Request::input("request_parameters"),
"LAST_ACTIVITY_DATE" => Request::input("last_activity_date"),
"ATTEMPT_COUNT" => Request::input("attempt_count"),
"STATUS" => Request::input("status"),
"TASK_TYPE" => Request::input("task_type"),
"COMPLETION_DATE" => Request::input("completion_date"),

			);
			$insert_id = DB::table("_misc_tasks")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _misc_tasks_list(){
			$query = DB::select('select * from aggregate."_misc_tasks"');
			return response()->json($query);
		}
	}
			