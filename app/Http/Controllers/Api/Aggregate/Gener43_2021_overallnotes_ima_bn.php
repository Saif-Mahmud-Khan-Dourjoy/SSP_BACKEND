<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Gener43_2021_overallnotes_ima_bn extends Controller
	{
		
		public function gener43_2021_overallnotes_ima_bn_create(){
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
			$insert_id = DB::table("GENER43_2021_OVERALLNOTES_IMA_BN")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function gener43_2021_overallnotes_ima_bn_list(){
			$query = DB::select('select * from aggregate."GENER43_2021_OVERALLNOTES_IMA_BN"');
			//$sql = 'select "_URI" , "_CREATOR_URI_USER" , "_CREATION_DATE" , "_LAST_UPDATE_URI_USER" , "_LAST_UPDATE_DATE" , "_PARENT_AURI" , "_ORDINAL_NUMBER" , "_TOP_LEVEL_AURI" , "UNROOTED_FILE_PATH" , "CONTENT_TYPE" , "CONTENT_LENGTH" , "CONTENT_HASH" from aggregate."GENER43_2021_OVERALLNOTES_IMA_BN"';
			//$query = DB::select($sql);
			return response()->json($query);
		}
	}
			