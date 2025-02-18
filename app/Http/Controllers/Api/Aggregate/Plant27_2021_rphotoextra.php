<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
use Illuminate\Http\Request;

	class Plant27_2021_rphotoextra extends Controller
	{
		
		public function plant27_2021_rphotoextra_create(	Request $request){
			$data = array(
				"_URI" => $request->input("_uri"),
"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
"_CREATION_DATE" => $request->input("_creation_date"),
"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
"_PARENT_AURI" => $request->input("_parent_auri"),
"_ORDINAL_NUMBER" => $request->input("_ordinal_number"),
"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
"PPICLOCATIONEXTRA_ALT" => $request->input("ppiclocationextra_alt"),
"XPIC_BEARING" => $request->input("xpic_bearing"),
"GENERATED_NOTE_NAME_65" => $request->input("generated_note_name_65"),
"PPICLOCATIONEXTRA_LNG" => $request->input("ppiclocationextra_lng"),
"PPICLOCATIONEXTRA_ACC" => $request->input("ppiclocationextra_acc"),
"PPICLOCATIONEXTRA_LAT" => $request->input("ppiclocationextra_lat"),

			);
			$insert_id = DB::table("aggregate.PLANT27_2021_RPHOTOEXTRA")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function plant27_2021_rphotoextra_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_RPHOTOEXTRA"');
			return response()->json($query);
		}


	public function plant27_2021_rphotoextra_bulk_create(Request $request)
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
				"PPICLOCATIONEXTRA_ALT" => $item["ppiclocationextra_alt"] ?? null,
				"XPIC_BEARING" => $item["xpic_bearing"] ?? null,
				"GENERATED_NOTE_NAME_65" => $item["generated_note_name_65"] ?? null,
				"PPICLOCATIONEXTRA_LNG" => $item["ppiclocationextra_lng"] ?? null,
				"PPICLOCATIONEXTRA_ACC" => $item["ppiclocationextra_acc"] ?? null,
				"PPICLOCATIONEXTRA_LAT" => $item["ppiclocationextra_lat"] ?? null,
			];
		}



		// Insert the data into the database
		$response = DB::table("aggregate.PLANT27_2021_RPHOTOEXTRA")->insert($data);

		return response()->json(['success' => $response]);
	}

	public function plant27_2021_rphotoextra_tlauri($tlauri)
	{
		$query = DB::table('aggregate.PLANT27_2021_RPHOTOEXTRA')
		->where('_TOP_LEVEL_AURI', $tlauri)
		->get();
		return response()->json($query);
	}


	public function plant27_2021_rphotoextra_delete($uri, $tlauri)
	{
		$deleted = DB::table("aggregate.PLANT27_2021_RPHOTOEXTRA")
		->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $tlauri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}

	public function plant27_2021_rphotoextra_single_update(Request $request, $uri)
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
			"PPICLOCATIONEXTRA_ALT" => $item["ppiclocationextra_alt"] ?? null,
			"XPIC_BEARING" => $item["xpic_bearing"] ?? null,
			"GENERATED_NOTE_NAME_65" => $item["generated_note_name_65"] ?? null,
			"PPICLOCATIONEXTRA_LNG" => $item["ppiclocationextra_lng"] ?? null,
			"PPICLOCATIONEXTRA_ACC" => $item["ppiclocationextra_acc"] ?? null,
			"PPICLOCATIONEXTRA_LAT" => $item["ppiclocationextra_lat"] ?? null,
		);



		// Perform the update operation
		$response = DB::table("aggregate.PLANT27_2021_RPHOTOEXTRA")
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
			