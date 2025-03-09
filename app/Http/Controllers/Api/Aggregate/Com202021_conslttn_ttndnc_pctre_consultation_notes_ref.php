<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;
use Illuminate\Http\Request;

	class Com202021_conslttn_ttndnc_pctre_consultation_notes_ref extends Controller
	{
		
		public function com202021_conslttn_ttndnc_pctre_consultation_notes_ref_create(Request $request){
			$data = array(
				"_URI" => $request->input("_uri"),
"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
"_CREATION_DATE" => $request->input("_creation_date"),
"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
"_DOM_AURI" => $request->input("_dom_auri"),
"_SUB_AURI" => $request->input("_sub_auri"),
"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
"PART" => $request->input("part"),

			);
			$response = DB::table("aggregate.COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_NOTES_REF")->insert($data);
			return response()->json($response);
		}
		public function com202021_conslttn_ttndnc_pctre_consultation_notes_ref_list(){
			$query = DB::select('select * from aggregate."COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_NOTES_REF"');
			return response()->json($query);
		}

	public function com202021_conslttn_ttndnc_pctre_consultation_notes_ref_update(Request $request, $tlauri)
	{
		DB::table('aggregate.COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_NOTES_REF')
			->where('_TOP_LEVEL_AURI', $tlauri)->delete();

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
				"_DOM_AURI" => $item["_dom_auri"] ?? null,
				"_SUB_AURI" => $item["_sub_auri"] ?? null,
				"_TOP_LEVEL_AURI" => $item["_top_level_auri"] ?? null,
				"PART" => $item["part"] ?? null,
			];
		}

		// Insert the data into the database
		$response = DB::table("aggregate.COM202021_CONSLTTN_TTNDNC_PCTRE_CONSULTATION_NOTES_REF")->insert($data);

		// Return a success response
		return response()->json(['success' => $response]);
	}
	}
			