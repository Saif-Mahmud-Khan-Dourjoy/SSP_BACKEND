<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Gener43_2021_gnatissues extends Controller
{

	// public function gener43_2021_gnatissues_create(Request $request)
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
	// 			"NATISSUES" => !empty($request->post("NATISSUES")[$i]) ? $request->post("NATISSUES")[$i] : null,
	// 			"NAT_LEVEL" => !empty($request->post("NAT_LEVEL")[$i]) ? $request->post("NAT_LEVEL")[$i] : null,
	// 			"GENERATED_NOTE_NAME_83" => !empty($request->post("GENERATED_NOTE_NAME_83")[$i]) ? $request->post("GENERATED_NOTE_NAME_83")[$i] : null,
	// 			"NAT_OTHER" => !empty($request->post("NAT_OTHER")[$i]) ? $request->post("NAT_OTHER")[$i] : null,

	// 		);
	// 	}
	// 	$response = DB::table("aggregate.GENER43_2021_GNATISSUES")->insert($data);
	// 	return response()->json($response);
	// }



	public function gener43_2021_gnatissues_create(Request $request)
	{
		// Retrieve the payload as an array of objects, excluding the 'token' field
		$payload = $request->except('token');

		// Validate the payload to ensure it is a non-empty array
		if (!is_array($payload) || empty($payload)) {
			return response()->json(['error' => 'Invalid payload format'], 400);
		}

		$data = [];
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
				"NATISSUES" => $item["NATISSUES"] ?? null,
				"NAT_LEVEL" => $item["NAT_LEVEL"] ?? null,
				"GENERATED_NOTE_NAME_83" => $item["GENERATED_NOTE_NAME_83"] ?? null,
				"NAT_OTHER" => $item["NAT_OTHER"] ?? null,
			];
		}

		// Insert the data into the database
		try {
			$response = DB::table("aggregate.GENER43_2021_GNATISSUES")->insert($data);
			return response()->json(['success' => $response]);
		} catch (\Exception $e) {
			return response()->json(['error' => $e->getMessage()], 500);
		}
	}

	public function gener43_2021_gnatissues_list()
	{
		$query = DB::select('select * from aggregate."GENER43_2021_GNATISSUES"');
		return response()->json($query);
	}
	public function gener43_2021_gnatissues_id($id)
	{
		DB::EnableQueryLog();
		$sql = "
            select
                gen.*,
                mt.\"name\" as NATISSUES 
                from 
                aggregate.\"GENER43_2021_GNATISSUES\" as gen
                
                left join natural_issues mt on mt.code=gen.\"NATISSUES\"
                
                where  gen.\"_PARENT_AURI\" = '$id' OR gen.\"_TOP_LEVEL_AURI\" = '$id'
            ";
		$query =  DB::select($sql);
		$q = DB::GetQueryLog();
		return response()->json($query);
	}

	public function gener43_2021_gnatissues_delete($uri, $auri)
	{
		$deleted = DB::table("aggregate.GENER43_2021_GNATISSUES")
			->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $auri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}


	public function gener43_2021_gnatissues_update(Request $request)
	{
		$payload = $request->except('token');



		if (
			!is_array($payload) || empty($payload)
		) {
			return response()->json(['error' => 'Invalid payload format'], 400);
		}

		$responses = [];
		foreach ($payload as $item) {
			$data = [
				"_URI" => $item["_URI"] ?? null,
				"_CREATOR_URI_USER" => $item["_CREATOR_URI_USER"] ?? null,
				"_CREATION_DATE" => $item["_CREATION_DATE"] ?? null,
				"_LAST_UPDATE_URI_USER" => $item["_LAST_UPDATE_URI_USER"] ?? null,
				"_LAST_UPDATE_DATE" => $item["_LAST_UPDATE_DATE"] ?? null,
				"_PARENT_AURI" => $item["_PARENT_AURI"] ?? null,
				"_ORDINAL_NUMBER" => $item["_ORDINAL_NUMBER"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_TOP_LEVEL_AURI"] ?? null,
				"NATISSUES" => $item["NATISSUES"] ?? null,
				"NAT_LEVEL" => $item["NAT_LEVEL"] ?? null,
				"GENERATED_NOTE_NAME_83" => $item["GENERATED_NOTE_NAME_83"] ?? null,
				"NAT_OTHER" => $item["NAT_OTHER"] ?? null,
			];



			// Check if the record exists using _URI
			$existingRecord = DB::table("aggregate.GENER43_2021_GNATISSUES")
			->where("_URI", $data["_URI"])
			->first();

			if ($existingRecord) {
				// Update the existing record
				$response = DB::table("aggregate.GENER43_2021_GNATISSUES")
				->where("_URI", $data["_URI"])
				->update($data);
				$responses[] = [
					"_URI" => $data["_URI"],
					"action" => "updated",
					"success" => $response > 0, // true if updated successfully
				];
			} else {
				// Insert a new record
				$response = DB::table("aggregate.GENER43_2021_GNATISSUES")
				->insert($data);
				$responses[] = [
					"_URI" => $data["_URI"],
					"action" => "inserted",
					"success" => $response, // true if inserted successfully
				];
			}
		}

		// Return a JSON response with all actions performed
		return response()->json($responses);
	}
}