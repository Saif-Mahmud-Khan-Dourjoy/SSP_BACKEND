<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _task_lock extends Controller
	{
		
		public function _task_lock_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"FORM_ID" => Request::input("form_id"),
"TASK_TYPE" => Request::input("task_type"),
"EXPIRATION_DATETIME" => Request::input("expiration_datetime"),

			);
			$insert_id = DB::table("_task_lock")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _task_lock_list(){
			$query = DB::select('select * from aggregate."_task_lock"');
			return response()->json($query);
		}
	}
			