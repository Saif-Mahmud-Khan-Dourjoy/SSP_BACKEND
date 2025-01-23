<?php
	namespace App\Http\Controllers\Api\Aggregate;

	use App\Http\Controllers\Controller;
	use DB;

	class _registered_users extends Controller
	{
		
		public function _registered_users_create(){
			$data = array(
				"_URI" => Request::input("_uri"),
"_CREATOR_URI_USER" => Request::input("_creator_uri_user"),
"_CREATION_DATE" => Request::input("_creation_date"),
"_LAST_UPDATE_URI_USER" => Request::input("_last_update_uri_user"),
"_LAST_UPDATE_DATE" => Request::input("_last_update_date"),
"LOCAL_USERNAME" => Request::input("local_username"),
"OPENID_EMAIL" => Request::input("openid_email"),
"FULL_NAME" => Request::input("full_name"),
"BASIC_AUTH_PASSWORD" => Request::input("basic_auth_password"),
"BASIC_AUTH_SALT" => Request::input("basic_auth_salt"),
"DIGEST_AUTH_PASSWORD" => Request::input("digest_auth_password"),
"IS_REMOVED" => Request::input("is_removed"),

			);
			$insert_id = DB::table("_registered_users")->insertGetId($data);
			return response()->json($insert_id);
		}
		public function _registered_users_list(){
			$query = DB::select('select * from aggregate."_registered_users"');
			return response()->json($query);
		}
	}
			