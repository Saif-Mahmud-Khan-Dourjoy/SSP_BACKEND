<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_location_data_ca_tloc_ad_upzilla extends Controller
	{
		
		public function sufal192020_location_data_ca_tloc_ad_upzilla_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"VALUE" => Request::input("value"),

			);
			$insert_id = DB::table("SUFAL192020_LOCATION_DATA_CA_TLOC_AD_UPZILLA")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_location_data_ca_tloc_ad_upzilla_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_LOCATION_DATA_CA_TLOC_AD_UPZILLA"');
			return response()->json($query);
		}
	}
			