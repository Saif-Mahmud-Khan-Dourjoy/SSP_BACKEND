<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Gener43_2021_gvillages extends Controller
{

	// public function gener43_2021_gvillages_create(Request $request)
	// {
	// 	$data = array();
	// 	for ($i = 0; $i < count($request->post("_URI")); $i++) {
	// 		$data[] = array(
	// 			"_URI" => !empty($request->post("_URI")[$i]) ? $request->post("_URI")[$i] : null,
	// 			"_CREATOR_URI_USER" => !empty($request->post("_CREATOR_URI_USER")[$i]) ? $request->post("_CREATOR_URI_USER")[$i] : null,
	// 			"_CREATION_DATE" => !empty($request->post("_CREATION_DATE")[$i]) ? $request->post("_CREATION_DATE")[$i] : null,
	// 			"_LAST_UPDATE_URI_USER" => !empty($request->post("_LAST_UPDATE_URI_USER")[$i]) ? $request->post("_LAST_UPDATE_URI_USER")[$i] : null,
	// 			"_LAST_UPDATE_DATE" => !empty($request->post("_LAST_UPDATE_DATE")[$i]) ? $request->post("_LAST_UPDATE_DATE")[$i] : null,
	// 			"_PARENT_AURI" => !empty($request->post("_PARENT_AURI")[$i]) ? $request->post("_PARENT_AURI")[$i] : null,
	// 			"_ORDINAL_NUMBER" => !empty($request->post("_ORDINAL_NUMBER")[$i]) ? $request->post("_ORDINAL_NUMBER")[$i] : null,
	// 			"_TOP_LEVEL_AURI" => !empty($request->post("_TOP_LEVEL_AURI")[$i]) ? $request->post("_TOP_LEVEL_AURI")[$i] : null,
	// 			"SOCFOR_PARTIC" => !empty($request->post("SOCFOR_PARTIC")[$i]) ? $request->post("SOCFOR_PARTIC")[$i] : null,
	// 			"VRECORD_HOW" => !empty($request->post("VRECORD_HOW")[$i]) ? $request->post("VRECORD_HOW")[$i] : null,
	// 			"VILLA_AD_UNION" => !empty($request->post("VILLA_AD_UNION")[$i]) ? $request->post("VILLA_AD_UNION")[$i] : null,
	// 			"FOREST_VILGRS" => !empty($request->post("FOREST_VILGRS")[$i]) ? $request->post("FOREST_VILGRS")[$i] : null,
	// 			"TOT_HH" => !empty($request->post("TOT_HH")[$i]) ? $request->post("TOT_HH")[$i] : null,
	// 			"VSITEPOINT_ACC" => !empty($request->post("VSITEPOINT_ACC")[$i]) ? $request->post("VSITEPOINT_ACC")[$i] : null,
	// 			"VSITEPOINT_LAT" => !empty($request->post("VSITEPOINT_LAT")[$i]) ? $request->post("VSITEPOINT_LAT")[$i] : null,
	// 			"FCV_PARTC" => !empty($request->post("FCV_PARTC")[$i]) ? $request->post("FCV_PARTC")[$i] : null,
	// 			"TVILLAGE_NAME" => !empty($request->post("TVILLAGE_NAME")[$i]) ? $request->post("TVILLAGE_NAME")[$i] : null,
	// 			"VSITEPOINT_ALT" => !empty($request->post("VSITEPOINT_ALT")[$i]) ? $request->post("VSITEPOINT_ALT")[$i] : null,
	// 			"GRCOORDS_VSITE_EAST" => !empty($request->post("GRCOORDS_VSITE_EAST")[$i]) ? $request->post("GRCOORDS_VSITE_EAST")[$i] : null,
	// 			"VILLA_AD_UPZILLA" => !empty($request->post("VILLA_AD_UPZILLA")[$i]) ? $request->post("VILLA_AD_UPZILLA")[$i] : null,
	// 			"GENERATED_NOTE_NAME_170" => !empty($request->post("GENERATED_NOTE_NAME_170")[$i]) ? $request->post("GENERATED_NOTE_NAME_170")[$i] : null,
	// 			"GRCOORDS_VSITE_NORTH" => !empty($request->post("GRCOORDS_VSITE_NORTH")[$i]) ? $request->post("GRCOORDS_VSITE_NORTH")[$i] : null,
	// 			"VSITEPOINT_LNG" => !empty($request->post("VSITEPOINT_LNG")[$i]) ? $request->post("VSITEPOINT_LNG")[$i] : null,
	// 			"VILLA_DIST" => !empty($request->post("VILLA_DIST")[$i]) ? $request->post("VILLA_DIST")[$i] : null,

	// 		);
	// 	}
	// 	$response = DB::table("aggregate.GENER43_2021_GVILLAGES")->insert($data);
	// 	return response()->json($response);
	// }


	public function gener43_2021_gvillages_create(Request $request)
	{
		// Retrieve the payload as an array of objects, excluding 'token'
		$payload = $request->except('token');

		// Check if the payload is a valid array and not empty
		if (!is_array($payload) || empty($payload)) {
			return response()->json(['error' => 'Invalid payload format'], 400);
		}

		// Initialize the data array to hold the processed items
		$data = [];

		// Loop through the payload and map the fields
		foreach ($payload as $item) {
			$data[] = [
				"_URI" => $item["_URI"] ?? null,
				"_CREATOR_URI_USER" => $item["_CREATOR_URI_USER"] ?? null,
				"_CREATION_DATE" => $item["_CREATION_DATE"] ?? null,
				"_LAST_UPDATE_URI_USER" => $item["_LAST_UPDATE_URI_USER"] ?? null,
				"_LAST_UPDATE_DATE" => $item["_LAST_UPDATE_DATE"] ?? null,
				"_PARENT_AURI" => $item["_PARENT_AURI"] ?? null,
				"_ORDINAL_NUMBER" => $item["_ORDINAL_NUMBER"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_TOP_LEVEL_AURI"] ?? null,
				"SOCFOR_PARTIC" => $item["SOCFOR_PARTIC"] ?? null,
				"VRECORD_HOW" => $item["VRECORD_HOW"] ?? null,
				"VILLA_AD_UNION" => $item["VILLA_AD_UNION"] ?? null,
				"FOREST_VILGRS" => $item["FOREST_VILGRS"] ?? null,
				"TOT_HH" => $item["TOT_HH"] ?? null,
				"VSITEPOINT_ACC" => $item["VSITEPOINT_ACC"] ?? null,
				"VSITEPOINT_LAT" => $item["VSITEPOINT_LAT"] ?? null,
				"FCV_PARTC" => $item["FCV_PARTC"] ?? null,
				"TVILLAGE_NAME" => $item["TVILLAGE_NAME"] ?? null,
				"VSITEPOINT_ALT" => $item["VSITEPOINT_ALT"] ?? null,
				"GRCOORDS_VSITE_EAST" => $item["GRCOORDS_VSITE_EAST"] ?? null,
				"VILLA_AD_UPZILLA" => $item["VILLA_AD_UPZILLA"] ?? null,
				"GENERATED_NOTE_NAME_170" => $item["GENERATED_NOTE_NAME_170"] ?? null,
				"GRCOORDS_VSITE_NORTH" => $item["GRCOORDS_VSITE_NORTH"] ?? null,
				"VSITEPOINT_LNG" => $item["VSITEPOINT_LNG"] ?? null,
				"VILLA_DIST" => $item["VILLA_DIST"] ?? null,
			];
		}

		// Insert the data into the database
		$response = DB::table("aggregate.GENER43_2021_GVILLAGES")->insert($data);

		// Return the response
		return response()->json(['success' => $response]);
	}

	public function gener43_2021_gvillages_list()
	{
		$query = DB::select('select * from aggregate."GENER43_2021_GVILLAGES"');
		return response()->json($query);
	}
	public function gener43_2021_gvillages_id($id)
	{
		DB::EnableQueryLog();
		$sql = "
            select
                gen.*
                
                from 
                aggregate.\"GENER43_2021_GVILLAGES\" as gen
                
                
                
                where  gen.\"_PARENT_AURI\" = '$id' OR gen.\"_TOP_LEVEL_AURI\" = '$id'
            ";
		$query =  DB::select($sql);
		$q = DB::GetQueryLog();
		return response()->json($query);
	}


	public function gener43_2021_gvillages_delete($uri, $auri)
	{
		$deleted = DB::table("aggregate.GENER43_2021_GVILLAGES")
		->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $auri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}
}