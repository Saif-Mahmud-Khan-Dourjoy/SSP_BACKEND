<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
	use Illuminate\Http\Request;
	class Com202021_stakeholder_engagement extends Controller
	{
		
		public function com202021_stakeholder_engagement_create(Request $request){
				$data = array(
					"_URI" => $request->post("_URI"),
"_CREATOR_URI_USER" => $request->post("_CREATOR_URI_USER"),
"_CREATION_DATE" => $request->post("_CREATION_DATE"),
"_LAST_UPDATE_URI_USER" => $request->post("_LAST_UPDATE_URI_USER"),
"_LAST_UPDATE_DATE" => $request->post("_LAST_UPDATE_DATE"),
"_PARENT_AURI" => $request->post("_PARENT_AURI"),
"_ORDINAL_NUMBER" => $request->post("_ORDINAL_NUMBER"),
"_TOP_LEVEL_AURI" => $request->post("_TOP_LEVEL_AURI"),
"OCCUPATION_COM" => $request->post("OCCUPATION_COM"),
"OCCUPATION_OTHER" => $request->post("OCCUPATION_OTHER"),
"FD_SUPPORTS_COMMUNITY_1" => $request->post("FD_SUPPORTS_COMMUNITY_1"),
"GENERATED_NOTE_NAME_62" => $request->post("GENERATED_NOTE_NAME_62"),
"COMMUNITY_SUPPORTS_FOREST_1" => $request->post("COMMUNITY_SUPPORTS_FOREST_1"),

				);
				$insert_id = DB::table("aggregate.COM202021_STAKEHOLDER_ENGAGEMENT")->insert($data);
				return response()->json($insert_id);
			}
		public function com202021_stakeholder_engagement_list(){
			$query = DB::select('select * from aggregate."COM202021_STAKEHOLDER_ENGAGEMENT"');
			return response()->json($query);
		}
	}
			