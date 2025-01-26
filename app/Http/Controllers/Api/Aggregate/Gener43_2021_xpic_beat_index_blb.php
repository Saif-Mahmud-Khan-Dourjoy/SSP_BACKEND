<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Gener43_2021_xpic_beat_index_blb extends Controller
{

	public function gener43_2021_xpic_beat_index_blb_create(Request $request)
	{
		$value = base64_decode($request->input("VALUE"));
		$data = array(
			"_URI" => $request->input("_URI"),
			"_CREATOR_URI_USER" => $request->input("_CREATOR_URI_USER"),
			"_CREATION_DATE" => $request->input("_CREATION_DATE"),
			"_LAST_UPDATE_URI_USER" => $request->input("_LAST_UPDATE_URI_USER"),
			"_LAST_UPDATE_DATE" => $request->input("_LAST_UPDATE_DATE"),
			"_TOP_LEVEL_AURI" => $request->input("_TOP_LEVEL_AURI"),
			"VALUE" => $value,

		);
		$response = DB::table("aggregate.GENER43_2021_XPIC_BEAT_INDEX_BLB")->insert($data);
		return response()->json($response);
	}

	// public function gener43_2021_xpic_beat_index_blb_bulk_create(Request $request)
	// {

	// 	$data = array();
	// 	for ($i = 0; $i < count($request->input("_URI")); $i++) {

	// 		$data[] = array(
	// 			"_URI" => $request->input("_URI")[$i],
	// 			"_CREATOR_URI_USER" => $request->input("_CREATOR_URI_USER")[$i],
	// 			"_CREATION_DATE" => $request->input("_CREATION_DATE")[$i],
	// 			"_LAST_UPDATE_URI_USER" => $request->input("_LAST_UPDATE_URI_USER")[$i],
	// 			"_LAST_UPDATE_DATE" => $request->input("_LAST_UPDATE_DATE")[$i],
	// 			"_TOP_LEVEL_AURI" => $request->input("_TOP_LEVEL_AURI")[$i],
	// 			"VALUE" => base64_decode($request->input("VALUE")[$i]),

	// 		);
	// 	}
	// 	$response = DB::table("aggregate.GENER43_2021_XPIC_BEAT_INDEX_BLB")->insert($data);
	// 	return response()->json($response);
	// }

	public function gener43_2021_xpic_beat_index_blb_bulk_create(Request $request)
	{
		// Retrieve the payload as an array of objects, excluding the token
		$payload = $request->except('token');

		// Validate that the payload is an array and is not empty
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
				"_TOP_LEVEL_AURI" => $item["_TOP_LEVEL_AURI"] ?? null,
				"VALUE" => isset($item["VALUE"]) ? base64_decode($item["VALUE"]) : null,
			];
		}

		// Insert the data into the database
		$response = DB::table("aggregate.GENER43_2021_XPIC_BEAT_INDEX_BLB")->insert($data);

		// Return a success response
		return response()->json(['success' => $response]);
	}

	public function gener43_2021_xpic_beat_index_blb_list()
	{
		$query = DB::select('select * from aggregate."GENER43_2021_XPIC_BEAT_INDEX_BLB"');
		$r = array();
		foreach ($query as $val) {
			$r[] = array(
				"_URI" => $val->_URI,
				"_CREATOR_URI_USER" => $val->_CREATOR_URI_USER,
				"_CREATION_DATE" => $val->_CREATION_DATE,
				"_LAST_UPDATE_URI_USER" => $val->_LAST_UPDATE_URI_USER,
				"_LAST_UPDATE_DATE" => $val->_LAST_UPDATE_DATE,
				"_TOP_LEVEL_AURI" => $val->_TOP_LEVEL_AURI,
				// "VALUE" => mb_convert_encoding(stream_get_contents($val->VALUE), 'UTF-8', 'UTF-8'),
				"VALUE" => base64_encode($val->VALUE),
			);
		}
		return response()->json($r);
	}

	public function gener43_2021_xpic_beat_index_blb_id($id)
	{
		DB::EnableQueryLog();
		$sql = "
            select
                gen.*
                from 
                aggregate.\"GENER43_2021_XPIC_BEAT_INDEX_BLB\" as gen
                where   gen.\"_TOP_LEVEL_AURI\" = '$id'
            ";
		$query =  DB::select($sql);
		$q = DB::GetQueryLog();
		return response()->json($query);
	}

	public function gener43_2021_xpic_beat_index_blb_delete($uri, $auri)
	{
		$deleted = DB::table("aggregate.GENER43_2021_XPIC_BEAT_INDEX_BLB")
		->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $auri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}
	}
}