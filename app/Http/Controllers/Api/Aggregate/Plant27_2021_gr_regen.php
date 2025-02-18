<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Plant27_2021_gr_regen extends Controller
{

	public function plant27_2021_gr_regen_create(Request $request)
	{
		$data = array(
			"_URI" => $request->input("_uri"),
			"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
			"_CREATION_DATE" => $request->input("_creation_date"),
			"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
			"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
			"_PARENT_AURI" => $request->input("_parent_auri"),
			"_ORDINAL_NUMBER" => $request->input("_ordinal_number"),
			"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
			"REG_AVG_SEEDLING_PER_HA_PER_PLOT" => $request->input("reg_avg_seedling_per_ha_per_plot"),
			"GREGEN_GREGEN_PLOT_CROWN_CLOSURE" => $request->input("gregen_gregen_plot_crown_closure"),
			"REG_AVG_SEEDLING_PER_PLOT" => $request->input("reg_avg_seedling_per_plot"),
			"GREGEN_GREGEN_PLOT_GENERATED_NOTE_NAME_80" => $request->input("gregen_gregen_plot_generated_note_name_80"),
			"REG_AVG_TREES_PER_HA_PER_PLOT" => $request->input("reg_avg_trees_per_ha_per_plot"),
			"GENERATED_NOTE_NAME_106" => $request->input("generated_note_name_106"),
			"GENERATED_NOTE_NAME_103" => $request->input("generated_note_name_103"),
			"GREGEN_GREGEN_PLOT_RSITEPOINT_ALT" => $request->input("gregen_gregen_plot_rsitepoint_alt"),
			"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_EAST" => $request->input("gregen_gregen_plot_grcoords_re_rsite_east"),
			"GREGEN_GREGEN_PLOT_RSITEPOINT_LNG" => $request->input("gregen_gregen_plot_rsitepoint_lng"),
			"GREGEN_GREGEN_PLOT_REGEN_PLOT_NO" => $request->input("gregen_gregen_plot_regen_plot_no"),
			"GREGEN_GREGEN_PLOT_RSITEPOINT_LAT" => $request->input("gregen_gregen_plot_rsitepoint_lat"),
			"GREGEN_GREGEN_PLOT_RSITEPOINT_ACC" => $request->input("gregen_gregen_plot_rsitepoint_acc"),
			"REG_AVG_TREES_PER_PLOT" => $request->input("reg_avg_trees_per_plot"),
			"GREGEN_GREGEN_PLOT_RRECORD_HOW" => $request->input("gregen_gregen_plot_rrecord_how"),
			"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_NORTH" => $request->input("gregen_gregen_plot_grcoords_re_rsite_north"),

		);
		$response = DB::table("aggregate.PLANT27_2021_GR_REGEN")->insert($data);
		return response()->json($response);
	}
	public function plant27_2021_gr_regen_list()
	{
		$query = DB::select('select * from aggregate."PLANT27_2021_GR_REGEN"');
		return response()->json($query);
	}

	public function plant27_2021_gr_regen_bulk_create(Request $request)
	{
		// Retrieve the payload as an array of objects
		$payload = $request->except('token');



		if (
			!is_array($payload) || empty($payload)
		) {
			return response()->json(['error' => 'Invalid payload format'], 400);
		}

		$data = [];
		foreach ($payload as $item) {
			$data[] = [
				"_URI" => $item["_uri"] ?? null,
				"_CREATOR_URI_USER" => $item["_creator_uri_user"] ?? null,
				"_CREATION_DATE" => $item["_creation_date"] ?? null,
				"_LAST_UPDATE_URI_USER" => $item["_last_update_uri_user"] ?? null,
				"_LAST_UPDATE_DATE" => $item["_last_update_date"] ?? null,
				"_PARENT_AURI" => $item["_parent_auri"] ?? null,
				"_ORDINAL_NUMBER" => $item["_ordinal_number"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_top_level_auri"] ?? null,
				"REG_AVG_SEEDLING_PER_HA_PER_PLOT" => $item["reg_avg_seedling_per_ha_per_plot"] ?? null,
				"GREGEN_GREGEN_PLOT_CROWN_CLOSURE" => $item["gregen_gregen_plot_crown_closure"] ?? null,
				"REG_AVG_SEEDLING_PER_PLOT" => $item["reg_avg_seedling_per_plot"] ?? null,
				"GREGEN_GREGEN_PLOT_GENERATED_NOTE_NAME_80" => $item["gregen_gregen_plot_generated_note_name_80"] ?? null,
				"REG_AVG_TREES_PER_HA_PER_PLOT" => $item["reg_avg_trees_per_ha_per_plot"] ?? null,
				"GENERATED_NOTE_NAME_106" => $item["generated_note_name_106"] ?? null,
				"GENERATED_NOTE_NAME_103" => $item["generated_note_name_103"] ?? null,
				"GREGEN_GREGEN_PLOT_RSITEPOINT_ALT" => $item["gregen_gregen_plot_rsitepoint_alt"] ?? null,
				"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_EAST" => $item["gregen_gregen_plot_grcoords_re_rsite_east"] ?? null,
				"GREGEN_GREGEN_PLOT_RSITEPOINT_LNG" => $item["gregen_gregen_plot_rsitepoint_lng"] ?? null,
				"GREGEN_GREGEN_PLOT_REGEN_PLOT_NO" => $item["gregen_gregen_plot_regen_plot_no"] ?? null,
				"GREGEN_GREGEN_PLOT_RSITEPOINT_LAT" => $item["gregen_gregen_plot_rsitepoint_lat"] ?? null,
				"GREGEN_GREGEN_PLOT_RSITEPOINT_ACC" => $item["gregen_gregen_plot_rsitepoint_acc"] ?? null,
				"REG_AVG_TREES_PER_PLOT" => $item["reg_avg_trees_per_plot"] ?? null,
				"GREGEN_GREGEN_PLOT_RRECORD_HOW" => $item["gregen_gregen_plot_rrecord_how"] ?? null,
				"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_NORTH" => $item["gregen_gregen_plot_grcoords_re_rsite_north"] ?? null,
			];
		}



		// Insert the data into the database
		$response = DB::table("aggregate.PLANT27_2021_GR_REGEN")->insert($data);

		return response()->json(['success' => $response]);
	}

	public function plant27_2021_gr_regen_tlauri($tlauri)
	{
		$query = DB::table('aggregate.PLANT27_2021_GR_REGEN')
		->where('_TOP_LEVEL_AURI', $tlauri)
		->get();
		
		return response()->json($query);
	}


	public function plant27_2021_gr_regen_delete($uri, $tlauri)
	{
		$deleted = DB::table("aggregate.PLANT27_2021_GR_REGEN")
		->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $tlauri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}

	public function plant27_2021_gr_regen_single_update(Request $request, $uri)
	{
		$item = $request->except('token');

		// Prepare the updated data
		$updatedData = array(
			"_URI" => $item["_uri"] ?? null,
			"_CREATOR_URI_USER" => $item["_creator_uri_user"] ?? null,
			"_CREATION_DATE" => $item["_creation_date"] ?? null,
			"_LAST_UPDATE_URI_USER" => $item["_last_update_uri_user"] ?? null,
			"_LAST_UPDATE_DATE" => $item["_last_update_date"] ?? null,
			"_PARENT_AURI" => $item["_parent_auri"] ?? null,
			"_ORDINAL_NUMBER" => $item["_ordinal_number"] ?? null,
			"_TOP_LEVEL_AURI" => $item["_top_level_auri"] ?? null,
			"REG_AVG_SEEDLING_PER_HA_PER_PLOT" => $item["reg_avg_seedling_per_ha_per_plot"] ?? null,
			"GREGEN_GREGEN_PLOT_CROWN_CLOSURE" => $item["gregen_gregen_plot_crown_closure"] ?? null,
			"REG_AVG_SEEDLING_PER_PLOT" => $item["reg_avg_seedling_per_plot"] ?? null,
			"GREGEN_GREGEN_PLOT_GENERATED_NOTE_NAME_80" => $item["gregen_gregen_plot_generated_note_name_80"] ?? null,
			"REG_AVG_TREES_PER_HA_PER_PLOT" => $item["reg_avg_trees_per_ha_per_plot"] ?? null,
			"GENERATED_NOTE_NAME_106" => $item["generated_note_name_106"] ?? null,
			"GENERATED_NOTE_NAME_103" => $item["generated_note_name_103"] ?? null,
			"GREGEN_GREGEN_PLOT_RSITEPOINT_ALT" => $item["gregen_gregen_plot_rsitepoint_alt"] ?? null,
			"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_EAST" => $item["gregen_gregen_plot_grcoords_re_rsite_east"] ?? null,
			"GREGEN_GREGEN_PLOT_RSITEPOINT_LNG" => $item["gregen_gregen_plot_rsitepoint_lng"] ?? null,
			"GREGEN_GREGEN_PLOT_REGEN_PLOT_NO" => $item["gregen_gregen_plot_regen_plot_no"] ?? null,
			"GREGEN_GREGEN_PLOT_RSITEPOINT_LAT" => $item["gregen_gregen_plot_rsitepoint_lat"] ?? null,
			"GREGEN_GREGEN_PLOT_RSITEPOINT_ACC" => $item["gregen_gregen_plot_rsitepoint_acc"] ?? null,
			"REG_AVG_TREES_PER_PLOT" => $item["reg_avg_trees_per_plot"] ?? null,
			"GREGEN_GREGEN_PLOT_RRECORD_HOW" => $item["gregen_gregen_plot_rrecord_how"] ?? null,
			"GREGEN_GREGEN_PLOT_GRCOORDS_RE_RSITE_NORTH" => $item["gregen_gregen_plot_grcoords_re_rsite_north"] ?? null,
		);



		// Perform the update operation
		$response = DB::table("aggregate.PLANT27_2021_GR_REGEN")
		->where("_URI", $uri)
		->update($updatedData);

		// Return the response in JSON format
		if ($response) {
			return response()->json(['message' => 'Record updated successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}
}