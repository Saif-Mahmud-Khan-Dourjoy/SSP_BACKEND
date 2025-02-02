<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Com202021_consultation_issues_others_ques extends Controller
{

	public function com202021_consultation_issues_others_ques_create(Request $request)
	{
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
	public function com202021_consultation_issues_others_ques_list()
	{
		$query = DB::select('select * from aggregate."COM202021_CONSULTATION_ISSUES_OTHERS_QUES"');
		return response()->json($query);
	}









	public function com202021_consultation_issues_others_ques_bulk_create(Request $request)
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
				"GENERATED_NOTE_NAME_56" => $item["GENERATED_NOTE_NAME_56"] ?? null,
				"OTHERS_ISSUES" => $item["OTHERS_ISSUES"] ?? null,
				"OTHERS_ISSUES_ANS" => $item["OTHERS_ISSUES_ANS"] ?? null,
			];
		}

		// Insert the data into the database
		$response = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")->insert($data);

		// Return the response
		return response()->json(['success' => $response]);
	}

	public function com202021_consultation_issues_others_ques_tlauri($tlauri)
	{
		$data = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")->where("_TOP_LEVEL_AURI", $tlauri)->get();
		return response()->json($data);
	}



	public function com202021_consultation_issues_others_ques_delete($uri, $auri)
	{
		$deleted = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")
			->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $auri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}



	public function com202021_consultation_issues_others_ques_update(Request $request)
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
				"GENERATED_NOTE_NAME_56" => $item["GENERATED_NOTE_NAME_56"] ?? null,
				"OTHERS_ISSUES" => $item["OTHERS_ISSUES"] ?? null,
				"OTHERS_ISSUES_ANS" => $item["OTHERS_ISSUES_ANS"] ?? null,

			];



			// Check if the record exists using _URI
			$existingRecord = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")
				->where("_URI", $data["_URI"])
				->first();

			if ($existingRecord) {
				// Update the existing record
				$response = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")
					->where("_URI", $data["_URI"])
					->update($data);
				$responses[] = [
					"_URI" => $data["_URI"],
					"action" => "updated",
					"success" => $response > 0, // true if updated successfully
				];
			} else {
				// Insert a new record
				$response = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")
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

	public function com202021_consultation_issues_others_ques_single_update(Request $request, $uri)
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
			"GENERATED_NOTE_NAME_56" => $item["GENERATED_NOTE_NAME_56"] ?? null,
			"OTHERS_ISSUES" => $item["OTHERS_ISSUES"] ?? null,
			"OTHERS_ISSUES_ANS" => $item["OTHERS_ISSUES_ANS"] ?? null,
		);



		// Perform the update operation
		$response = DB::table("aggregate.COM202021_CONSULTATION_ISSUES_OTHERS_QUES")
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