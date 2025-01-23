<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
use Illuminate\Http\Request;
	class Com202021_consultation_issues_others_ques extends Controller
	{
		
		public function com202021_consultation_issues_others_ques_create(Request $request){
				$data = array(
					"_URI" => $request->post("_URI"),
"_CREATOR_URI_USER" => $request->post("_CREATOR_URI_USER"),
"_CREATION_DATE" => $request->post("_CREATION_DATE"),
"_LAST_UPDATE_URI_USER" => $request->post("_LAST_UPDATE_URI_USER"),
"_LAST_UPDATE_DATE" => $request->post("_LAST_UPDATE_DATE"),
"_PARENT_AURI" => $request->post("_PARENT_AURI"),
"_ORDINAL_NUMBER" => $request->post("_ORDINAL_NUMBER"),
"_TOP_LEVEL_AURI" => $request->post("_TOP_LEVEL_AURI"),
"GENERATED_NOTE_NAME_56" => $request->post("GENERATED_NOTE_NAME_56"),
"OTHERS_ISSUES" => $request->post("OTHERS_ISSUES"),
"OTHERS_ISSUES_ANS" => $request->post("OTHERS_ISSUES_ANS"),

				);
				$insert_id = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")->insert($data);
				return response()->json($insert_id);
			}
		public function com202021_consultation_issues_others_ques_list(){
			$query = DB::select('select * from aggregate."COM202021_CONSULTATION_ISSUES_OTHERS_QUES"');
			return response()->json($query);
		}
	}
			