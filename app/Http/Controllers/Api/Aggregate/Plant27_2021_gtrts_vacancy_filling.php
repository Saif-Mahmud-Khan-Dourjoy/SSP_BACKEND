<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
use Illuminate\Http\Request;

	class Plant27_2021_gtrts_vacancy_filling extends Controller
	{
		
		public function plant27_2021_gtrts_vacancy_filling_create(Request $request){
			$data = array(
				"_URI" => $request->input("_uri"),
"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
"_CREATION_DATE" => $request->input("_creation_date"),
"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
"_PARENT_AURI" => $request->input("_parent_auri"),
"_ORDINAL_NUMBER" => $request->input("_ordinal_number"),
"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
"GENERATED_NOTE_NAME_242" => $request->input("generated_note_name_242"),
"FILLING_YEAR_RAW" => $request->input("filling_year_raw"),
"FILLING_YEAR" => $request->input("filling_year"),

			);
			$response = DB::table("aggregate.PLANT27_2021_GTRTS_VACANCY_FILLING")->insert($data);
			return response()->json($response);
		}
		public function plant27_2021_gtrts_vacancy_filling_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_GTRTS_VACANCY_FILLING"');
			return response()->json($query);
		}

	public function plant27_2021_gtrts_vacancy_filling_bulk_create(Request $request)
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
				"GENERATED_NOTE_NAME_242" => $item["generated_note_name_242"] ?? null,
				"FILLING_YEAR_RAW" => $item["filling_year_raw"] ?? null,
				"FILLING_YEAR" => $item["filling_year"] ?? null,
			];
		}



		// Insert the data into the database
		$response = DB::table("aggregate.PLANT27_2021_GTRTS_VACANCY_FILLING")->insert($data);

		return response()->json(['success' => $response]);
	}

	public function plant27_2021_gtrts_vacancy_filling_tlauri($tlauri)
	{
		$query = DB::table('aggregate.PLANT27_2021_GTRTS_VACANCY_FILLING')
		->where('_TOP_LEVEL_AURI', $tlauri)
		->get();

		return response()->json($query);
	}
	}
			