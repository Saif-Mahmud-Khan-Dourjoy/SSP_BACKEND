<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Gener43_2021_fbli_ca_tloc_ad_upzilla extends Controller
{

	public function gener43_2021_fbli_ca_tloc_ad_upzilla_create(Request $request)
	{
		$data = array(
			"_URI" => $request->post("_uri"),
			"_CREATOR_URI_USER" => $request->post("_creator_uri_user"),
			"_CREATION_DATE" => $request->post("_creation_date"),
			"_LAST_UPDATE_URI_USER" => $request->post("_last_update_uri_user"),
			"_LAST_UPDATE_DATE" => $request->post("_last_update_date"),
			"_PARENT_AURI" => $request->post("_parent_auri"),
			"_ORDINAL_NUMBER" => $request->post("_ordinal_number"),
			"_TOP_LEVEL_AURI" => $request->post("_top_level_auri"),
			"VALUE" => $request->post("value"),

		);
		$response = DB::table("aggregate.GENER43_2021_FBLI_CA_TLOC_AD_UPZILLA")->insert($data);
		return response()->json($response);
	}
	public function gener43_2021_fbli_ca_tloc_ad_upzilla_list()
	{
		$query = DB::select('select * from aggregate."GENER43_2021_FBLI_CA_TLOC_AD_UPZILLA"');
		return response()->json($query);
	}


	public function gener43_2021_fbli_ca_tloc_ad_upzilla_id($id)
	{
		DB::EnableQueryLog();
		$sql = "
            select
                gen.*
                from 
                aggregate.\"GENER43_2021_FBLI_CA_TLOC_AD_UPZILLA\" as gen
                where  gen.\"_PARENT_AURI\" = '$id' OR gen.\"_TOP_LEVEL_AURI\" = '$id'
            ";
		$query =  DB::select($sql);
		$q = DB::GetQueryLog();
		return response()->json($query);
	}

	public function gener43_2021_fbli_ca_tloc_ad_upzilla_delete($uri, $auri)
	{
		$deleted = DB::table("aggregate.GENER43_2021_FBLI_CA_TLOC_AD_UPZILLA")
		->where('_URI', $uri)->where('_TOP_LEVEL_AURI', $auri)->delete();

		if ($deleted) {
			return response()->json(['message' => 'Record deleted successfully.']);
		} else {
			return response()->json(['message' => 'Record not found.'], 404);
		}

		
	}
}