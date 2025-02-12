<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
use Illuminate\Http\Request;

	class Plant27_2021_xpictureextra_blb extends Controller
	{
		
		public function plant27_2021_xpictureextra_blb_create(Request $request){
		$value = mb_convert_encoding($request->input("value"), 'UTF-8', 'UTF-8');
			$data = array(
				"_URI" => $request->input("_uri"),
				"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
				"_CREATION_DATE" => $request->input("_creation_date"),
				"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
				"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
				"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
				"VALUE" => $value,

			);
			$response = DB::table("aggregate.PLANT27_2021_XPICTUREEXTRA_BLB")->insert($data);
			return response()->json($response);
		}
		public function plant27_2021_xpictureextra_blb_list(){
			$query = DB::select('select * from aggregate."PLANT27_2021_XPICTUREEXTRA_BLB"');
			$r = array();			
			foreach($query as $val){
				$r[] = array(
					"_URI" => $val->_URI,
					"_CREATOR_URI_USER" => $val->_CREATOR_URI_USER,
					"_CREATION_DATE" => $val->_CREATION_DATE,
					"_LAST_UPDATE_URI_USER" => $val->_LAST_UPDATE_URI_USER,
					"_LAST_UPDATE_DATE" => $val->_LAST_UPDATE_DATE,
					"_TOP_LEVEL_AURI" => $val->_TOP_LEVEL_AURI,
					"VALUE" => mb_convert_encoding(stream_get_contents($val->VALUE), 'UTF-8', 'UTF-8'),
					

			);
			}
			return response()->json($r);
		}

	public function plant27_2021_xpictureextra_blb_bulk_create(Request $request)
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
				"_URI" => $item["_uri"] ?? null,
				"_CREATOR_URI_USER" => $item["_creator_uri_user"] ?? null,
				"_CREATION_DATE" => $item["_creation_date"] ?? null,
				"_LAST_UPDATE_URI_USER" => $item["_last_update_uri_user"] ?? null,
				"_LAST_UPDATE_DATE" => $item["_last_update_date"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_top_level_auri"] ?? null,
				"VALUE" => isset($item["value"]) ? mb_convert_encoding($item['value'], 'UTF-8', 'UTF-8') : null,
			];
		}

		// Insert the data into the database
		$response = DB::table("aggregate.PLANT27_2021_XPICTUREEXTRA_BLB")->insert($data);

		// Return a success response
		return response()->json(['success' => $response]);
	}


	public function plant27_2021_xpictureextra_blb_tlauri($tlauri)
	{

		$sql = "
            select
                gen.*
                from 
                aggregate.\"PLANT27_2021_XPICTUREEXTRA_BLB\" as gen
                where   gen.\"_TOP_LEVEL_AURI\" = '$tlauri'
            ";
		$query =  DB::select($sql);
		$r = array();
		foreach ($query as $val) {
			$r[] = array(
				"_URI" => $val->_URI,
				"_CREATOR_URI_USER" => $val->_CREATOR_URI_USER,
				"_CREATION_DATE" => $val->_CREATION_DATE,
				"_LAST_UPDATE_URI_USER" => $val->_LAST_UPDATE_URI_USER,
				"_LAST_UPDATE_DATE" => $val->_LAST_UPDATE_DATE,
				"_TOP_LEVEL_AURI" => $val->_TOP_LEVEL_AURI,
				"VALUE" => mb_convert_encoding(stream_get_contents($val->VALUE), 'UTF-8', 'UTF-8'),
			);
		}

		return response()->json($r);
	}


	public function plant27_2021_xpictureextra_blb_update(Request $request, $auri)
	{
		DB::table('aggregate.PLANT27_2021_XPICTUREEXTRA_BLB')->where('_TOP_LEVEL_AURI', $auri)->delete();

		// Retrieve the payload as an array of objects, excluding the token
		$payload = $request->except('token');



		// Validate that the payload is an array and is not empty
		if (!is_array($payload) || empty($payload)) {
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
				"_TOP_LEVEL_AURI" => $item["_top_level_auri"] ?? null,
				"VALUE" => isset($item["value"]) ? mb_convert_encoding($item['value'], 'UTF-8', 'UTF-8') : null,
			];
		}

		// Insert the data into the database
		$response = DB::table("aggregate.PLANT27_2021_XPICTUREEXTRA_BLB")->insert($data);

		// Return a success response
		return response()->json(['success' => $response]);
	}
	}
			