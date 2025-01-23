<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
		use Illuminate\Http\Request;
	class Gener43_2021_fbli_m_sh1 extends Controller
	{
		
		public function gener43_2021_fbli_m_sh1_create(Request $request){
				$data = array();
				for($i=0;$i < count($request->post("_URI")); $i++){
				$data[] = array(
					"_URI" => !empty($request->post("_URI")[$i]) ? $request->post("_URI")[$i] : null ,
					"_CREATOR_URI_USER" => !empty($request->post("_CREATOR_URI_USER")[$i]) ? $request->post("_CREATOR_URI_USER")[$i] : null ,
					"_CREATION_DATE" => !empty($request->post("_CREATION_DATE")[$i]) ? $request->post("_CREATION_DATE")[$i] : null ,
					"_LAST_UPDATE_URI_USER" => !empty($request->post("_LAST_UPDATE_URI_USER")[$i]) ? $request->post("_LAST_UPDATE_URI_USER")[$i] : null ,
					"_LAST_UPDATE_DATE" => !empty($request->post("_LAST_UPDATE_DATE")[$i]) ? $request->post("_LAST_UPDATE_DATE")[$i] : null ,
					"_PARENT_AURI" => !empty($request->post("_PARENT_AURI")[$i]) ? $request->post("_PARENT_AURI")[$i] : null ,
					"_ORDINAL_NUMBER" => !empty($request->post("_ORDINAL_NUMBER")[$i]) ? $request->post("_ORDINAL_NUMBER")[$i] : null ,
					"_TOP_LEVEL_AURI" => !empty($request->post("_TOP_LEVEL_AURI")[$i]) ? $request->post("_TOP_LEVEL_AURI")[$i] : null ,
					"MOUZA1" => !empty($request->post("MOUZA1")[$i]) ? $request->post("MOUZA1")[$i] : null ,
					"SURVEY_TYPES" => !empty($request->post("SURVEY_TYPES")[$i]) ? $request->post("SURVEY_TYPES")[$i] : null ,
					"OTHERS_S_TYPES" => !empty($request->post("OTHERS_S_TYPES")[$i]) ? $request->post("OTHERS_S_TYPES")[$i] : null ,
					"SHEET1" => !empty($request->post("SHEET1")[$i]) ? $request->post("SHEET1")[$i] : null ,
					"GENERATED_NOTE_NAME_40" => !empty($request->post("GENERATED_NOTE_NAME_40")[$i]) ? $request->post("GENERATED_NOTE_NAME_40")[$i] : null ,

				);
				}
				$insert_id = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")->insert($data);
				return response()->json($insert_id);
			}
		public function gener43_2021_fbli_m_sh1_list(){
			$query = DB::select('select * from aggregate."GENER43_2021_FBLI_M_SH1"');
			
			return response()->json($query);
		}
		public function gener43_2021_fbli_m_sh1_id($id){
            DB::EnableQueryLog();
            $sql = "
            select
                gen.*,
                mt.\"name\" as SURVEY_TYPES 
                from 
                aggregate.\"GENER43_2021_FBLI_M_SH1\" as gen
                
                left join mouza_types mt on mt.code=gen.\"SURVEY_TYPES\"
                
                where  gen.\"_PARENT_AURI\" = '$id' OR gen.\"_TOP_LEVEL_AURI\" = '$id'
            ";
            $query =  DB::select($sql);
            $q=DB::GetQueryLog();
            return response()->json($query);
        }
	}
			