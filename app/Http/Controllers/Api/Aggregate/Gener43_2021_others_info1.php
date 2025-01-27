<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
use Illuminate\Http\Request;
	class Gener43_2021_others_info1 extends Controller
	{

	// public function gener43_2021_others_info1_create(Request $request){
	//     $data = array();
	// 	for($i=0;$i < count($request->post("_URI")); $i++){
	// 		$data[] = array(
	//             "_URI" => !empty($request->post("_URI")[$i]) ? $request->post("_URI")[$i] : null ,
	// 			"_CREATOR_URI_USER" => !empty($request->post("_CREATOR_URI_USER")[$i]) ? $request->post("_CREATOR_URI_USER")[$i] : null ,
	// 			"_CREATION_DATE" => !empty($request->post("_CREATION_DATE")[$i]) ? $request->post("_CREATION_DATE")[$i] : null ,
	// 			"_LAST_UPDATE_URI_USER" => !empty($request->post("_LAST_UPDATE_URI_USER")[$i]) ? $request->post("_LAST_UPDATE_URI_USER")[$i] : null ,
	// 			"_LAST_UPDATE_DATE" => !empty($request->post("_LAST_UPDATE_DATE")[$i]) ? $request->post("_LAST_UPDATE_DATE")[$i] : null ,
	// 			"_ORDINAL_NUMBER" => !empty($request->post("_ORDINAL_NUMBER")[$i]) ? $request->post("_ORDINAL_NUMBER")[$i] : null ,
	// 			"_PARENT_AURI" => !empty($request->post("_PARENT_AURI")[$i]) ? $request->post("_PARENT_AURI")[$i] : null ,
	// 			"_TOP_LEVEL_AURI" => !empty($request->post("_TOP_LEVEL_AURI")[$i]) ? $request->post("_TOP_LEVEL_AURI")[$i] : null ,
	// 			"GENERATED_NOTE_NAME_115" => !empty($request->post("GENERATED_NOTE_NAME_115")[$i]) ? $request->post("GENERATED_NOTE_NAME_115")[$i] : null ,
	// 			"OTHERS_JOINING_DATE" => !empty($request->post("OTHERS_JOINING_DATE")[$i]) ? $request->post("OTHERS_JOINING_DATE")[$i] : null ,
	// 			"OTHERS_NID" => !empty($request->post("OTHERS_NID")[$i]) ? $request->post("OTHERS_NID")[$i] : null ,
	// 			"OTHERS_RANK" => !empty($request->post("OTHERS_RANK")[$i]) ? $request->post("OTHERS_RANK")[$i] : null ,
	// 			"OTHERS_CELL" => !empty($request->post("OTHERS_CELL")[$i]) ? $request->post("OTHERS_CELL")[$i] : null ,
	// 			"NAME_OF_OTHERS" => !empty($request->post("NAME_OF_OTHERS")[$i]) ? $request->post("NAME_OF_OTHERS")[$i] : null ,
	// 			"OTHERS_JOINING_DATE_RAW" => !empty($request->post("OTHERS_JOINING_DATE_RAW")[$i]) ? $request->post("OTHERS_JOINING_DATE_RAW")[$i] : null ,
	// 			"OTHERS_MAIL" => !empty($request->post("OTHERS_MAIL")[$i]) ? $request->post("OTHERS_MAIL")[$i] : null ,

	//         );

	// 	}	
	// 	$response = DB::table("aggregate.GENER43_2021_OTHERS_INFO1")->insert($data);
	//         //
	//         return response()->json($response);
	// }

	public function gener43_2021_others_info1_create(Request $request)
	{
		// Retrieve the payload as an array of objects, excluding the token
		$payload = $request->except('token');

		// Validate the payload to ensure it's an array and not empty
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
				"_ORDINAL_NUMBER" => $item["_ORDINAL_NUMBER"] ?? null,
				"_PARENT_AURI" => $item["_PARENT_AURI"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_TOP_LEVEL_AURI"] ?? null,
				"GENERATED_NOTE_NAME_115" => $item["GENERATED_NOTE_NAME_115"] ?? null,
				"OTHERS_JOINING_DATE" => $item["OTHERS_JOINING_DATE"] ?? null,
				"OTHERS_NID" => $item["OTHERS_NID"] ?? null,
				"OTHERS_RANK" => $item["OTHERS_RANK"] ?? null,
				"OTHERS_CELL" => $item["OTHERS_CELL"] ?? null,
				"NAME_OF_OTHERS" => $item["NAME_OF_OTHERS"] ?? null,
				"OTHERS_JOINING_DATE_RAW" => $item["OTHERS_JOINING_DATE_RAW"] ?? null,
				"OTHERS_MAIL" => $item["OTHERS_MAIL"] ?? null,
			];
		}

		// Insert the data into the database
		$response = DB::table("aggregate.GENER43_2021_OTHERS_INFO1")->insert($data);

		return response()->json(['success' => $response]);
	}

		public function gener43_2021_others_info1_list(){
			$query = DB::select('select * from aggregate."GENER43_2021_OTHERS_INFO1"');
			return response()->json($query);
		}
		public function gener43_2021_others_info1_id($id){
            DB::EnableQueryLog();
            $sql = "
            select
                gen.*
                
                from 
                aggregate.\"GENER43_2021_OTHERS_INFO1\" as gen
                
                
                
                where  gen.\"_PARENT_AURI\" = '$id' OR gen.\"_TOP_LEVEL_AURI\" = '$id'
            ";
            $query =  DB::select($sql);
            $q=DB::GetQueryLog();
            return response()->json($query);
        }



	public function Gener43_2021_others_info1_delete($uri, $auri)
	{
		$deleted = DB::table("aggregate.GENER43_2021_OTHERS_INFO1")
		->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $auri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}

	public function Gener43_2021_others_info1_update(Request $request)
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
				"_ORDINAL_NUMBER" => $item["_ORDINAL_NUMBER"] ?? null,
				"_PARENT_AURI" => $item["_PARENT_AURI"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_TOP_LEVEL_AURI"] ?? null,
				"GENERATED_NOTE_NAME_115" => $item["GENERATED_NOTE_NAME_115"] ?? null,
				"OTHERS_JOINING_DATE" => $item["OTHERS_JOINING_DATE"] ?? null,
				"OTHERS_NID" => $item["OTHERS_NID"] ?? null,
				"OTHERS_RANK" => $item["OTHERS_RANK"] ?? null,
				"OTHERS_CELL" => $item["OTHERS_CELL"] ?? null,
				"NAME_OF_OTHERS" => $item["NAME_OF_OTHERS"] ?? null,
				"OTHERS_JOINING_DATE_RAW" => $item["OTHERS_JOINING_DATE_RAW"] ?? null,
				"OTHERS_MAIL" => $item["OTHERS_MAIL"] ?? null,
			];



			// Check if the record exists using _URI
			$existingRecord = DB::table("aggregate.GENER43_2021_OTHERS_INFO1")
			->where("_URI", $data["_URI"])
			->first();

			if ($existingRecord) {
				// Update the existing record
				$response = DB::table("aggregate.GENER43_2021_OTHERS_INFO1")
				->where("_URI", $data["_URI"])
				->update($data);
				$responses[] = [
					"_URI" => $data["_URI"],
					"action" => "updated",
					"success" => $response > 0, // true if updated successfully
				];
			} else {
				// Insert a new record
				$response = DB::table("aggregate.GENER43_2021_OTHERS_INFO1")
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
			