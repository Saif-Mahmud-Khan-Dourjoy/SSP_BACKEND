<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
use Illuminate\Http\Request;

	class Plant27_2021_gtrts_community_protection extends Controller
	{
		
		public function plant27_2021_gtrts_community_protection_create(Request $request){
			$data = array(
				"_URI" => $request->input("_uri"),
"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
"_CREATION_DATE" => $request->input("_creation_date"),
"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
"_PARENT_AURI" => $request->input("_parent_auri"),
"_ORDINAL_NUMBER" => $request->input("_ordinal_number"),
"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
"GENERATED_NOTE_NAME_257" => $request->input("generated_note_name_257"),
"COMMUNITY_YEAR_RAW" => $request->input("community_year_raw"),
"COMMUNITY_YEAR" => $request->input("community_year"),

			);
			$response = DB::table("aggregate.PLANT27_2021_GTRTS_COMMUNITY_PROTECTION")->insert($data);
			return response()->json($response);
		}
		public function plant27_2021_gtrts_community_protection_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_GTRTS_COMMUNITY_PROTECTION"');
			return response()->json($query);
		}

	public function plant27_2021_gtrts_community_protection_bulk_create(Request $request)
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
				"GENERATED_NOTE_NAME_257" => $item["generated_note_name_257"] ?? null,
				"COMMUNITY_YEAR_RAW" => $item["community_year_raw"] ?? null,
				"COMMUNITY_YEAR" => $item["community_year"] ?? null,
			];
		}



		// Insert the data into the database
		$response = DB::table("aggregate.PLANT27_2021_GTRTS_COMMUNITY_PROTECTION")->insert($data);

		return response()->json(['success' => $response]);
	}

	public function plant27_2021_gtrts_community_protection_tlauri($tlauri)
	{
		$query = DB::table('aggregate.PLANT27_2021_GTRTS_COMMUNITY_PROTECTION')
		->where('_TOP_LEVEL_AURI', $tlauri)
		->get();

		return response()->json($query);
	}


	public function plant27_2021_gtrts_community_protection_delete($uri, $tlauri)
	{
		$deleted = DB::table("aggregate.PLANT27_2021_GTRTS_COMMUNITY_PROTECTION")
		->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $tlauri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}

	public function plant27_2021_gtrts_community_protection_single_update(Request $request, $uri)
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
			"GENERATED_NOTE_NAME_257" => $item["generated_note_name_257"] ?? null,
			"COMMUNITY_YEAR_RAW" => $item["community_year_raw"] ?? null,
			"COMMUNITY_YEAR" => $item["community_year"] ?? null,
		);



		// Perform the update operation
		$response = DB::table("aggregate.PLANT27_2021_GTRTS_COMMUNITY_PROTECTION")
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
			