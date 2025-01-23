<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
	use Illuminate\Http\Request;
	class Gener43_2021_gvillages extends Controller
	{
		
		public function gener43_2021_gvillages_create(Request $request){
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
"SOCFOR_PARTIC" => !empty($request->post("SOCFOR_PARTIC")[$i]) ? $request->post("SOCFOR_PARTIC")[$i] : null ,
"VRECORD_HOW" => !empty($request->post("VRECORD_HOW")[$i]) ? $request->post("VRECORD_HOW")[$i] : null ,
"VILLA_AD_UNION" => !empty($request->post("VILLA_AD_UNION")[$i]) ? $request->post("VILLA_AD_UNION")[$i] : null ,
"FOREST_VILGRS" => !empty($request->post("FOREST_VILGRS")[$i]) ? $request->post("FOREST_VILGRS")[$i] : null ,
"TOT_HH" => !empty($request->post("TOT_HH")[$i]) ? $request->post("TOT_HH")[$i] : null ,
"VSITEPOINT_ACC" => !empty($request->post("VSITEPOINT_ACC")[$i]) ? $request->post("VSITEPOINT_ACC")[$i] : null ,
"VSITEPOINT_LAT" => !empty($request->post("VSITEPOINT_LAT")[$i]) ? $request->post("VSITEPOINT_LAT")[$i] : null ,
"FCV_PARTC" => !empty($request->post("FCV_PARTC")[$i]) ? $request->post("FCV_PARTC")[$i] : null ,
"TVILLAGE_NAME" => !empty($request->post("TVILLAGE_NAME")[$i]) ? $request->post("TVILLAGE_NAME")[$i] : null ,
"VSITEPOINT_ALT" => !empty($request->post("VSITEPOINT_ALT")[$i]) ? $request->post("VSITEPOINT_ALT")[$i] : null ,
"GRCOORDS_VSITE_EAST" => !empty($request->post("GRCOORDS_VSITE_EAST")[$i]) ? $request->post("GRCOORDS_VSITE_EAST")[$i] : null ,
"VILLA_AD_UPZILLA" => !empty($request->post("VILLA_AD_UPZILLA")[$i]) ? $request->post("VILLA_AD_UPZILLA")[$i] : null ,
"GENERATED_NOTE_NAME_170" => !empty($request->post("GENERATED_NOTE_NAME_170")[$i]) ? $request->post("GENERATED_NOTE_NAME_170")[$i] : null ,
"GRCOORDS_VSITE_NORTH" => !empty($request->post("GRCOORDS_VSITE_NORTH")[$i]) ? $request->post("GRCOORDS_VSITE_NORTH")[$i] : null ,
"VSITEPOINT_LNG" => !empty($request->post("VSITEPOINT_LNG")[$i]) ? $request->post("VSITEPOINT_LNG")[$i] : null ,
"VILLA_DIST" => !empty($request->post("VILLA_DIST")[$i]) ? $request->post("VILLA_DIST")[$i] : null ,

				);
				}
				$insert_id = DB::table("aggregate.GENER43_2021_GVILLAGES")->insert($data);
				return response()->json($insert_id);
			}
		public function gener43_2021_gvillages_list(){
			$query = DB::select('select * from aggregate."GENER43_2021_GVILLAGES"');
			return response()->json($query);
		}
		public function gener43_2021_gvillages_id($id){
            DB::EnableQueryLog();
            $sql = "
            select
                gen.*
                
                from 
                aggregate.\"GENER43_2021_GVILLAGES\" as gen
                
                
                
                where  gen.\"_PARENT_AURI\" = '$id' OR gen.\"_TOP_LEVEL_AURI\" = '$id'
            ";
            $query =  DB::select($sql);
            $q=DB::GetQueryLog();
            return response()->json($query);
        }
	}
			