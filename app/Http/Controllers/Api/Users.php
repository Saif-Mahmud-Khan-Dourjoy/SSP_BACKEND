<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{

    public function users_list(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        //echo $email.$password;
        $hpass = Hash::make($password);
        $query = DB::select(
            "select users.*, jur_fd_beats.name as beat_name,jur_fd_ranges.name as range_name,jur_fd_divisions.name as division_name,jur_fd_circles.name as circle_name
from users 
left join jur_fd_beats on jur_fd_beats.code=users.beat_code
left join jur_fd_ranges on jur_fd_ranges.code=users.range_code
left join jur_fd_divisions on jur_fd_divisions.code=users.division_code
left join jur_fd_circles on jur_fd_circles.code=users.circle_code
where email='$email'
"
        );
        if (Hash::check($password, $query[0]->password)) {
            return response()->json($query[0]);
        } else {
            return response()->json(array());
        }
    }

    public function users_list_all(Request $request)
    {
        $query = DB::select('select * from users');
        return response()->json($query);
    }

    public function create_user(Request $request)
    {

        $user =  DB::table('users')->insert([




            "id" => 201,
            "name" => "Sayed Bappy 2",
            'email' => 'bappy2@gmail.com',
            "email_verified_at" => null,
            "password" => Hash::make('Bappy2@123'),
            "remember_token" => null,
            "current_team_id" => null,
            "profile_photo_path" => null,
            'created_at' => now(), // Adds the current timestamp
            'updated_at' => now(),
            "two_factor_secret" => null,
            "two_factor_recovery_codes" => null,
            "role_id" => 1,
            "office_level_id" => 1,
            "is_active" => true,
            "beat_code" => 1000,
            "range_code" => 100,
            "division_code" => 10,
            "circle_code" => 1,
            "created_by" => 1,
            "updated_by" => 1
        ]);

        return response()->json($user);
    }
}