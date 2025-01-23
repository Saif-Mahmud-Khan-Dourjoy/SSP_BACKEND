<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _form_service_cursor_2 extends Controller
	{
		
		public function _form_service_cursor_2_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"URI_MD5_FORM_ID" => Request::input("uri_md5_form_id"),
"AURI_SERVICE" => Request::input("auri_service"),
"EXT_SERVICE_TYPE" => Request::input("ext_service_type"),
"EXTERNAL_SERVICE_OPTION" => Request::input("external_service_option"),
"IS_EXTERNAL_SERVICE_PREPARED" => Request::input("is_external_service_prepared"),
"OPERATIONAL_STATUS" => Request::input("operational_status"),
"RETRY_STATUS" => Request::input("retry_status"),
"ESTABLISHMENT_DATETIME" => Request::input("establishment_datetime"),
"UPLOAD_COMPLETED" => Request::input("upload_completed"),
"LAST_UPLOAD_PERSISTENCE_CURSOR" => Request::input("last_upload_persistence_cursor"),
"LAST_UPLOAD_KEY" => Request::input("last_upload_key"),
"LAST_STREAMING_PERSISTENCE_CURSOR" => Request::input("last_streaming_persistence_cursor"),
"LAST_STREAMING_KEY" => Request::input("last_streaming_key"),
"FORM_ID" => Request::input("form_id"),

			);
			$insert_id = DB::table("_form_service_cursor_2")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _form_service_cursor_2_list(){
			$query = DB::select('select * from aggregate."_form_service_cursor_2"');
			return response()->json($query);
		}
	}
			