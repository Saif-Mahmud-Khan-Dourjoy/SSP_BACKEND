<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_gregen_reg_cen_to_e_blb extends Controller
	{
		
		public function sufal192020_gregen_reg_cen_to_e_blb_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"VALUE" => Request::input("value"),

			);
			$insert_id = DB::table("SUFAL192020_GREGEN_REG_CEN_TO_E_BLB")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_gregen_reg_cen_to_e_blb_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_GREGEN_REG_CEN_TO_E_BLB"');
			return response()->json($query);
		}
	}
			