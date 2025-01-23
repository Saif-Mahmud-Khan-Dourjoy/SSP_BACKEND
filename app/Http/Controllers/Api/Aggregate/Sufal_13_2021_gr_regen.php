<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class Sufal_13_2021_gr_regen extends Controller
	{
		
		public function sufal_13_2021_gr_regen_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"_PARENT_AURI" => Request::input("_parent_auri"),
"_ORDINAL_NUMBER" => Request::input("_ordinal_number"),
"_TOP_LEVEL_AURI" => Request::input("_top_level_auri"),
"REG_AVG_SEEDLING_PER_HA_PER_PLOT" => Request::input("reg_avg_seedling_per_ha_per_plot"),
"GREGEN_GREGEN_PLOT_CROWN_CLOSURE" => Request::input("gregen_gregen_plot_crown_closure"),
"REG_AVG_SEEDLING_PER_PLOT" => Request::input("reg_avg_seedling_per_plot"),
"REG_AVG_TREES_PER_HA_PER_PLOT" => Request::input("reg_avg_trees_per_ha_per_plot"),
"GREGEN_GREGEN_PLOT_RSITEPOINT_ALT" => Request::input("gregen_gregen_plot_rsitepoint_alt"),
"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_EAST" => Request::input("gregen_gregen_plot_grcoords_re_rsite_east"),
"GREGEN_GREGEN_PLOT_RSITEPOINT_LNG" => Request::input("gregen_gregen_plot_rsitepoint_lng"),
"GENERATED_NOTE_NAME_54" => Request::input("generated_note_name_54"),
"GREGEN_GREGEN_PLOT_REGEN_PLOT_NO" => Request::input("gregen_gregen_plot_regen_plot_no"),
"GREGEN_GREGEN_PLOT_RSITEPOINT_LAT" => Request::input("gregen_gregen_plot_rsitepoint_lat"),
"GREGEN_GREGEN_PLOT_RSITEPOINT_ACC" => Request::input("gregen_gregen_plot_rsitepoint_acc"),
"GREGEN_GREGEN_PLOT_GENERATED_NOTE_NAME_28" => Request::input("gregen_gregen_plot_generated_note_name_28"),
"GENERATED_NOTE_NAME_51" => Request::input("generated_note_name_51"),
"REG_AVG_TREES_PER_PLOT" => Request::input("reg_avg_trees_per_plot"),
"GREGEN_GREGEN_PLOT_RRECORD_HOW" => Request::input("gregen_gregen_plot_rrecord_how"),
"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_NORTH" => Request::input("gregen_gregen_plot_grcoords_re_rsite_north"),

			);
			$insert_id = DB::table("SUFAL_13_2021_GR_REGEN")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function sufal_13_2021_gr_regen_list(){
			$query = DB::select('select * from aggregate."SUFAL_13_2021_GR_REGEN"');
			return response()->json($query);
		}
	}
			