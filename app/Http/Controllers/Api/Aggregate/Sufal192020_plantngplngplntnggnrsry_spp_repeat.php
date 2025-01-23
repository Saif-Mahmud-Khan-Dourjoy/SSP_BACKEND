<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_plantngplngplntnggnrsry_spp_repeat extends Controller
	{
		
		public function sufal192020_plantngplngplntnggnrsry_spp_repeat_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"GNURS_SPP_GSPP_NAME" => Request::input("gnurs_spp_gspp_name"),
"GNURS_SPP_SPP_NR" => Request::input("gnurs_spp_spp_nr"),

			);
			$insert_id = DB::table("SUFAL192020_PLANTNGPLNGPLNTNGGNRSRY_SPP_REPEAT")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_plantngplngplntnggnrsry_spp_repeat_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_PLANTNGPLNGPLNTNGGNRSRY_SPP_REPEAT"');
			return response()->json($query);
		}
	}
			