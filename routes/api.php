<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


use Illuminate\Support\Facades\Route;
use Request as Request;
//use App\Http\Middleware\Has_session;
//use App\Http\Controllers\Api\Land_cover;

//Route::get('admin/login', '\App\Http\Controllers\Admin\Login@index');

// Route::group(['prefix'=>'api/admin'], function(){
//         //  echo"here";
// 	    if (Request::is('api/admin/*')) {

// 			$class = '\App\Http\Controllers\Admin\\'.ucwords(strtolower(Request::segment(2)));

//     		if (Request::segment(3)) {
// 				$method = "@".Request::segment(3);
// 				$route_method = Request::segment(3);
// 			}else{
// 				$method = "@index";
// 				$route_method = "index";
// 			}


// 			$class_method = $class.$method;

// 			if (!empty(Request::segment(4))) {
// 				$id = "/{id}";
// 			}else{
// 				$id = "";
// 			}

// 			if (Request::isMethod('post')) {
// 				if(class_exists($class)){

// 					if (!empty(Request::segment(3))) {
// 						if(method_exists($class, $route_method)){
// 							Route::post(Request::segment(2)."/".$route_method."$id", $class_method);
// 						}else{
// 							Route::post(Request::segment(2)."/".$route_method."$id", '\App\Http\Controllers\Admin\Error@admin_404');
// 						}
// 					}else{
// 						if(method_exists($class, $route_method)){
// 							Route::post(Request::segment(2), $class_method);
// 						}else{
// 							Route::post(Request::segment(2)."/".$route_method."$id", '\App\Http\Controllers\Admin\Error@admin_404');
// 						}
// 					}

// 				}else{
// 					Route::post(Request::segment(2), '\App\Http\Controllers\Admin\Error@admin_404');
// 				}
// 			}else{
// 				if(class_exists($class)){
// 					if (!empty(Request::segment(3))) {
// 						if(method_exists($class, $route_method)){
// 							Route::get(Request::segment(2)."/".$route_method."$id", $class_method);
// 						}else{
// 							Route::get(Request::segment(2)."/".$route_method."$id", '\App\Http\Controllers\Admin\Error@admin_404');
// 						}
// 					}else{
// 						if(method_exists($class, $route_method)){
// 							Route::get(Request::segment(2), $class_method);
// 						}else{
// 							Route::get(Request::segment(2)."/".$route_method."$id", '\App\Http\Controllers\Admin\Error@admin_404');
// 						}
// 					}

// 				}else{
// 					Route::get(Request::segment(2), '\App\Http\Controllers\Admin\Error@admin_404');
// 				}
// 			}

// 		}
// 		else{

// 			Route::get(Request::segment(2), '\App\Http\Controllers\Admin\Login@index');		
// 		}










Route::get('/', '\App\Http\Controllers\Api\Error@error_list');
//Route::group(['prefix'=>'api'], function(){
$token = '15694294d23a00f6852b5465cbe141f5aba0ff44';

if (Request::input("token") == $token) {

	Route::get('/test', function () {
		return Request::input("token");
	});


	Route::get('/land_cover', '\App\Http\Controllers\Api\Land_cover@land_cover_list');
	Route::get('/spatial_ref_sys', '\App\Http\Controllers\Api\Spatial_ref_sys@spatial_ref_sys_list');
	Route::get('/age_plantations', '\App\Http\Controllers\Api\Age_plantations@age_plantations_list');
	Route::get('/aspects', '\App\Http\Controllers\Api\Aspects@aspects_list');
	Route::get('/canopycover_lists', '\App\Http\Controllers\Api\Canopycover_lists@canopycover_lists_list');
	Route::get('/sources', '\App\Http\Controllers\Api\Sources@sources_list');
	Route::get('/spacing_lists', '\App\Http\Controllers\Api\Spacing_lists@spacing_lists_list');
	Route::get('/cardpoints', '\App\Http\Controllers\Api\Cardpoints@cardpoints_list');
	Route::get('/teams', '\App\Http\Controllers\Api\Teams@teams_list');
	Route::get('/polytypetrt_lists', '\App\Http\Controllers\Api\Polytypetrt_lists@polytypetrt_lists_list');
	Route::get('/project_lists_audit', '\App\Http\Controllers\Api\Project_lists_audit@project_lists_audit_list');
	Route::get('/qtr_lists', '\App\Http\Controllers\Api\Qtr_lists@qtr_lists_list');
	Route::get('/receptors', '\App\Http\Controllers\Api\Receptors@receptors_list');
	Route::get('/record_points', '\App\Http\Controllers\Api\Record_points@record_points_list');
	Route::get('/regeneration_photo', '\App\Http\Controllers\Api\Regeneration_photo@regeneration_photo_list');
	Route::get('/directions', '\App\Http\Controllers\Api\Directions@directions_list');
	Route::get('/dis_nurserys', '\App\Http\Controllers\Api\Dis_nurserys@dis_nurserys_list');
	Route::get('/division_test', '\App\Http\Controllers\Api\Division_test@division_test_list');
	Route::get('/elevations', '\App\Http\Controllers\Api\Elevations@elevations_list');
	Route::get('/email_notifications', '\App\Http\Controllers\Api\Email_notifications@email_notifications_list');
	Route::get('/failed_jobs', '\App\Http\Controllers\Api\Failed_jobs@failed_jobs_list');
	Route::get('/file_categories', '\App\Http\Controllers\Api\File_categories@file_categories_list');
	Route::get('/financial_years', '\App\Http\Controllers\Api\Financial_years@financial_years_list');
	Route::get('/forward_beat_components', '\App\Http\Controllers\Api\Forward_beat_components@forward_beat_components_list');
	Route::get('/forward_beat_history', '\App\Http\Controllers\Api\Forward_beat_history@forward_beat_history_list');
	Route::get('/forward_status', '\App\Http\Controllers\Api\Forward_status@forward_status_list');
	Route::get('/geo_beats', '\App\Http\Controllers\Api\Geo_beats@geo_beats_list');
	Route::get('/geo_district_boundary', '\App\Http\Controllers\Api\Geo_district_boundary@geo_district_boundary_list');
	Route::get('/geo_district_pts', '\App\Http\Controllers\Api\Geo_district_pts@geo_district_pts_list');
	Route::get('/geo_division_boundary', '\App\Http\Controllers\Api\Geo_division_boundary@geo_division_boundary_list');
	Route::get('/geo_division_pts', '\App\Http\Controllers\Api\Geo_division_pts@geo_division_pts_list');
	Route::get('/geo_int_boundary', '\App\Http\Controllers\Api\Geo_int_boundary@geo_int_boundary_list');
	Route::get('/geo_mauza_boundary', '\App\Http\Controllers\Api\Geo_mauza_boundary@geo_mauza_boundary_list');
	Route::get('/geo_ranges', '\App\Http\Controllers\Api\Geo_ranges@geo_ranges_list');
	Route::get('/geo_ranges_test', '\App\Http\Controllers\Api\Geo_ranges_test@geo_ranges_test_list');
	Route::get('/geo_union_boundary', '\App\Http\Controllers\Api\Geo_union_boundary@geo_union_boundary_list');
	Route::get('/geo_union_pts', '\App\Http\Controllers\Api\Geo_union_pts@geo_union_pts_list');
	Route::get('/geo_upazila_boundary', '\App\Http\Controllers\Api\Geo_upazila_boundary@geo_upazila_boundary_list');
	Route::get('/geom_vw_ssp_map', '\App\Http\Controllers\Api\Geom_vw_ssp_map@geom_vw_ssp_map_list');
	Route::get('/gpx_file_lists', '\App\Http\Controllers\Api\Gpx_file_lists@gpx_file_lists_list');
	Route::get('/historys', '\App\Http\Controllers\Api\Historys@historys_list');
	Route::get('/human_issues', '\App\Http\Controllers\Api\Human_issues@human_issues_list');
	Route::get('/index_maps', '\App\Http\Controllers\Api\Index_maps@index_maps_list');
	Route::get('/intervention_lists', '\App\Http\Controllers\Api\Intervention_lists@intervention_lists_list');
	Route::get('/intervention_sites', '\App\Http\Controllers\Api\Intervention_sites@intervention_sites_list');
	Route::get('/intervention_sites_2d', '\App\Http\Controllers\Api\Intervention_sites_2d@intervention_sites_2d_list');
	Route::get('/intervention_sites_bk', '\App\Http\Controllers\Api\Intervention_sites_bk@intervention_sites_bk_list');

	Route::get('/inundations', '\App\Http\Controllers\Api\Inundations@inundations_list');
	Route::get('/jur_ad_districts', '\App\Http\Controllers\Api\Jur_ad_districts@jur_ad_districts_list');
	Route::get('/jur_ad_divisions', '\App\Http\Controllers\Api\Jur_ad_divisions@jur_ad_divisions_list');
	Route::get('/jur_ad_upazillas', '\App\Http\Controllers\Api\Jur_ad_upazillas@jur_ad_upazillas_list');
	Route::get('/jur_fd_beats', '\App\Http\Controllers\Api\Jur_fd_beats@jur_fd_beats_list');
	Route::get('/jur_fd_circles', '\App\Http\Controllers\Api\Jur_fd_circles@jur_fd_circles_list');
	Route::get('/jur_fd_divisions', '\App\Http\Controllers\Api\Jur_fd_divisions@jur_fd_divisions_list');
	Route::get('/jur_fd_ecozones', '\App\Http\Controllers\Api\Jur_fd_ecozones@jur_fd_ecozones_list');
	Route::get('/jur_fd_levels', '\App\Http\Controllers\Api\Jur_fd_levels@jur_fd_levels_list');
	Route::get('/jur_fd_ranges', '\App\Http\Controllers\Api\Jur_fd_ranges@jur_fd_ranges_list');
	Route::get('/landcover_class_lists', '\App\Http\Controllers\Api\Landcover_class_lists@landcover_class_lists_list');
	Route::get('/lmvh_lists', '\App\Http\Controllers\Api\Lmvh_lists@lmvh_lists_list');
	Route::get('/logistic_conditions', '\App\Http\Controllers\Api\Logistic_conditions@logistic_conditions_list');
	Route::get('/migrations', '\App\Http\Controllers\Api\Migrations@migrations_list');
	Route::get('/month_inun_lists', '\App\Http\Controllers\Api\Month_inun_lists@month_inun_lists_list');
	Route::get('/months', '\App\Http\Controllers\Api\Months@months_list');
	Route::get('/mouza_types', '\App\Http\Controllers\Api\Mouza_types@mouza_types_list');
	Route::get('/natural_issues', '\App\Http\Controllers\Api\Natural_issues@natural_issues_list');
	Route::get('/nursery_location', '\App\Http\Controllers\Api\Nursery_location@nursery_location_list');
	Route::get('/occupation_coms', '\App\Http\Controllers\Api\Occupation_coms@occupation_coms_list');
	Route::get('/origins', '\App\Http\Controllers\Api\Origins@origins_list');
	Route::get('/password_resets', '\App\Http\Controllers\Api\Password_resets@password_resets_list');
	Route::get('/pct10_lists', '\App\Http\Controllers\Api\Pct10_lists@pct10_lists_list');
	Route::get('/percents', '\App\Http\Controllers\Api\Percents@percents_list');
	Route::get('/personal_access_tokens', '\App\Http\Controllers\Api\Personal_access_tokens@personal_access_tokens_list');
	Route::get('/plantation_journals', '\App\Http\Controllers\Api\Plantation_journals@plantation_journals_list');
	Route::get('/planting_modes', '\App\Http\Controllers\Api\Planting_modes@planting_modes_list');
	Route::get('/plot_types', '\App\Http\Controllers\Api\Plot_types@plot_types_list');
	Route::get('/polytypes', '\App\Http\Controllers\Api\Polytypes@polytypes_list');
	Route::get('/repro_types', '\App\Http\Controllers\Api\Repro_types@repro_types_list');
	Route::get('/resources', '\App\Http\Controllers\Api\Resources@resources_list');
	Route::get('/roles', '\App\Http\Controllers\Api\Roles@roles_list');
	Route::get('/sessions', '\App\Http\Controllers\Api\Sessions@sessions_list');
	Route::get('/slopes', '\App\Http\Controllers\Api\Slopes@slopes_list');
	Route::get('/soils', '\App\Http\Controllers\Api\Soils@soils_list');
	Route::get('/project_lists', '\App\Http\Controllers\Api\Project_lists@project_lists_list');
	Route::get('/ssp_gpx_upload', '\App\Http\Controllers\Api\Ssp_gpx_upload@ssp_gpx_upload_list');
	Route::get('/structures', '\App\Http\Controllers\Api\Structures@structures_list');
	Route::get('/survey_types', '\App\Http\Controllers\Api\Survey_types@survey_types_list');
	Route::get('/team_user', '\App\Http\Controllers\Api\Team_user@team_user_list');
	Route::get('/th_plants', '\App\Http\Controllers\Api\Th_plants@th_plants_list');
	Route::get('/topographies', '\App\Http\Controllers\Api\Topographies@topographies_list');
	Route::get('/treesperha_lists', '\App\Http\Controllers\Api\Treesperha_lists@treesperha_lists_list');
	Route::get('/user_logs', '\App\Http\Controllers\Api\User_logs@user_logs_list');
	Route::post('/users', '\App\Http\Controllers\Api\Users@users_list');
	Route::get('/users_all_list', '\App\Http\Controllers\Api\Users@users_list_all');
	Route::post('/create_user', '\App\Http\Controllers\Api\Users@create_user');







	Route::get('/vegpct_lists', '\App\Http\Controllers\Api\Vegpct_lists@vegpct_lists_list');
	Route::get('/yes_no_lists', '\App\Http\Controllers\Api\Yes_no_lists@yes_no_lists_list');
	Route::get('/team_invitations', '\App\Http\Controllers\Api\Team_invitations@team_invitations_list');
	//********************//
	//Aggregate Schema Start
	// -------com202021_conslttn_ttndnc_pctre_consultation_attendence_blb----
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_attendence_blb', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb@com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_list');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb@com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_create');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_bulk_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb@com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_bulk_create');
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_tlauri/{tlauri}', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb@com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_tlauri');
	Route::delete('/com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb@com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_delete');
	Route::put('/com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_update/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb@com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_update');
	Route::delete('/com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_delete_all', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_blb@com202021_conslttn_ttndnc_pctre_consultation_attendence_blb_delete_all');
	// -------com202021_conslttn_ttndnc_pctre_consultation_attendence_blb----
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_attendence_bn', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_bn@com202021_conslttn_ttndnc_pctre_consultation_attendence_bn_list');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_attendence_bn_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_bn@com202021_conslttn_ttndnc_pctre_consultation_attendence_bn_create');
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_attendence_ref', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_ref@com202021_conslttn_ttndnc_pctre_consultation_attendence_ref_list');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_attendence_ref_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_attendence_ref@com202021_conslttn_ttndnc_pctre_consultation_attendence_ref_create');
	Route::get('/com202021_consultation_picture_bn', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_bn@com202021_consultation_picture_bn_list');
	Route::post('/com202021_consultation_picture_bn_create', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_bn@com202021_consultation_picture_bn_create');
	Route::get('/com202021_consultation_picture_ref', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_ref@com202021_consultation_picture_ref_list');
	Route::post('/com202021_consultation_picture_ref_create', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_ref@com202021_consultation_picture_ref_create');
	Route::get('/com202021_core_audit', '\App\Http\Controllers\Api\Aggregate\Com202021_core_audit@com202021_core_audit_list');
	Route::post('/com202021_core_audit_create', '\App\Http\Controllers\Api\Aggregate\Com202021_core_audit@com202021_core_audit_create');
	Route::get('/com202021_core_test', '\App\Http\Controllers\Api\Aggregate\Com202021_core_test@com202021_core_test_list');
	Route::post('/com202021_core_test_create', '\App\Http\Controllers\Api\Aggregate\Com202021_core_test@com202021_core_test_create');
	Route::get('/gener43_2021_core', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core@gener43_2021_core_list');
	Route::get('/gener43_2021_core_id/{id}/{id2}/{id3}/{id4}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core@gener43_2021_core_id');
	Route::post('/gener43_2021_core_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core@gener43_2021_core_create');
	Route::get('/gener43_2021_core_uri/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core@gener43_2021_core_uri');
	Route::put('/gener43_2021_core_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core@gener43_2021_core_update');


	Route::get('/gener43_2021_fbli_ca_tloc_ad_upzilla', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_ca_tloc_ad_upzilla@gener43_2021_fbli_ca_tloc_ad_upzilla_list');
	Route::get('/gener43_2021_fbli_ca_tloc_ad_upzilla_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_ca_tloc_ad_upzilla@gener43_2021_fbli_ca_tloc_ad_upzilla_id');
	Route::post('/gener43_2021_fbli_ca_tloc_ad_upzilla_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_ca_tloc_ad_upzilla@gener43_2021_fbli_ca_tloc_ad_upzilla_create');
	Route::delete('/gener43_2021_fbli_ca_tloc_ad_upzilla_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_ca_tloc_ad_upzilla@gener43_2021_fbli_ca_tloc_ad_upzilla_delete');
	Route::put('/gener43_2021_fbli_ca_tloc_ad_upzilla_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_ca_tloc_ad_upzilla@gener43_2021_fbli_ca_tloc_ad_upzilla_update');


	Route::get('/gener43_2021_others_info1', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_others_info1@gener43_2021_others_info1_list');
	Route::post('/gener43_2021_others_info1_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_others_info1@gener43_2021_others_info1_create');
	Route::put('/gener43_2021_others_info1_update', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_others_info1@gener43_2021_others_info1_update');
	Route::put('/gener43_2021_others_info1_single_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_others_info1@gener43_2021_others_info1_single_update');



	Route::delete('/gener43_2021_others_info1_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_others_info1@gener43_2021_others_info1_delete');
	Route::get('/gener43_2021_others_info1_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_others_info1@gener43_2021_others_info1_id');
	Route::get('/gener43_2021_overallnotes_ima_blb', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_blb@gener43_2021_overallnotes_ima_blb_list');
	Route::post('/gener43_2021_overallnotes_ima_blb_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_blb@gener43_2021_overallnotes_ima_blb_create');
	Route::delete('/gener43_2021_overallnotes_ima_blb_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_blb@gener43_2021_overallnotes_ima_blb_delete');
	Route::delete('/gener43_2021_overallnotes_ima_blb_delete_all', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_blb@gener43_2021_overallnotes_ima_blb_delete_all');

	Route::put('/gener43_2021_overallnotes_ima_blb_update/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_blb@gener43_2021_overallnotes_ima_blb_update');


	Route::post('/gener43_2021_overallnotes_ima_blb_bulk_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_blb@gener43_2021_overallnotes_ima_blb_bulk_create');
	Route::get('/gener43_2021_overallnotes_ima_blb_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_blb@gener43_2021_overallnotes_ima_blb_id');
	Route::get('/plant27_2021_core', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_core@plant27_2021_core_list');
	Route::get('/plant27_2021_core_list/{id}/{id2}/{id3}/{id4}', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_core@plant27_2021_core_list');
	Route::post('/plant27_2021_core_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_core@plant27_2021_core_create');
	Route::get('/plant27_2021_filling_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_filling_month@plant27_2021_filling_month_list');
	Route::post('/plant27_2021_filling_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_filling_month@plant27_2021_filling_month_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_e_blb', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_e_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_e_blb_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_e_blb_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_e_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_e_blb_create');
	Route::get('/odk_b39_2022_core', '\App\Http\Controllers\Api\Aggregate\Odk_b39_2022_core@odk_b39_2022_core_list');
	Route::post('/odk_b39_2022_core_create', '\App\Http\Controllers\Api\Aggregate\Odk_b39_2022_core@odk_b39_2022_core_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_n_bn_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_n_ref', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_n_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_n_ref_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_n_ref_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_n_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_n_ref_create');
	Route::get('/plant27_2021_gtrts_planting_planting_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_planting_planting_month@plant27_2021_gtrts_planting_planting_month_list');
	Route::post('/plant27_2021_gtrts_planting_planting_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_planting_planting_month@plant27_2021_gtrts_planting_planting_month_create');
	Route::get('/plant27_2021_gtrts_vacancy_filling', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_vacancy_filling@plant27_2021_gtrts_vacancy_filling_list');
	Route::post('/plant27_2021_gtrts_vacancy_filling_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_vacancy_filling@plant27_2021_gtrts_vacancy_filling_create');
	Route::get('/plant27_2021_gtrts_weeding', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_weeding@plant27_2021_gtrts_weeding_list');
	Route::post('/plant27_2021_gtrts_weeding_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_weeding@plant27_2021_gtrts_weeding_create');
	Route::get('/sufal192020_overallnotes_ima_bn', '\App\Http\Controllers\Api\Aggregate\Sufal192020_overallnotes_ima_bn@sufal192020_overallnotes_ima_bn_list');
	Route::post('/sufal192020_overallnotes_ima_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_overallnotes_ima_bn@sufal192020_overallnotes_ima_bn_create');
	Route::get('/sufal192020_overallnotes_ima_ref', '\App\Http\Controllers\Api\Aggregate\Sufal192020_overallnotes_ima_ref@sufal192020_overallnotes_ima_ref_list');
	Route::post('/sufal192020_overallnotes_ima_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_overallnotes_ima_ref@sufal192020_overallnotes_ima_ref_create');
	Route::get('/sufal192020_planting_plan_gplanting_gspp', '\App\Http\Controllers\Api\Aggregate\Sufal192020_planting_plan_gplanting_gspp@sufal192020_planting_plan_gplanting_gspp_list');
	Route::post('/sufal192020_planting_plan_gplanting_gspp_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_planting_plan_gplanting_gspp@sufal192020_planting_plan_gplanting_gspp_create');
	Route::get('/sufal192020_plantngplngplntnggnrsry_spp_repeat', '\App\Http\Controllers\Api\Aggregate\Sufal192020_plantngplngplntnggnrsry_spp_repeat@sufal192020_plantngplngplntnggnrsry_spp_repeat_list');
	Route::post('/sufal192020_plantngplngplntnggnrsry_spp_repeat_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_plantngplngplntnggnrsry_spp_repeat@sufal192020_plantngplngplntnggnrsry_spp_repeat_create');
	Route::get('/sufal192020_rphotoextra', '\App\Http\Controllers\Api\Aggregate\Sufal192020_rphotoextra@sufal192020_rphotoextra_list');
	Route::post('/sufal192020_rphotoextra_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_rphotoextra@sufal192020_rphotoextra_create');
	Route::get('/sufal192020_s_site', '\App\Http\Controllers\Api\Aggregate\Sufal192020_s_site@sufal192020_s_site_list');
	Route::post('/sufal192020_s_site_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_s_site@sufal192020_s_site_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_bn', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_bn_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_bn_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_ref', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_ref_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_ref_create');
	Route::get('/_form_info_xform_blb', '\App\Http\Controllers\Api\Aggregate\_form_info_xform_blb@_form_info_xform_blb_list');
	Route::post('/_form_info_xform_blb_create', '\App\Http\Controllers\Api\Aggregate\_form_info_xform_blb@_form_info_xform_blb_create');
	Route::get('/_form_info_manifest_bin', '\App\Http\Controllers\Api\Aggregate\_form_info_manifest_bin@_form_info_manifest_bin_list');
	Route::post('/_form_info_manifest_bin_create', '\App\Http\Controllers\Api\Aggregate\_form_info_manifest_bin@_form_info_manifest_bin_create');
	Route::get('/_form_info_manifest_blb', '\App\Http\Controllers\Api\Aggregate\_form_info_manifest_blb@_form_info_manifest_blb_list');
	Route::post('/_form_info_manifest_blb_create', '\App\Http\Controllers\Api\Aggregate\_form_info_manifest_blb@_form_info_manifest_blb_create');
	Route::get('/_form_info_manifest_ref', '\App\Http\Controllers\Api\Aggregate\_form_info_manifest_ref@_form_info_manifest_ref_list');
	Route::post('/_form_info_manifest_ref_create', '\App\Http\Controllers\Api\Aggregate\_form_info_manifest_ref@_form_info_manifest_ref_create');
	Route::get('/sufal192020_gregen_reg_cen_to_w_bn', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_w_bn@sufal192020_gregen_reg_cen_to_w_bn_list');
	Route::post('/sufal192020_gregen_reg_cen_to_w_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_w_bn@sufal192020_gregen_reg_cen_to_w_bn_create');
	Route::get('/sufal192020_gregen_reg_cen_to_w_ref', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_w_ref@sufal192020_gregen_reg_cen_to_w_ref_list');
	Route::post('/sufal192020_gregen_reg_cen_to_w_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_w_ref@sufal192020_gregen_reg_cen_to_w_ref_create');
	// ----com202021_conslttn_ttndnc_pctre_consultation_notes_blb-----
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_notes_blb', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_blb@com202021_conslttn_ttndnc_pctre_consultation_notes_blb_list');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_notes_blb_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_blb@com202021_conslttn_ttndnc_pctre_consultation_notes_blb_create');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_notes_blb_bulk_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_blb@com202021_conslttn_ttndnc_pctre_consultation_notes_blb_bulk_create');
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_notes_blb_tlauri/{tlauri}', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_blb@com202021_conslttn_ttndnc_pctre_consultation_notes_blb_tlauri');
	Route::delete('/com202021_conslttn_ttndnc_pctre_consultation_notes_blb_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_blb@com202021_conslttn_ttndnc_pctre_consultation_notes_blb_delete');
	Route::put('/com202021_conslttn_ttndnc_pctre_consultation_notes_blb_update/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_blb@com202021_conslttn_ttndnc_pctre_consultation_notes_blb_update');
	Route::delete('/com202021_conslttn_ttndnc_pctre_consultation_notes_blb_delete_all', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_blb@com202021_conslttn_ttndnc_pctre_consultation_notes_blb_delete_all');

	// ----com202021_conslttn_ttndnc_pctre_consultation_notes_blb-----
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_ref', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_ref_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_ref_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_blb', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_blb_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_s_blb_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_blb', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_blb_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_blb_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_bn', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_bn_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_bn_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_ref', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_ref_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_w_ref_create');
	Route::get('/sufal_13_2021_gregen_spp_regen', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_spp_regen@sufal_13_2021_gregen_spp_regen_list');
	Route::post('/sufal_13_2021_gregen_spp_regen_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_spp_regen@sufal_13_2021_gregen_spp_regen_create');
	Route::get('/sufal_13_2021_gr_regen', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gr_regen@sufal_13_2021_gr_regen_list');
	Route::post('/sufal_13_2021_gr_regen_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gr_regen@sufal_13_2021_gr_regen_create');
	Route::get('/_backend_actions', '\App\Http\Controllers\Api\Aggregate\_backend_actions@_backend_actions_list');
	Route::post('/_backend_actions_create', '\App\Http\Controllers\Api\Aggregate\_backend_actions@_backend_actions_create');
	Route::get('/_filter_group', '\App\Http\Controllers\Api\Aggregate\_filter_group@_filter_group_list');
	Route::post('/_filter_group_create', '\App\Http\Controllers\Api\Aggregate\_filter_group@_filter_group_create');
	Route::get('/_form_data_model', '\App\Http\Controllers\Api\Aggregate\_form_data_model@_form_data_model_list');
	Route::post('/_form_data_model_create', '\App\Http\Controllers\Api\Aggregate\_form_data_model@_form_data_model_create');
	Route::get('/_form_info', '\App\Http\Controllers\Api\Aggregate\_form_info@_form_info_list');
	Route::post('/_form_info_create', '\App\Http\Controllers\Api\Aggregate\_form_info@_form_info_create');
	Route::get('/_form_info_fileset', '\App\Http\Controllers\Api\Aggregate\_form_info_fileset@_form_info_fileset_list');
	Route::post('/_form_info_fileset_create', '\App\Http\Controllers\Api\Aggregate\_form_info_fileset@_form_info_fileset_create');
	Route::get('/_form_info_submission_association', '\App\Http\Controllers\Api\Aggregate\_form_info_submission_association@_form_info_submission_association_list');
	Route::post('/_form_info_submission_association_create', '\App\Http\Controllers\Api\Aggregate\_form_info_submission_association@_form_info_submission_association_create');
	Route::get('/_form_info_xform_bin', '\App\Http\Controllers\Api\Aggregate\_form_info_xform_bin@_form_info_xform_bin_list');
	Route::post('/_form_info_xform_bin_create', '\App\Http\Controllers\Api\Aggregate\_form_info_xform_bin@_form_info_xform_bin_create');
	Route::get('/_form_info_xform_ref', '\App\Http\Controllers\Api\Aggregate\_form_info_xform_ref@_form_info_xform_ref_list');
	Route::post('/_form_info_xform_ref_create', '\App\Http\Controllers\Api\Aggregate\_form_info_xform_ref@_form_info_xform_ref_create');
	Route::get('/_form_service_cursor_2', '\App\Http\Controllers\Api\Aggregate\_form_service_cursor_2@_form_service_cursor_2_list');
	Route::post('/_form_service_cursor_2_create', '\App\Http\Controllers\Api\Aggregate\_form_service_cursor_2@_form_service_cursor_2_create');
	Route::get('/_granted_authority_hierarchy', '\App\Http\Controllers\Api\Aggregate\_granted_authority_hierarchy@_granted_authority_hierarchy_list');
	Route::post('/_granted_authority_hierarchy_create', '\App\Http\Controllers\Api\Aggregate\_granted_authority_hierarchy@_granted_authority_hierarchy_create');
	Route::get('/_misc_tasks', '\App\Http\Controllers\Api\Aggregate\_misc_tasks@_misc_tasks_list');
	Route::post('/_misc_tasks_create', '\App\Http\Controllers\Api\Aggregate\_misc_tasks@_misc_tasks_create');
	Route::get('/_persistent_result_file_bin', '\App\Http\Controllers\Api\Aggregate\_persistent_result_file_bin@_persistent_result_file_bin_list');
	Route::post('/_persistent_result_file_bin_create', '\App\Http\Controllers\Api\Aggregate\_persistent_result_file_bin@_persistent_result_file_bin_create');
	Route::get('/_persistent_result_file_blb', '\App\Http\Controllers\Api\Aggregate\_persistent_result_file_blb@_persistent_result_file_blb_list');
	Route::post('/_persistent_result_file_blb_create', '\App\Http\Controllers\Api\Aggregate\_persistent_result_file_blb@_persistent_result_file_blb_create');
	Route::get('/_persistent_result_file_ref', '\App\Http\Controllers\Api\Aggregate\_persistent_result_file_ref@_persistent_result_file_ref_list');
	Route::post('/_persistent_result_file_ref_create', '\App\Http\Controllers\Api\Aggregate\_persistent_result_file_ref@_persistent_result_file_ref_create');
	Route::get('/_persistent_results', '\App\Http\Controllers\Api\Aggregate\_persistent_results@_persistent_results_list');
	Route::post('/_persistent_results_create', '\App\Http\Controllers\Api\Aggregate\_persistent_results@_persistent_results_create');
	Route::get('/_registered_users', '\App\Http\Controllers\Api\Aggregate\_registered_users@_registered_users_list');
	Route::post('/_registered_users_create', '\App\Http\Controllers\Api\Aggregate\_registered_users@_registered_users_create');
	Route::get('/_security_revisions', '\App\Http\Controllers\Api\Aggregate\_security_revisions@_security_revisions_list');
	Route::post('/_security_revisions_create', '\App\Http\Controllers\Api\Aggregate\_security_revisions@_security_revisions_create');
	Route::get('/_server_preferences_properties', '\App\Http\Controllers\Api\Aggregate\_server_preferences_properties@_server_preferences_properties_list');
	Route::post('/_server_preferences_properties_create', '\App\Http\Controllers\Api\Aggregate\_server_preferences_properties@_server_preferences_properties_create');
	Route::get('/_task_lock', '\App\Http\Controllers\Api\Aggregate\_task_lock@_task_lock_list');
	Route::post('/_task_lock_create', '\App\Http\Controllers\Api\Aggregate\_task_lock@_task_lock_create');
	//---- core ------
	Route::get('/com202021_core', '\App\Http\Controllers\Api\Aggregate\Com202021_core@com202021_core_list');
	Route::post('/com202021_core_create', '\App\Http\Controllers\Api\Aggregate\Com202021_core@com202021_core_create');
	Route::get('/com202021_core_list_by_created_by/{createdBy}', '\App\Http\Controllers\Api\Aggregate\Com202021_core@com202021_core_list_by_created_by');
	Route::get('/com202021_core_uri/{uri}', '\App\Http\Controllers\Api\Aggregate\Com202021_core@com202021_core_uri');
	Route::delete('/com202021_core_single_delete/{uri}', '\App\Http\Controllers\Api\Aggregate\Com202021_core@com202021_core_single_delete');
	Route::put('/com202021_core_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Com202021_core@com202021_core_update');
	//---- core ------

	Route::get('/gener43_2021_core_audit', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core_audit@gener43_2021_core_audit_list');
	Route::post('/gener43_2021_core_audit_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core_audit@gener43_2021_core_audit_create');
	Route::get('/gener43_2021_core_test', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core_test@gener43_2021_core_test_list');
	Route::post('/gener43_2021_core_test_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_core_test@gener43_2021_core_test_create');
	Route::get('/gener43_2021_fbli_m_sh1', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_m_sh1@gener43_2021_fbli_m_sh1_list');
	Route::post('/gener43_2021_fbli_m_sh1_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_m_sh1@gener43_2021_fbli_m_sh1_create');
	Route::put('/gener43_2021_fbli_m_sh1_update', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_m_sh1@gener43_2021_fbli_m_sh1_update');
	Route::put('/gener43_2021_fbli_m_sh1_single_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_m_sh1@gener43_2021_fbli_m_sh1_single_update');

	Route::get('/gener43_2021_fbli_m_sh1_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_m_sh1@gener43_2021_fbli_m_sh1_id');
	Route::delete('/gener43_2021_fbli_m_sh1_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_fbli_m_sh1@gener43_2021_fbli_m_sh1_delete');
	Route::get('/gener43_2021_gnatissues_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gnatissues@gener43_2021_gnatissues_id');
	Route::get('/gener43_2021_ghumissues_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_ghumissues@gener43_2021_ghumissues_id');
	// ----com202021_stakeholder_engagement----
	Route::get('/com202021_stakeholder_engagement', '\App\Http\Controllers\Api\Aggregate\Com202021_stakeholder_engagement@com202021_stakeholder_engagement_list');
	Route::post('/com202021_stakeholder_engagement_create', '\App\Http\Controllers\Api\Aggregate\Com202021_stakeholder_engagement@com202021_stakeholder_engagement_create');
	Route::post('/com202021_stakeholder_engagement_bulk_create', '\App\Http\Controllers\Api\Aggregate\Com202021_stakeholder_engagement@com202021_stakeholder_engagement_bulk_create');
	Route::get('/com202021_stakeholder_engagement_tlauri/{tlauri}', '\App\Http\Controllers\Api\Aggregate\Com202021_stakeholder_engagement@com202021_stakeholder_engagement_tlauri');
	Route::delete('/com202021_stakeholder_engagement_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_stakeholder_engagement@com202021_stakeholder_engagement_delete');
	Route::put('/com202021_stakeholder_engagement_single_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Com202021_stakeholder_engagement@com202021_stakeholder_engagement_single_update');
	// ----com202021_stakeholder_engagement----
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_e_bn', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_e_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_e_bn_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_e_bn_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_e_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_e_bn_create');
	Route::get('/plant27_2021_core_audit', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_core_audit@plant27_2021_core_audit_list');
	Route::post('/plant27_2021_core_audit_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_core_audit@plant27_2021_core_audit_create');
	Route::get('/plant27_2021_core_test', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_core_test@plant27_2021_core_test_list');
	Route::post('/plant27_2021_core_test_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_core_test@plant27_2021_core_test_create');
	Route::get('/gener43_2021_xpic_beat_index_blb', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_blb@gener43_2021_xpic_beat_index_blb_list');
	Route::post('/gener43_2021_xpic_beat_index_blb_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_blb@gener43_2021_xpic_beat_index_blb_create');
	Route::put('/gener43_2021_xpic_beat_index_blb_update/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_blb@gener43_2021_xpic_beat_index_blb_update');

	Route::delete('/gener43_2021_xpic_beat_index_blb_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_blb@gener43_2021_xpic_beat_index_blb_delete');
	Route::delete('/gener43_2021_xpic_beat_index_blb_delete_all', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_blb@gener43_2021_xpic_beat_index_blb_delete_all');

	Route::post('/gener43_2021_xpic_beat_index_blb_bulk_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_blb@gener43_2021_xpic_beat_index_blb_bulk_create');
	Route::get('/gener43_2021_xpic_beat_index_blb_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_blb@gener43_2021_xpic_beat_index_blb_id');

	Route::get('/sufal192020_core', '\App\Http\Controllers\Api\Aggregate\Sufal192020_core@sufal192020_core_list');
	Route::post('/sufal192020_core_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_core@sufal192020_core_create');
	Route::get('/sufal192020_gregen_reg_cen_to_e_blb', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_e_blb@sufal192020_gregen_reg_cen_to_e_blb_list');
	Route::post('/sufal192020_gregen_reg_cen_to_e_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_e_blb@sufal192020_gregen_reg_cen_to_e_blb_create');
	Route::get('/sufal192020_gregen_reg_cen_to_e_bn', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_e_bn@sufal192020_gregen_reg_cen_to_e_bn_list');
	Route::post('/sufal192020_gregen_reg_cen_to_e_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_e_bn@sufal192020_gregen_reg_cen_to_e_bn_create');
	Route::get('/sufal192020_gregen_reg_cen_to_e_ref', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_e_ref@sufal192020_gregen_reg_cen_to_e_ref_list');
	Route::post('/sufal192020_gregen_reg_cen_to_e_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_e_ref@sufal192020_gregen_reg_cen_to_e_ref_create');
	Route::get('/sufal192020_gregen_reg_cen_to_n_blb', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_n_blb@sufal192020_gregen_reg_cen_to_n_blb_list');
	Route::post('/sufal192020_gregen_reg_cen_to_n_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_n_blb@sufal192020_gregen_reg_cen_to_n_blb_create');
	Route::get('/sufal192020_gregen_reg_cen_to_n_bn', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_n_bn@sufal192020_gregen_reg_cen_to_n_bn_list');
	Route::post('/sufal192020_gregen_reg_cen_to_n_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_n_bn@sufal192020_gregen_reg_cen_to_n_bn_create');
	Route::get('/sufal192020_gregen_reg_cen_to_n_ref', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_n_ref@sufal192020_gregen_reg_cen_to_n_ref_list');
	Route::post('/sufal192020_gregen_reg_cen_to_n_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_n_ref@sufal192020_gregen_reg_cen_to_n_ref_create');
	Route::get('/sufal192020_gregen_reg_cen_to_s_blb', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_s_blb@sufal192020_gregen_reg_cen_to_s_blb_list');
	Route::post('/sufal192020_gregen_reg_cen_to_s_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_s_blb@sufal192020_gregen_reg_cen_to_s_blb_create');
	Route::get('/sufal192020_gregen_reg_cen_to_s_bn', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_s_bn@sufal192020_gregen_reg_cen_to_s_bn_list');
	Route::post('/sufal192020_gregen_reg_cen_to_s_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_s_bn@sufal192020_gregen_reg_cen_to_s_bn_create');
	Route::get('/sufal192020_gregen_reg_cen_to_s_ref', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_s_ref@sufal192020_gregen_reg_cen_to_s_ref_list');
	Route::post('/sufal192020_gregen_reg_cen_to_s_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_s_ref@sufal192020_gregen_reg_cen_to_s_ref_create');
	Route::get('/sufal192020_gregen_reg_cen_to_w_blb', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_w_blb@sufal192020_gregen_reg_cen_to_w_blb_list');
	Route::post('/sufal192020_gregen_reg_cen_to_w_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_reg_cen_to_w_blb@sufal192020_gregen_reg_cen_to_w_blb_create');
	Route::get('/sufal192020_gregen_spp_regen', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_spp_regen@sufal192020_gregen_spp_regen_list');
	Route::post('/sufal192020_gregen_spp_regen_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gregen_spp_regen@sufal192020_gregen_spp_regen_create');
	Route::get('/sufal192020_gr_regen', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gr_regen@sufal192020_gr_regen_list');
	Route::post('/sufal192020_gr_regen_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gr_regen@sufal192020_gr_regen_create');
	Route::get('/sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb@sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb_list');
	Route::post('/sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb@sufal192020_gsit_cological_attrbtes_land_cov_desc_image_blb_create');
	Route::get('/sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn@sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn_list');

	Route::get('/table_name', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn@table_name');

	Route::post('/sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn@sufal192020_gsit_cological_attrbtes_land_cov_desc_image_bn_create');
	Route::get('/sufal192020_gsit_cological_attrbtes_land_cov_desc_image_ref', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_ref@sufal192020_gsit_cological_attrbtes_land_cov_desc_image_ref_list');
	Route::post('/sufal192020_gsit_cological_attrbtes_land_cov_desc_image_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gsit_cological_attrbtes_land_cov_desc_image_ref@sufal192020_gsit_cological_attrbtes_land_cov_desc_image_ref_create');
	Route::get('/sufal192020_gtrts_cleaning_cutting_cutting_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_cleaning_cutting_cutting_month@sufal192020_gtrts_cleaning_cutting_cutting_month_list');
	Route::post('/sufal192020_gtrts_cleaning_cutting_cutting_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_cleaning_cutting_cutting_month@sufal192020_gtrts_cleaning_cutting_cutting_month_create');
	Route::get('/sufal192020_gtrts_climber_cutting_climber_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_climber_cutting_climber_month@sufal192020_gtrts_climber_cutting_climber_month_list');
	Route::post('/sufal192020_gtrts_climber_cutting_climber_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_climber_cutting_climber_month@sufal192020_gtrts_climber_cutting_climber_month_create');
	Route::get('/sufal192020_gtrts_commnty_protcton_community_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_commnty_protcton_community_month@sufal192020_gtrts_commnty_protcton_community_month_list');
	Route::post('/sufal192020_gtrts_commnty_protcton_community_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_commnty_protcton_community_month@sufal192020_gtrts_commnty_protcton_community_month_create');
	Route::get('/sufal192020_gtrts_composts_pit_composts_pit_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_composts_pit_composts_pit_month@sufal192020_gtrts_composts_pit_composts_pit_month_list');
	Route::post('/sufal192020_gtrts_composts_pit_composts_pit_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_composts_pit_composts_pit_month@sufal192020_gtrts_composts_pit_composts_pit_month_create');
	Route::get('/sufal192020_gtrts_compost_compost_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_compost_compost_month@sufal192020_gtrts_compost_compost_month_list');
	Route::post('/sufal192020_gtrts_compost_compost_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_compost_compost_month@sufal192020_gtrts_compost_compost_month_create');
	Route::get('/sufal192020_gtrts_layout_layout_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_layout_layout_month@sufal192020_gtrts_layout_layout_month_list');
	Route::post('/sufal192020_gtrts_layout_layout_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_layout_layout_month@sufal192020_gtrts_layout_layout_month_create');
	Route::get('/sufal192020_gtrts_nuersery_raising_nursery_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_nuersery_raising_nursery_month@sufal192020_gtrts_nuersery_raising_nursery_month_list');
	Route::post('/sufal192020_gtrts_nuersery_raising_nursery_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_nuersery_raising_nursery_month@sufal192020_gtrts_nuersery_raising_nursery_month_create');
	Route::get('/sufal192020_gtrts_other_treatment_other_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_other_treatment_other_month@sufal192020_gtrts_other_treatment_other_month_list');
	Route::post('/sufal192020_gtrts_other_treatment_other_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_other_treatment_other_month@sufal192020_gtrts_other_treatment_other_month_create');
	Route::get('/sufal192020_gtrts_pit_digging_digging_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_pit_digging_digging_month@sufal192020_gtrts_pit_digging_digging_month_list');
	Route::post('/sufal192020_gtrts_pit_digging_digging_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_pit_digging_digging_month@sufal192020_gtrts_pit_digging_digging_month_create');
	Route::get('/sufal192020_gtrts_plantation_site_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_plantation_site_month@sufal192020_gtrts_plantation_site_month_list');
	Route::post('/sufal192020_gtrts_plantation_site_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_plantation_site_month@sufal192020_gtrts_plantation_site_month_create');
	Route::get('/sufal192020_gtrts_planting_planting_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_planting_planting_month@sufal192020_gtrts_planting_planting_month_list');
	Route::post('/sufal192020_gtrts_planting_planting_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_planting_planting_month@sufal192020_gtrts_planting_planting_month_create');
	Route::get('/sufal192020_gtrts_vacancy_filling_filling_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_vacancy_filling_filling_month@sufal192020_gtrts_vacancy_filling_filling_month_list');
	Route::post('/sufal192020_gtrts_vacancy_filling_filling_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_vacancy_filling_filling_month@sufal192020_gtrts_vacancy_filling_filling_month_create');
	Route::get('/sufal192020_gtrts_weeding', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_weeding@sufal192020_gtrts_weeding_list');
	Route::post('/sufal192020_gtrts_weeding_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_gtrts_weeding@sufal192020_gtrts_weeding_create');
	Route::get('/sufal192020_location_data_ca_tloc_ad_upzilla', '\App\Http\Controllers\Api\Aggregate\Sufal192020_location_data_ca_tloc_ad_upzilla@sufal192020_location_data_ca_tloc_ad_upzilla_list');
	Route::post('/sufal192020_location_data_ca_tloc_ad_upzilla_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_location_data_ca_tloc_ad_upzilla@sufal192020_location_data_ca_tloc_ad_upzilla_create');
	Route::get('/sufal192020_location_data_m_sh1', '\App\Http\Controllers\Api\Aggregate\Sufal192020_location_data_m_sh1@sufal192020_location_data_m_sh1_list');
	Route::post('/sufal192020_location_data_m_sh1_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_location_data_m_sh1@sufal192020_location_data_m_sh1_create');
	Route::get('/sufal192020_overallnotes_ima_blb', '\App\Http\Controllers\Api\Aggregate\Sufal192020_overallnotes_ima_blb@sufal192020_overallnotes_ima_blb_list');
	Route::post('/sufal192020_overallnotes_ima_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_overallnotes_ima_blb@sufal192020_overallnotes_ima_blb_create');
	Route::get('/sufal192020_weeding_month', '\App\Http\Controllers\Api\Aggregate\Sufal192020_weeding_month@sufal192020_weeding_month_list');
	Route::post('/sufal192020_weeding_month_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_weeding_month@sufal192020_weeding_month_create');
	Route::get('/sufal192020_xpictureextra_blb', '\App\Http\Controllers\Api\Aggregate\Sufal192020_xpictureextra_blb@sufal192020_xpictureextra_blb_list');
	Route::post('/sufal192020_xpictureextra_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_xpictureextra_blb@sufal192020_xpictureextra_blb_create');
	Route::get('/sufal192020_xpictureextra_bn', '\App\Http\Controllers\Api\Aggregate\Sufal192020_xpictureextra_bn@sufal192020_xpictureextra_bn_list');
	Route::post('/sufal192020_xpictureextra_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_xpictureextra_bn@sufal192020_xpictureextra_bn_create');
	Route::get('/sufal192020_xpictureextra_ref', '\App\Http\Controllers\Api\Aggregate\Sufal192020_xpictureextra_ref@sufal192020_xpictureextra_ref_list');
	Route::post('/sufal192020_xpictureextra_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal192020_xpictureextra_ref@sufal192020_xpictureextra_ref_create');
	Route::get('/sufal_13_2021_core', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_core@sufal_13_2021_core_list');
	Route::post('/sufal_13_2021_core_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_core@sufal_13_2021_core_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_blb', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_blb_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_blb_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_bn', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_bn_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_bn_create');
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_notes_bn', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_bn@com202021_conslttn_ttndnc_pctre_consultation_notes_bn_list');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_notes_bn_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_bn@com202021_conslttn_ttndnc_pctre_consultation_notes_bn_create');
	Route::get('/com202021_conslttn_ttndnc_pctre_consultation_notes_ref', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_ref@com202021_conslttn_ttndnc_pctre_consultation_notes_ref_list');
	Route::post('/com202021_conslttn_ttndnc_pctre_consultation_notes_ref_create', '\App\Http\Controllers\Api\Aggregate\Com202021_conslttn_ttndnc_pctre_consultation_notes_ref@com202021_conslttn_ttndnc_pctre_consultation_notes_ref_create');
	// ----com202021_consultation_issues_others_ques----
	Route::get('/com202021_consultation_issues_others_ques', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_issues_others_ques@com202021_consultation_issues_others_ques_list');
	Route::post('/com202021_consultation_issues_others_ques_create', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_issues_others_ques@com202021_consultation_issues_others_ques_create');
	Route::post('/com202021_consultation_issues_others_ques_bulk_create', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_issues_others_ques@com202021_consultation_issues_others_ques_bulk_create');
	Route::get('/com202021_consultation_issues_others_ques_tlauri/{tlauri}', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_issues_others_ques@com202021_consultation_issues_others_ques_tlauri');
	Route::delete('/com202021_consultation_issues_others_ques_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_issues_others_ques@com202021_consultation_issues_others_ques_delete');
	Route::put('/com202021_consultation_issues_others_ques_single_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_issues_others_ques@com202021_consultation_issues_others_ques_single_update');
	// ----com202021_consultation_issues_others_ques----
	Route::get('/com202021_consultation_photo', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_photo@com202021_consultation_photo_list');
	Route::post('/com202021_consultation_photo_create', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_photo@com202021_consultation_photo_create');
	// ----com202021_consultation_picture_blb----
	Route::get('/com202021_consultation_picture_blb', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_blb@com202021_consultation_picture_blb_list');
	Route::post('/com202021_consultation_picture_blb_create', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_blb@com202021_consultation_picture_blb_create');
	Route::post('/com202021_consultation_picture_blb_bulk_create', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_blb@com202021_consultation_picture_blb_bulk_create');
	Route::get('/com202021_consultation_picture_blb_tlauri/{tlauri}', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_blb@com202021_consultation_picture_blb_tlauri');
	Route::delete('/com202021_consultation_picture_blb_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_blb@com202021_consultation_picture_blb_delete');
	Route::delete('/com202021_consultation_picture_blb_delete_all', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_blb@com202021_consultation_picture_blb_delete_all');
	Route::put('/com202021_consultation_picture_blb_update/{auri}', '\App\Http\Controllers\Api\Aggregate\Com202021_consultation_picture_blb@com202021_consultation_picture_blb_update');
	// ----com202021_consultation_picture_blb----
	Route::get('/gener43_2021_beat_index', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_beat_index@gener43_2021_beat_index_list');
	Route::post('/gener43_2021_beat_index_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_beat_index@gener43_2021_beat_index_create');
	Route::get('/gener43_2021_ghumissues', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_ghumissues@gener43_2021_ghumissues_list');
	Route::post('/gener43_2021_ghumissues_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_ghumissues@gener43_2021_ghumissues_create');
	Route::put('/gener43_2021_ghumissues_update', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_ghumissues@gener43_2021_ghumissues_update');
	Route::put('/gener43_2021_ghumissues_single_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_ghumissues@gener43_2021_ghumissues_single_update');

	Route::delete('/gener43_2021_ghumissues_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_ghumissues@gener43_2021_ghumissues_delete');
	Route::get('/gener43_2021_gnatissues', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gnatissues@gener43_2021_gnatissues_list');
	Route::post('/gener43_2021_gnatissues_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gnatissues@gener43_2021_gnatissues_create');
	Route::put('/gener43_2021_gnatissues_update', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gnatissues@gener43_2021_gnatissues_update');
	Route::put('/gener43_2021_gnatissues_single_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gnatissues@gener43_2021_gnatissues_single_update');

	Route::delete('/gener43_2021_gnatissues_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gnatissues@gener43_2021_gnatissues_delete');

	Route::get('/gener43_2021_gvillages', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gvillages@gener43_2021_gvillages_list');
	Route::get('/gener43_2021_gvillages_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gvillages@gener43_2021_gvillages_id');
	Route::post('/gener43_2021_gvillages_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gvillages@gener43_2021_gvillages_create');
	Route::put('/gener43_2021_gvillages_update', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gvillages@gener43_2021_gvillages_update');
	Route::put('/gener43_2021_gvillages_single_update/{uri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gvillages@gener43_2021_gvillages_single_update');
	Route::delete('/gener43_2021_gvillages_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_gvillages@gener43_2021_gvillages_delete');
	Route::get('/gener43_2021_overallnotes_ima_bn', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_bn@gener43_2021_overallnotes_ima_bn_list');
	Route::post('/gener43_2021_overallnotes_ima_bn_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_bn@gener43_2021_overallnotes_ima_bn_create');
	Route::get('/gener43_2021_overallnotes_ima_ref', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_ref@gener43_2021_overallnotes_ima_ref_list');
	Route::post('/gener43_2021_overallnotes_ima_ref_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_ref@gener43_2021_overallnotes_ima_ref_create');
	Route::put('/gener43_2021_overallnotes_ima_ref_update/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_ref@gener43_2021_overallnotes_ima_ref_update');
	Route::post('/gener43_2021_overallnotes_ima_ref_bulk_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_ref@gener43_2021_overallnotes_ima_ref_bulk_create');
	Route::delete('/gener43_2021_overallnotes_ima_ref_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_ref@gener43_2021_overallnotes_ima_ref_delete');
	Route::delete('/gener43_2021_overallnotes_ima_ref_delete_all', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_ref@gener43_2021_overallnotes_ima_ref_delete_all');

	Route::get('/gener43_2021_overallnotes_ima_ref_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_overallnotes_ima_ref@gener43_2021_overallnotes_ima_ref_id');
	Route::get('/gener43_2021_xpic_beat_index_bn', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_bn@gener43_2021_xpic_beat_index_bn_list');
	Route::post('/gener43_2021_xpic_beat_index_bn_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_bn@gener43_2021_xpic_beat_index_bn_create');
	Route::get('/gener43_2021_xpic_beat_index_ref', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_ref@gener43_2021_xpic_beat_index_ref_list');
	Route::post('/gener43_2021_xpic_beat_index_ref_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_ref@gener43_2021_xpic_beat_index_ref_create');
	Route::put('/gener43_2021_xpic_beat_index_ref_update/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_ref@gener43_2021_xpic_beat_index_ref_update');

	Route::post('/gener43_2021_xpic_beat_index_ref_bulk_create', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_ref@gener43_2021_xpic_beat_index_ref_bulk_create');
	Route::delete('/gener43_2021_xpic_beat_index_ref_delete/{uri}/{auri}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_ref@gener43_2021_xpic_beat_index_ref_delete');
	Route::delete('/gener43_2021_xpic_beat_index_ref_delete_all', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_ref@gener43_2021_xpic_beat_index_ref_delete_all');

	Route::get('/gener43_2021_xpic_beat_index_ref_id/{id}', '\App\Http\Controllers\Api\Aggregate\Gener43_2021_xpic_beat_index_ref@gener43_2021_xpic_beat_index_ref_id');
	Route::get('/plant27_2021_community_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_community_month@plant27_2021_community_month_list');
	Route::post('/plant27_2021_community_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_community_month@plant27_2021_community_month_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_e_ref', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_e_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_e_ref_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_e_ref_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_e_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_e_ref_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_n_blb', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_n_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_n_blb_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_n_blb_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_n_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_n_blb_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_s_blb', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_s_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_s_blb_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_s_blb_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_s_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_s_blb_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_s_bn', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_s_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_s_bn_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_s_bn_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_s_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_s_bn_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_s_ref', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_s_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_s_ref_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_s_ref_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_s_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_s_ref_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_w_blb', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_w_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_w_blb_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_w_blb_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_w_blb@plant27_2021_gregen_gregen_plot_reg_cen_to_w_blb_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_w_bn', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_w_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_w_bn_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_w_bn_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_w_bn@plant27_2021_gregen_gregen_plot_reg_cen_to_w_bn_create');
	Route::get('/plant27_2021_gregen_gregen_plot_reg_cen_to_w_ref', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_w_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_w_ref_list');
	Route::post('/plant27_2021_gregen_gregen_plot_reg_cen_to_w_ref_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_gregen_plot_reg_cen_to_w_ref@plant27_2021_gregen_gregen_plot_reg_cen_to_w_ref_create');
	Route::get('/plant27_2021_gregen_spp_regen', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_spp_regen@plant27_2021_gregen_spp_regen_list');
	Route::post('/plant27_2021_gregen_spp_regen_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gregen_spp_regen@plant27_2021_gregen_spp_regen_create');
	Route::get('/plant27_2021_gr_regen', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gr_regen@plant27_2021_gr_regen_list');
	Route::post('/plant27_2021_gr_regen_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gr_regen@plant27_2021_gr_regen_create');
	Route::get('/plant27_2021_gtrts_climber_cutting_climber_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_climber_cutting_climber_month@plant27_2021_gtrts_climber_cutting_climber_month_list');
	Route::post('/plant27_2021_gtrts_climber_cutting_climber_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_climber_cutting_climber_month@plant27_2021_gtrts_climber_cutting_climber_month_create');
	Route::get('/plant27_2021_gtrts_community_protection', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_community_protection@plant27_2021_gtrts_community_protection_list');
	Route::post('/plant27_2021_gtrts_community_protection_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_community_protection@plant27_2021_gtrts_community_protection_create');
	Route::get('/plant27_2021_gtrts_compost_compost_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_compost_compost_month@plant27_2021_gtrts_compost_compost_month_list');
	Route::post('/plant27_2021_gtrts_compost_compost_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_compost_compost_month@plant27_2021_gtrts_compost_compost_month_create');
	Route::get('/plant27_2021_gtrts_nuersery_raising_nursery_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_nuersery_raising_nursery_month@plant27_2021_gtrts_nuersery_raising_nursery_month_list');
	Route::post('/plant27_2021_gtrts_nuersery_raising_nursery_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_nuersery_raising_nursery_month@plant27_2021_gtrts_nuersery_raising_nursery_month_create');
	Route::get('/plant27_2021_gtrts_other_treatment_other_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_other_treatment_other_month@plant27_2021_gtrts_other_treatment_other_month_list');
	Route::post('/plant27_2021_gtrts_other_treatment_other_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_other_treatment_other_month@plant27_2021_gtrts_other_treatment_other_month_create');
	Route::get('/plant27_2021_gtrts_plantation_site_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_plantation_site_month@plant27_2021_gtrts_plantation_site_month_list');
	Route::post('/plant27_2021_gtrts_plantation_site_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_gtrts_plantation_site_month@plant27_2021_gtrts_plantation_site_month_create');
	Route::get('/plant27_2021_location_data_ca_tloc_ad_upzilla', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_location_data_ca_tloc_ad_upzilla@plant27_2021_location_data_ca_tloc_ad_upzilla_list');
	Route::post('/plant27_2021_location_data_ca_tloc_ad_upzilla_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_location_data_ca_tloc_ad_upzilla@plant27_2021_location_data_ca_tloc_ad_upzilla_create');
	Route::get('/plant27_2021_location_data_m_sh1', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_location_data_m_sh1@plant27_2021_location_data_m_sh1_list');
	Route::post('/plant27_2021_location_data_m_sh1_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_location_data_m_sh1@plant27_2021_location_data_m_sh1_create');
	Route::get('/plant27_2021_overallnotes_ima_blb', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_overallnotes_ima_blb@plant27_2021_overallnotes_ima_blb_list');
	Route::post('/plant27_2021_overallnotes_ima_blb_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_overallnotes_ima_blb@plant27_2021_overallnotes_ima_blb_create');
	Route::get('/plant27_2021_overallnotes_ima_bn', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_overallnotes_ima_bn@plant27_2021_overallnotes_ima_bn_list');
	Route::post('/plant27_2021_overallnotes_ima_bn_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_overallnotes_ima_bn@plant27_2021_overallnotes_ima_bn_create');
	Route::get('/plant27_2021_overallnotes_ima_ref', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_overallnotes_ima_ref@plant27_2021_overallnotes_ima_ref_list');
	Route::post('/plant27_2021_overallnotes_ima_ref_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_overallnotes_ima_ref@plant27_2021_overallnotes_ima_ref_create');
	Route::get('/plant27_2021_planting_plan_gplanting_gspp', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_planting_plan_gplanting_gspp@plant27_2021_planting_plan_gplanting_gspp_list');
	Route::post('/plant27_2021_planting_plan_gplanting_gspp_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_planting_plan_gplanting_gspp@plant27_2021_planting_plan_gplanting_gspp_create');
	Route::get('/plant27_2021_rphotoextra', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_rphotoextra@plant27_2021_rphotoextra_list');
	Route::post('/plant27_2021_rphotoextra_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_rphotoextra@plant27_2021_rphotoextra_create');
	Route::get('/plant27_2021_s_site', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_s_site@plant27_2021_s_site_list');
	Route::post('/plant27_2021_s_site_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_s_site@plant27_2021_s_site_create');
	Route::get('/plant27_2021_weeding_month', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_weeding_month@plant27_2021_weeding_month_list');
	Route::post('/plant27_2021_weeding_month_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_weeding_month@plant27_2021_weeding_month_create');
	Route::get('/plant27_2021_xpictureextra_blb', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_xpictureextra_blb@plant27_2021_xpictureextra_blb_list');
	Route::post('/plant27_2021_xpictureextra_blb_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_xpictureextra_blb@plant27_2021_xpictureextra_blb_create');
	Route::get('/plant27_2021_xpictureextra_bn', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_xpictureextra_bn@plant27_2021_xpictureextra_bn_list');
	Route::post('/plant27_2021_xpictureextra_bn_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_xpictureextra_bn@plant27_2021_xpictureextra_bn_create');
	Route::get('/plant27_2021_xpictureextra_ref', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_xpictureextra_ref@plant27_2021_xpictureextra_ref_list');
	Route::post('/plant27_2021_xpictureextra_ref_create', '\App\Http\Controllers\Api\Aggregate\Plant27_2021_xpictureextra_ref@plant27_2021_xpictureextra_ref_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_ref', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_ref_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_ref_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_ref@sufal_13_2021_gregen_gregen_plot_reg_cen_to_e_ref_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_blb', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_blb_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_blb_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_blb@sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_blb_create');
	Route::get('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_bn', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_bn_list');
	Route::post('/sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_bn_create', '\App\Http\Controllers\Api\Aggregate\Sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_bn@sufal_13_2021_gregen_gregen_plot_reg_cen_to_n_bn_create');
	Route::get('/_user_granted_authority', '\App\Http\Controllers\Api\Aggregate\_user_granted_authority@_user_granted_authority_list');
	Route::post('/_user_granted_authority_create', '\App\Http\Controllers\Api\Aggregate\_user_granted_authority@_user_granted_authority_create');
	//Aggregate Schema End
} else {
	//Route::get('/', '\App\Http\Controllers\Api\Error@error_list');
}
//});