<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb extends Controller
{

	public function sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb_create(Request $request)
	{
		$data = array(
			"_URI" => $request->input("_uri"),
			"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
			"_CREATION_DATE" => $request->input("_creation_date"),
			"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
			"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
			"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
			"VALUE" => $request->input("value"),

		);
		$insert_id = DB::table("SUFAL192020_GSIT_COLOGICAL_ATTRBTES_LAND_COV_DESC_IMAGE_BLB")->insertGetId($data);
		return response()->json($insert_id);
	}
	public function sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb_list()
	{
		$query = DB::select('select * from aggregate."SUFAL192020_GSIT_COLOGICAL_ATTRBTES_LAND_COV_DESC_IMAGE_BLB"');
		return response()->json($query);
	}
}
