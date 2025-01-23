<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_overallnotes_ima_blb extends Controller
	{
		
		public function sufal192020_overallnotes_ima_blb_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"VALUE" => Request::input("value"),

			);
			$insert_id = DB::table("SUFAL192020_OVERALLNOTES_IMA_BLB")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_overallnotes_ima_blb_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_OVERALLNOTES_IMA_BLB"');
			return response()->json($query);
		}
	}
			