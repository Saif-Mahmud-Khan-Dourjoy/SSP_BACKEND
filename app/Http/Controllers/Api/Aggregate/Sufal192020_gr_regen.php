<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal192020_gr_regen extends Controller
	{
		
		public function sufal192020_gr_regen_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"GREGEN_RSITEPOINT_ALT" => Request::input("gregen_rsitepoint_alt"),
"REG_AVG_SEEDLING_PER_HA_PER_PLOT" => Request::input("reg_avg_seedling_per_ha_per_plot"),
"GREGEN_REGEN_PLOT_NO" => Request::input("gregen_regen_plot_no"),
"GREGEN_RSITEPOINT_ACC" => Request::input("gregen_rsitepoint_acc"),
"GENERATED_NOTE_NAME_99" => Request::input("generated_note_name_99"),
"GREGEN_RSITEPOINT_LNG" => Request::input("gregen_rsitepoint_lng"),
"REG_AVG_SEEDLING_PER_PLOT" => Request::input("reg_avg_seedling_per_plot"),
"GREGEN_GRCOORDS_RE_RSITE_NORTH" => Request::input("gregen_grcoords_re_rsite_north"),
"GREGEN_RSITEPOINT_LAT" => Request::input("gregen_rsitepoint_lat"),
"GREGEN_GRCOORDS_RE_RSITE_EAST" => Request::input("gregen_grcoords_re_rsite_east"),
"GREGEN_RRECORD_HOW" => Request::input("gregen_rrecord_how"),

			);
			$insert_id = DB::table("SUFAL192020_GR_REGEN")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal192020_gr_regen_list(){
			$query = DB::select('select * from aggregate."SUFAL192020_GR_REGEN"');
			return response()->json($query);
		}
	}
			