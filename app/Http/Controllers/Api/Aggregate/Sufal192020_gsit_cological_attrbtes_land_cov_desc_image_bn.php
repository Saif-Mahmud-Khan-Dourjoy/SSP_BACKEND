<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn extends Controller
{

	public function sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn_create(Request $request)
	{

		$data = array(
			"_URI" => $request->input("_uri"),
			"_CREATOR_URI_USER" => $request->input("_creator_uri_user"),
			"_CREATION_DATE" => $request->input("_creation_date"),
			"_LAST_UPDATE_URI_USER" => $request->input("_last_update_uri_user"),
			"_LAST_UPDATE_DATE" => $request->input("_last_update_date"),
			"_PARENT_AURI" => $request->input("_parent_auri"),
			"_ORDINAL_NUMBER" => $request->input("_ordinal_number"),
			"_TOP_LEVEL_AURI" => $request->input("_top_level_auri"),
			"UNROOTED_FILE_PATH" => $request->input("unrooted_file_path"),
			"CONTENT_TYPE" => $request->input("content_type"),
			"CONTENT_LENGTH" => $request->input("content_length"),
			"CONTENT_HASH" => $request->input("content_hash"),

		);
		$insert_id = DB::table("SUFAL192020_GSIT_COLOGICAL_ATTRBTES_LAND_COV_DESC_IMAGE_BN")->insert($data);
		// $insert_id = DB::table('aggregate.SUFAL192020_GSIT_COLOGICAL_ATTRBTES_LAND_COV_DESC_IMAGE_BN')->insert($data);
		return response()->json($insert_id);
	}
	public function sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn_list()
	{
		$query = DB::select('select * from aggregate."SUFAL192020_GSIT_COLOGICAL_ATTRBTES_LAND_COV_DESC_IMAGE_BN"');
		return response()->json($query);
	}

	public function table_name()
	{
		// $query = DB::select('select table_name from information_schema.tables where table_schema = \'aggregate\' and table_name = \'SUFAL192020_GSIT_COLOGICAL_ATTRBTES_LAND_COV_DESC_IMAGE_BN\'');
		// return response()->json($query);
		// $query = DB::select('SELECT table_schema, table_name FROM information_schema.tables WHERE table_name LIKE :table_name', [
		// 	'table_name' => '%SUFAL192020%'
		// ]);
		// $query = DB::select('SELECT column_name, data_type
		//              FROM information_schema.columns
		//              WHERE table_schema = :schema AND table_name = :table', [
		// 	'schema' => 'aggregate',
		// 	'table' => 'GENER43_2021_FBLI_CA_TLOC_AD_UPZILLA'
		// ]);

		// return response()->json($query);

		// $triggers = DB::table('information_schema.triggers')
		// ->select('trigger_name', 'event_manipulation', 'action_statement')
		// ->where('event_object_table', 'GENER43_2021_CORE')
		// ->get();

		// return response()->json($triggers);
		// 		$functionDefinition = DB::select("
		//     SELECT pg_get_functiondef(p.oid)
		//     FROM pg_proc p
		//     JOIN pg_namespace n ON n.oid = p.pronamespace
		//     WHERE p.proname = 'gener43_2021_core_update_trigger_fnc';
		// ");

		// 		return response()->json($functionDefinition);

		// Grant privileges on the audit table
		// DB::statement("GRANT INSERT, SELECT, UPDATE ON TABLE aggregate.\"GENER43_2021_CORE_AUDIT\" TO urbanit;");

		// // Grant privileges on the sequence
		// DB::statement("GRANT USAGE, SELECT, UPDATE ON SEQUENCE aggregate.\"GENER43_2021_CORE_AUDIT_id_seq\" TO urbanit;");

		// // Modify the trigger function to use SECURITY DEFINER
		// DB::statement("ALTER FUNCTION public.gener43_2021_core_update_trigger_fnc() SECURITY DEFINER;");

		// return response()->json(['message' => 'Permission issues fixed successfully']);
		// $currentUser = DB::select("SELECT current_user;");
		// return response()->json($currentUser);

		$sequenceOwner = DB::select("
    SELECT n.nspname AS sequence_schema,
           c.relname AS sequence_name,
           r.rolname AS owner
    FROM pg_class c
    JOIN pg_namespace n ON n.oid = c.relnamespace
    JOIN pg_roles r ON r.oid = c.relowner
    WHERE c.relkind = 'S' AND c.relname = 'GENER43_2021_CORE_AUDIT_id_seq';
");

		return response()->json($sequenceOwner);
	}
}