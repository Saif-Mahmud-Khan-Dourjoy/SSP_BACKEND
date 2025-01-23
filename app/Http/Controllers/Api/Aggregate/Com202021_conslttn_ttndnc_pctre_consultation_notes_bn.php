<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Com202021_conslttn_ttndnc_pctre_consultation_notes_bn extends Controller
	{
		
		public function com202021_conslttn_ttndnc_pctre_consultation_notes_bn_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"UNROOTED_FILE_PATH" => Request::input("unrooted_file_path"),
"CONTENT_TYPE" => Request::input("content_type"),
"CONTENT_LENGTH" => Request::input("content_length"),
"CONTENT_HASH" => Request::input("content_hash"),

			);
			$insert_id = DB::table("COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_NOTES_BN")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function com202021_conslttn_ttndnc_pctre_consultation_notes_bn_list(){
			$query = DB::select('select * from aggregate."COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_NOTES_BN"');
			return response()->json($query);
		}
	}
			