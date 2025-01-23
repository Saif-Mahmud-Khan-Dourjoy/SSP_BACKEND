<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb extends Controller
	{
		
		public function com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
				"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
				"_CREATION_DATE" => Request::input("_creation_date"),
				"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
				"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
				"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
				"VALUE" => Request::input("value"),

			);
			$insert_id = DB::table("COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_ATTENDENCE_BLB")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_list(){
			$query = DB::select('select * from aggregate."COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_ATTENDENCE_BLB"');
			$r = array();			
			foreach($query as $val){
				$r[] = array(
					"_URI" => $val->_URI,
					"_CREATOR_URI_USER" => $val->_CREATOR_URI_USER,
					"_CREATION_DATE" => $val->_CREATION_DATE,
					"_LAST_UPDATE_URI_USER" => $val->_LAST_UPDATE_URI_USER,
					"_LAST_UPDATE_DATE" => $val->_LAST_UPDATE_DATE,
					"_TOP_LEVEL_AURI" => $val->_TOP_LEVEL_AURI,
					"VALUE" => mb_convert_encoding(stream_get_contents($val->VALUE), 'UTF-8', 'UTF-8'),
				);
			}
			return response()->json($r);
		}
	}
			