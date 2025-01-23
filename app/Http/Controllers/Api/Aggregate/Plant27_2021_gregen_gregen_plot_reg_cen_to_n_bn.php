<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn extends Controller
	{
		
		public function plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn_create(){
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
			$insert_id = DB::table("PLANT27_2021_GREGEN_GREGEN_PLOT_REG_CEN_TO_N_BN")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_GREGEN_GREGEN_PLOT_REG_CEN_TO_N_BN"');
			return response()->json($query);
		}
	}
			