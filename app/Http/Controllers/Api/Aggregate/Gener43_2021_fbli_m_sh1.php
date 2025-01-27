<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Gener43_2021_fbli_m_sh1 extends Controller
{

	// public function gener43_2021_fbli_m_sh1_create(Request $request){
	// 		$data = array();
	// 		for($i=0;$i < count($request->post("_URI")); $i++){
	// 		$data[] = array(
	// 			"_URI" => !empty($request->post("_URI")[$i]) ? $request->post("_URI")[$i] : null ,
	// 			"_CREATOR_URI_USER" => !empty($request->post("_CREATOR_URI_USER")[$i]) ? $request->post("_CREATOR_URI_USER")[$i] : null ,
	// 			"_CREATION_DATE" => !empty($request->post("_CREATION_DATE")[$i]) ? $request->post("_CREATION_DATE")[$i] : null ,
	// 			"_LAST_UPDATE_URI_USER" => !empty($request->post("_LAST_UPDATE_URI_USER")[$i]) ? $request->post("_LAST_UPDATE_URI_USER")[$i] : null ,
	// 			"_LAST_UPDATE_DATE" => !empty($request->post("_LAST_UPDATE_DATE")[$i]) ? $request->post("_LAST_UPDATE_DATE")[$i] : null ,
	// 			"_PARENT_AURI" => !empty($request->post("_PARENT_AURI")[$i]) ? $request->post("_PARENT_AURI")[$i] : null ,
	// 			"_ORDINAL_NUMBER" => !empty($request->post("_ORDINAL_NUMBER")[$i]) ? $request->post("_ORDINAL_NUMBER")[$i] : null ,
	// 			"_TOP_LEVEL_AURI" => !empty($request->post("_TOP_LEVEL_AURI")[$i]) ? $request->post("_TOP_LEVEL_AURI")[$i] : null ,
	// 			"MOUZA1" => !empty($request->post("MOUZA1")[$i]) ? $request->post("MOUZA1")[$i] : null ,
	// 			"SURVEY_TYPES" => !empty($request->post("SURVEY_TYPES")[$i]) ? $request->post("SURVEY_TYPES")[$i] : null ,
	// 			"OTHERS_S_TYPES" => !empty($request->post("OTHERS_S_TYPES")[$i]) ? $request->post("OTHERS_S_TYPES")[$i] : null ,
	// 			"SHEET1" => !empty($request->post("SHEET1")[$i]) ? $request->post("SHEET1")[$i] : null ,
	// 			"GENERATED_NOTE_NAME_40" => !empty($request->post("GENERATED_NOTE_NAME_40")[$i]) ? $request->post("GENERATED_NOTE_NAME_40")[$i] : null ,

	// 		);
	// 		}
	// 		$response = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")->insert($data);
	// 		return response()->json($response);
	// 	}


	public function gener43_2021_fbli_m_sh1_create(Request $request)
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
				"_URI" => $item["_URI"] ?? null,
				"_CREATOR_URI_USER" => $item["_CREATOR_URI_USER"] ?? null,
				"_CREATION_DATE" => $item["_CREATION_DATE"] ?? null,
				"_LAST_UPDATE_URI_USER" => $item["_LAST_UPDATE_URI_USER"] ?? null,
				"_LAST_UPDATE_DATE" => $item["_LAST_UPDATE_DATE"] ?? null,
				"_PARENT_AURI" => $item["_PARENT_AURI"] ?? null,
				"_ORDINAL_NUMBER" => $item["_ORDINAL_NUMBER"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_TOP_LEVEL_AURI"] ?? null,
				"MOUZA1" => $item["MOUZA1"] ?? null,
				"SURVEY_TYPES" => $item["SURVEY_TYPES"] ?? null,
				"OTHERS_S_TYPES" => $item["OTHERS_S_TYPES"] ?? null,
				"SHEET1" => $item["SHEET1"] ?? null,
				"GENERATED_NOTE_NAME_40" => $item["GENERATED_NOTE_NAME_40"] ?? null,
			];
		}



		// Insert the data into the database
		$response = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")->insert($data);

		return response()->json(['success' => $response]);
	}

	public function gener43_2021_fbli_m_sh1_list()
	{
		$query = DB::select('select * from aggregate."GENER43_2021_FBLI_M_SH1"');

		return response()->json($query);
	}
	public function gener43_2021_fbli_m_sh1_id($id)
	{
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
		$q = DB::GetQueryLog();
		return response()->json($query);
	}

	public function gener43_2021_fbli_m_sh1_delete($uri, $auri)
	{
		$deleted = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")
			->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $auri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}



	public function gener43_2021_fbli_m_sh1_update(Request $request)
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
				"MOUZA1" => $item["MOUZA1"] ?? null,
				"SURVEY_TYPES" => $item["SURVEY_TYPES"] ?? null,
				"OTHERS_S_TYPES" => $item["OTHERS_S_TYPES"] ?? null,
				"SHEET1" => $item["SHEET1"] ?? null,
				"GENERATED_NOTE_NAME_40" => $item["GENERATED_NOTE_NAME_40"] ?? null,
			];



			// Check if the record exists using _URI
			$existingRecord = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")
				->where("_URI", $data["_URI"])
				->first();

			if ($existingRecord) {
				// Update the existing record
				$response = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")
					->where("_URI", $data["_URI"])
					->update($data);
				$responses[] = [
					"_URI" => $data["_URI"],
					"action" => "updated",
					"success" => $response > 0, // true if updated successfully
				];
			} else {
				// Insert a new record
				$response = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")
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

	public function gener43_2021_fbli_m_sh1_single_update(Request $request,$uri)
	{
		$item = $request->except('token');
		
		// Prepare the updated data
		$updatedData = array(
			"_URI" => $item["_URI"] ?? null,
			"_CREATOR_URI_USER" => $item["_CREATOR_URI_USER"] ?? null,
			"_CREATION_DATE" => $item["_CREATION_DATE"] ?? null,
			"_LAST_UPDATE_URI_USER" => $item["_LAST_UPDATE_URI_USER"] ?? null,
			"_LAST_UPDATE_DATE" => $item["_LAST_UPDATE_DATE"] ?? null,
			"_PARENT_AURI" => $item["_PARENT_AURI"] ?? null,
			"_ORDINAL_NUMBER" => $item["_ORDINAL_NUMBER"] ?? null,
			"_TOP_LEVEL_AURI" => $item["_TOP_LEVEL_AURI"] ?? null,
			"MOUZA1" => $item["MOUZA1"] ?? null,
			"SURVEY_TYPES" => $item["SURVEY_TYPES"] ?? null,
			"OTHERS_S_TYPES" => $item["OTHERS_S_TYPES"] ?? null,
			"SHEET1" => $item["SHEET1"] ?? null,
			"GENERATED_NOTE_NAME_40" => $item["GENERATED_NOTE_NAME_40"] ?? null,
		);



		// Perform the update operation
		$response = DB::table("aggregate.GENER43_2021_FBLI_M_SH1")
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