<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _form_data_model extends Controller
	{
		
		public function _form_data_model_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"URI_SUBMISSION_DATA_MODEL" => Request::input("uri_submission_data_model"),
"PARENT_URI_FORM_DATA_MODEL" => Request::input("parent_uri_form_data_model"),
"ORDINAL_NUMBER" => Request::input("ordinal_number"),
"ELEMENT_TYPE" => Request::input("element_type"),
"ELEMENT_NAME" => Request::input("element_name"),
"PERSIST_AS_COLUMN_NAME" => Request::input("persist_as_column_name"),
"PERSIST_AS_TABLE_NAME" => Request::input("persist_as_table_name"),
"PERSIST_AS_SCHEMA_NAME" => Request::input("persist_as_schema_name"),

			);
			$insert_id = DB::table("_form_data_model")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _form_data_model_list(){
			$query = DB::select('select * from aggregate."_form_data_model"');
			return response()->json($query);
		}
	}
			