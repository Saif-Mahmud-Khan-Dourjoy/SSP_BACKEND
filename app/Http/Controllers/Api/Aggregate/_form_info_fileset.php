<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _form_info_fileset extends Controller
	{
		
		public function _form_info_fileset_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"ROOT_ELEMENT_MODEL_VERSION" => Request::input("root_element_model_version"),
"IS_ENCRYPTED_FORM" => Request::input("is_encrypted_form"),
"IS_DOWNLOAD_ALLOWED" => Request::input("is_download_allowed"),
"LANGUAGE_CODE" => Request::input("language_code"),
"FORM_NAME" => Request::input("form_name"),
"DESCRIPTION" => Request::input("description"),
"DESCRIPTION_URL" => Request::input("description_url"),

			);
			$insert_id = DB::table("_form_info_fileset")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _form_info_fileset_list(){
			$query = DB::select('select * from aggregate."_form_info_fileset"');
			return response()->json($query);
		}
	}
			