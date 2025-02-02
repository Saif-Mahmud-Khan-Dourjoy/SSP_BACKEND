<?php

namespace App\Http\Controllers\Api\Aggregate;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Gener43_2021_core extends Controller
{

    public function gener43_2021_core_create(Request $request)
    {
        DB::EnableQueryLog();
        $data = array(
            "_URI" => !empty($request->post("_URI")) ? $request->post("_URI") : null,
            "_CREATOR_URI_USER" => !empty($request->post("_CREATOR_URI_USER")) ? $request->post("_CREATOR_URI_USER") : null,
            "_CREATION_DATE" => !empty($request->post("_CREATION_DATE")) ? $request->post("_CREATION_DATE") : null,
            "_LAST_UPDATE_URI_USER" => !empty($request->post("_LAST_UPDATE_URI_USER")) ? $request->post("_LAST_UPDATE_URI_USER") : null,
            "_LAST_UPDATE_DATE" => !empty($request->post("_LAST_UPDATE_DATE")) ? $request->post("_LAST_UPDATE_DATE") : null,
            "GUSER_DCOLLECTION_RAW" => !empty($request->post("GUSER_DCOLLECTION_RAW")) ? $request->post("GUSER_DCOLLECTION_RAW") : null,
            "GUSER_USER" => !empty($request->post("GUSER_USER")) ? $request->post("GUSER_USER") : null,
            "GUSER_TLOC_FD_BEAT_POINT_LNG" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_LNG")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_LNG") : null,
            "GUSER_TLOC_FD_BEAT_POINT_LAT" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_LAT")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_LAT") : null,
            "GUSER_USER_CELL" => !empty($request->post("GUSER_USER_CELL")) ? $request->post("GUSER_USER_CELL") : null,
            "GUSER_BEAT_ADDRESS" => !empty($request->post("GUSER_BEAT_ADDRESS")) ? $request->post("GUSER_BEAT_ADDRESS") : null,
            "FBLI_FA_TLOC_FD_BEAT" => !empty($request->post("FBLI_FA_TLOC_FD_BEAT")) ? $request->post("FBLI_FA_TLOC_FD_BEAT") : null,
            "FBLI_FA_TLOC_FD_DIVISION" => !empty($request->post("FBLI_FA_TLOC_FD_DIVISION")) ? $request->post("FBLI_FA_TLOC_FD_DIVISION") : null,
            "FBLI_FA_TLOC_FD_BLOCK" => !empty($request->post("FBLI_FA_TLOC_FD_BLOCK")) ? $request->post("FBLI_FA_TLOC_FD_BLOCK") : null,
            "FBLI_FA_TLOC_FD_RANGE" => !empty($request->post("FBLI_FA_TLOC_FD_RANGE")) ? $request->post("FBLI_FA_TLOC_FD_RANGE") : null,
            "FBLI_FA_TLOC_FD_CIR" => !empty($request->post("FBLI_FA_TLOC_FD_CIR")) ? $request->post("FBLI_FA_TLOC_FD_CIR") : null,
            "FBLI_CA_TLOC_AD_DIVISION" => !empty($request->post("FBLI_CA_TLOC_AD_DIVISION")) ? $request->post("FBLI_CA_TLOC_AD_DIVISION") : null,
            "FBLI_CA_TLOC_AD_DISTRICT" => !empty($request->post("FBLI_CA_TLOC_AD_DISTRICT")) ? $request->post("FBLI_CA_TLOC_AD_DISTRICT") : null,
            "FBLI_CA_UNION" => !empty($request->post("FBLI_CA_UNION")) ? $request->post("FBLI_CA_UNION") : null,
            "FBLI_TLOC_ECOZONE" => !empty($request->post("FBLI_TLOC_ECOZONE")) ? $request->post("FBLI_TLOC_ECOZONE") : null,
            "RO_INFO_NAME_OF_RO" => !empty($request->post("RO_INFO_NAME_OF_RO")) ? $request->post("RO_INFO_NAME_OF_RO") : null,
            "RO_INFO_RO_CELL" => !empty($request->post("RO_INFO_RO_CELL")) ? $request->post("RO_INFO_RO_CELL") : null,
            "RO_INFO_RO_JOINING_DATE_RAW" => !empty($request->post("RO_INFO_RO_JOINING_DATE_RAW")) ? $request->post("RO_INFO_RO_JOINING_DATE_RAW") : null,
            "RO_INFO_RO_NID" => !empty($request->post("RO_INFO_RO_NID")) ? $request->post("RO_INFO_RO_NID") : null,
            "RO_INFO_RO_MAIL" => !empty($request->post("RO_INFO_RO_MAIL")) ? $request->post("RO_INFO_RO_MAIL") : null,
            "RO_INFO_RO_RANK" => !empty($request->post("RO_INFO_RO_RANK")) ? $request->post("RO_INFO_RO_RANK") : null,
            "BO_INFO_BO_CELL" => !empty($request->post("BO_INFO_BO_CELL")) ? $request->post("BO_INFO_BO_CELL") : null,
            "BO_INFO_BO_NID" => !empty($request->post("BO_INFO_BO_NID")) ? $request->post("BO_INFO_BO_NID") : null,
            "BO_INFO_BO_JOINING_DATE_RAW" => !empty($request->post("BO_INFO_BO_JOINING_DATE_RAW")) ? $request->post("BO_INFO_BO_JOINING_DATE_RAW") : null,
            "BO_INFO_NAME_OF_BO" => !empty($request->post("BO_INFO_NAME_OF_BO")) ? $request->post("BO_INFO_NAME_OF_BO") : null,
            "BO_INFO_BO_RANK" => !empty($request->post("BO_INFO_BO_RANK")) ? $request->post("BO_INFO_BO_RANK") : null,
            "BO_INFO_BO_MAIL" => !empty($request->post("BO_INFO_BO_MAIL")) ? $request->post("BO_INFO_BO_MAIL") : null,
            "LAND_TRANSPORTS_BICYCLE_AVAIL" => !empty($request->post("LAND_TRANSPORTS_BICYCLE_AVAIL")) ? $request->post("LAND_TRANSPORTS_BICYCLE_AVAIL") : null,
            "LAND_TRANSPORTS_MOTORB_CONDITION" => !empty($request->post("LAND_TRANSPORTS_MOTORB_CONDITION")) ? $request->post("LAND_TRANSPORTS_MOTORB_CONDITION") : null,
            "LAND_TRANSPORTS_MOTORB_AVAIL" => !empty($request->post("LAND_TRANSPORTS_MOTORB_AVAIL")) ? $request->post("LAND_TRANSPORTS_MOTORB_AVAIL") : null,
            "LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION" => !empty($request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION")) ? $request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION") : null,
            "LAND_TRANSPORTS_BICYCLE_CONDITION" => !empty($request->post("LAND_TRANSPORTS_BICYCLE_CONDITION")) ? $request->post("LAND_TRANSPORTS_BICYCLE_CONDITION") : null,
            "LAND_TRANSPORTS_OTHERS_LAND_TRA" => !empty($request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA")) ? $request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA") : null,
            "LAND_TRANSPORTS_OTHERS_LAND_TRA_AVAIL" => !empty($request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_AVAIL")) ? $request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_AVAIL") : null,
            "LOGISTICS3_COUNTRYBOAT_CONDITION" => !empty($request->post("LOGISTICS3_COUNTRYBOAT_CONDITION")) ? $request->post("LOGISTICS3_COUNTRYBOAT_CONDITION") : null,
            "LOGISTICS3_TVESSEL_AVAIL" => !empty($request->post("LOGISTICS3_TVESSEL_AVAIL")) ? $request->post("LOGISTICS3_TVESSEL_AVAIL") : null,
            "LOGISTICS3_SPEEDBOAT_CONDITION" => !empty($request->post("LOGISTICS3_SPEEDBOAT_CONDITION")) ? $request->post("LOGISTICS3_SPEEDBOAT_CONDITION") : null,
            "LOGISTICS3_COUNTRYBOAT_AVAIL" => !empty($request->post("LOGISTICS3_COUNTRYBOAT_AVAIL")) ? $request->post("LOGISTICS3_COUNTRYBOAT_AVAIL") : null,
            "LOGISTICS3_SPEEDBOAT_AVAIL" => !empty($request->post("LOGISTICS3_SPEEDBOAT_AVAIL")) ? $request->post("LOGISTICS3_SPEEDBOAT_AVAIL") : null,
            "LOGISTICS3_OTHERS_WATER_TRA_AVAIL" => !empty($request->post("LOGISTICS3_OTHERS_WATER_TRA_AVAIL")) ? $request->post("LOGISTICS3_OTHERS_WATER_TRA_AVAIL") : null,
            "LOGISTICS3_OTHERS_WATER_TRA_CONDITION" => !empty($request->post("LOGISTICS3_OTHERS_WATER_TRA_CONDITION")) ? $request->post("LOGISTICS3_OTHERS_WATER_TRA_CONDITION") : null,
            "LOGISTICS3_TVESSEL_CONDITION" => !empty($request->post("LOGISTICS3_TVESSEL_CONDITION")) ? $request->post("LOGISTICS3_TVESSEL_CONDITION") : null,
            "LOGISTICS4_CHINESERIFLE_CONDITION" => !empty($request->post("LOGISTICS4_CHINESERIFLE_CONDITION")) ? $request->post("LOGISTICS4_CHINESERIFLE_CONDITION") : null,
            "LOGISTICS4_TFIREARMS_CHINESERIFLE_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_CHINESERIFLE_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_CHINESERIFLE_AVAIL") : null,
            "LOGISTICS4_OTHERS_WATER_TRA_CONDITION" => !empty($request->post("LOGISTICS4_OTHERS_WATER_TRA_CONDITION")) ? $request->post("LOGISTICS4_OTHERS_WATER_TRA_CONDITION") : null,
            "LOGISTICS4_RIFLE303_CONDITION" => !empty($request->post("LOGISTICS4_RIFLE303_CONDITION")) ? $request->post("LOGISTICS4_RIFLE303_CONDITION") : null,
            "LOGISTICS4_GFIREARMS_SHORTGUN" => !empty($request->post("LOGISTICS4_GFIREARMS_SHORTGUN")) ? $request->post("LOGISTICS4_GFIREARMS_SHORTGUN") : null,
            "LOGISTICS4_SHORTGUN_CONDITION" => !empty($request->post("LOGISTICS4_SHORTGUN_CONDITION")) ? $request->post("LOGISTICS4_SHORTGUN_CONDITION") : null,
            "LOGISTICS4_TFIREARMS_303RIFLE_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_303RIFLE_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_303RIFLE_AVAIL") : null,
            "LOGISTICS4_TFIREARMS_SLR_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_SLR_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_SLR_AVAIL") : null,
            "LOGISTICS4_TFIREARMS_SHORTGUN_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_SHORTGUN_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_SHORTGUN_AVAIL") : null,
            "LOGISTICS4_SLR_CONDITION" => !empty($request->post("LOGISTICS4_SLR_CONDITION")) ? $request->post("LOGISTICS4_SLR_CONDITION") : null,
            "LOGISTICS4_OTHERS_WATER_TRA_AVAIL" => !empty($request->post("LOGISTICS4_OTHERS_WATER_TRA_AVAIL")) ? $request->post("LOGISTICS4_OTHERS_WATER_TRA_AVAIL") : null,
            "GUSER_DCOLLECTION" => !empty($request->post("GUSER_DCOLLECTION")) ? $request->post("GUSER_DCOLLECTION") : null,
            "_MODEL_VERSION" => !empty($request->post("_MODEL_VERSION")) ? $request->post("_MODEL_VERSION") : null,
            "_UI_VERSION" => !empty($request->post("_UI_VERSION")) ? $request->post("_UI_VERSION") : null,
            "_IS_COMPLETE" => !empty($request->post("_IS_COMPLETE")) ? $request->post("_IS_COMPLETE") : null,
            "_SUBMISSION_DATE" => !empty($request->post("_SUBMISSION_DATE")) ? $request->post("_SUBMISSION_DATE") : null,
            "_MARKED_AS_COMPLETE_DATE" => !empty($request->post("_MARKED_AS_COMPLETE_DATE")) ? $request->post("_MARKED_AS_COMPLETE_DATE") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_HA") : null,
            "LOGISTICS4_GFIREARMS_303RIFLE" => !empty($request->post("LOGISTICS4_GFIREARMS_303RIFLE")) ? $request->post("LOGISTICS4_GFIREARMS_303RIFLE") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_OTHER_PA_AREA_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_OTHER_PA_AREA_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_OTHER_PA_AREA_HA") : null,
            "LOGISTICS4_OTHERS_WATER_TRA" => !empty($request->post("LOGISTICS4_OTHERS_WATER_TRA")) ? $request->post("LOGISTICS4_OTHERS_WATER_TRA") : null,
            "FBLI_FA_TLOC_FD_BEAT_TXT" => !empty($request->post("FBLI_FA_TLOC_FD_BEAT_TXT")) ? $request->post("FBLI_FA_TLOC_FD_BEAT_TXT") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_VESTED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_VESTED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_VESTED_FOREST_HA") : null,
            "SUBSCRIBERID" => !empty($request->post("SUBSCRIBERID")) ? $request->post("SUBSCRIBERID") : null,
            "DEVICEID" => !empty($request->post("DEVICEID")) ? $request->post("DEVICEID") : null,
            "FBLI_GENERATED_NOTE_NAME_18" => !empty($request->post("FBLI_GENERATED_NOTE_NAME_18")) ? $request->post("FBLI_GENERATED_NOTE_NAME_18") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_GENERATED_NOTE_NAME_74" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_GENERATED_NOTE_NAME_74")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_GENERATED_NOTE_NAME_74") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_WS_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_WS_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_WS_HA") : null,
            "LOGISTICS4_GENERATED_NOTE_NAME_152" => !empty($request->post("LOGISTICS4_GENERATED_NOTE_NAME_152")) ? $request->post("LOGISTICS4_GENERATED_NOTE_NAME_152") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_HA") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_SECTION_6_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_6_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_6_HA") : null,
            "SIMSERIAL" => !empty($request->post("SIMSERIAL")) ? $request->post("SIMSERIAL") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_HA") : null,
            "GUSER_GENERATED_NOTE_NAME_10" => !empty($request->post("GUSER_GENERATED_NOTE_NAME_10")) ? $request->post("GUSER_GENERATED_NOTE_NAME_10") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_OTHER_FORESTAREA_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_OTHER_FORESTAREA_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_OTHER_FORESTAREA_HA") : null,
            "LAND_TRANSPORTS_GBI_CYCLE" => !empty($request->post("LAND_TRANSPORTS_GBI_CYCLE")) ? $request->post("LAND_TRANSPORTS_GBI_CYCLE") : null,
            "LOGISTICS3_GCOUNTRY_BOAT" => !empty($request->post("LOGISTICS3_GCOUNTRY_BOAT")) ? $request->post("LOGISTICS3_GCOUNTRY_BOAT") : null,
            "LOGISTICS4_GFIREARMS_SLR" => !empty($request->post("LOGISTICS4_GFIREARMS_SLR")) ? $request->post("LOGISTICS4_GFIREARMS_SLR") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_NATURAL_TO_DC_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_NATURAL_TO_DC_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_NATURAL_TO_DC_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SAFARIPARK_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SAFARIPARK_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SAFARIPARK_HA") : null,
            "BO_INFO_BO_JOINING_DATE" => !empty($request->post("BO_INFO_BO_JOINING_DATE")) ? $request->post("BO_INFO_BO_JOINING_DATE") : null,
            "GUSER_TLOC_FD_BEAT_POINT_ALT" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_ALT")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_ALT") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_SECTION_4_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_4_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_4_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SBCA_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SBCA_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SBCA_HA") : null,
            "END_RAW" => !empty($request->post("END_RAW")) ? $request->post("END_RAW") : null,
            "BO_INFO_GENERATED_NOTE_NAME_106" => !empty($request->post("BO_INFO_GENERATED_NOTE_NAME_106")) ? $request->post("BO_INFO_GENERATED_NOTE_NAME_106") : null,
            "GENERATED_NOTE_NAME_81" => !empty($request->post("GENERATED_NOTE_NAME_81")) ? $request->post("GENERATED_NOTE_NAME_81") : null,
            "RO_INFO_GENERATED_NOTE_NAME_97" => !empty($request->post("RO_INFO_GENERATED_NOTE_NAME_97")) ? $request->post("RO_INFO_GENERATED_NOTE_NAME_97") : null,
            "FBLI_FA_GENERATED_NOTE_NAME_21" => !empty($request->post("FBLI_FA_GENERATED_NOTE_NAME_21")) ? $request->post("FBLI_FA_GENERATED_NOTE_NAME_21") : null,
            "LAND_TRANSPORTS_GENERATED_NOTE_NAME_125" => !empty($request->post("LAND_TRANSPORTS_GENERATED_NOTE_NAME_125")) ? $request->post("LAND_TRANSPORTS_GENERATED_NOTE_NAME_125") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_AQUIRED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_AQUIRED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_AQUIRED_FOREST_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_NP_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_NP_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_NP_HA") : null,
            "GUSER_TLOC_FD_BEAT_POINT_ACC" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_ACC")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_ACC") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_GENERATED_NOTE_NAME_53" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_GENERATED_NOTE_NAME_53")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_GENERATED_NOTE_NAME_53") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_RESERVED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_RESERVED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_RESERVED_FOREST_HA") : null,
            "LOGISTICS3_OTHERS_WATER_TRA" => !empty($request->post("LOGISTICS3_OTHERS_WATER_TRA")) ? $request->post("LOGISTICS3_OTHERS_WATER_TRA") : null,
            "END" => !empty($request->post("END")) ? $request->post("END") : null,
            "RO_INFO_RO_JOINING_DATE" => !empty($request->post("RO_INFO_RO_JOINING_DATE")) ? $request->post("RO_INFO_RO_JOINING_DATE") : null,
            "PHONENUMBER" => !empty($request->post("PHONENUMBER")) ? $request->post("PHONENUMBER") : null,
            "LOGISTICS3_TRAWLER" => !empty($request->post("LOGISTICS3_TRAWLER")) ? $request->post("LOGISTICS3_TRAWLER") : null,
            "START_RAW" => !empty($request->post("START_RAW")) ? $request->post("START_RAW") : null,
            "LAND_STATISTICS_TOTAL_LEGAL_LAND_STATS" => !empty($request->post("LAND_STATISTICS_TOTAL_LEGAL_LAND_STATS")) ? $request->post("LAND_STATISTICS_TOTAL_LEGAL_LAND_STATS") : null,
            "META_INSTANCE_ID" => !empty($request->post("META_INSTANCE_ID")) ? $request->post("META_INSTANCE_ID") : null,
            "FBLI_CA_GENERATED_NOTE_NAME_33" => !empty($request->post("FBLI_CA_GENERATED_NOTE_NAME_33")) ? $request->post("FBLI_CA_GENERATED_NOTE_NAME_33") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_GENERATED_NOTE_NAME_65" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_GENERATED_NOTE_NAME_65")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_GENERATED_NOTE_NAME_65") : null,
            "LOGISTICS3_GSPEED_BOAT" => !empty($request->post("LOGISTICS3_GSPEED_BOAT")) ? $request->post("LOGISTICS3_GSPEED_BOAT") : null,
            "LOGISTICS4_GFIREARMS_CHINESERIFLE" => !empty($request->post("LOGISTICS4_GFIREARMS_CHINESERIFLE")) ? $request->post("LOGISTICS4_GFIREARMS_CHINESERIFLE") : null,
            "TODAY" => !empty($request->post("TODAY")) ? $request->post("TODAY") : null,
            "FBLI_FA_TLOC_FD_CHAR" => !empty($request->post("FBLI_FA_TLOC_FD_CHAR")) ? $request->post("FBLI_FA_TLOC_FD_CHAR") : null,
            "LAND_TRANSPORTS_GMOTORBIKE" => !empty($request->post("LAND_TRANSPORTS_GMOTORBIKE")) ? $request->post("LAND_TRANSPORTS_GMOTORBIKE") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_PROTECTED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_PROTECTED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_PROTECTED_FOREST_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_ECOPARK_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_ECOPARK_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_ECOPARK_HA") : null,
            "FBLI_FA_TLOC_ENTER_RANGE" => !empty($request->post("FBLI_FA_TLOC_ENTER_RANGE")) ? $request->post("FBLI_FA_TLOC_ENTER_RANGE") : null,
            "LAND_STATISTICS_AREA_SUM" => !empty($request->post("LAND_STATISTICS_AREA_SUM")) ? $request->post("LAND_STATISTICS_AREA_SUM") : null,
            "GENERATED_NOTE_NAME_123" => !empty($request->post("GENERATED_NOTE_NAME_123")) ? $request->post("GENERATED_NOTE_NAME_123") : null,
            "START" => !empty($request->post("START")) ? $request->post("START") : null,
            "FBLI_FA_TLOC_ENTER_DIV" => !empty($request->post("FBLI_FA_TLOC_ENTER_DIV")) ? $request->post("FBLI_FA_TLOC_ENTER_DIV") : null,
            "TODAY_RAW" => !empty($request->post("TODAY_RAW")) ? $request->post("TODAY_RAW") : null,
            "GENERATED_NOTE_NAME_94" => !empty($request->post("GENERATED_NOTE_NAME_94")) ? $request->post("GENERATED_NOTE_NAME_94") : null,
            "GENERATED_NOTE_NAME_95" => !empty($request->post("GENERATED_NOTE_NAME_95")) ? $request->post("GENERATED_NOTE_NAME_95") : null,
            "LOGISTICS3_GENERATED_NOTE_NAME_137" => !empty($request->post("LOGISTICS3_GENERATED_NOTE_NAME_137")) ? $request->post("LOGISTICS3_GENERATED_NOTE_NAME_137") : null,
            "project_id" => !empty($request->post("project_id")) ? $request->post("project_id") : null,
            "sort" => !empty($request->post("sort")) ? $request->post("sort") : null,
            "last_log_id" => !empty($request->post("last_log_id")) ? $request->post("last_log_id") : null,
            "restore_id" => !empty($request->post("restore_id")) ? $request->post("restore_id") : null,
            "created_at" => !empty($request->post("created_at")) ? $request->post("created_at") : null,
            "created_by" => !empty($request->post("created_by")) ? $request->post("created_by") : null,
            "updated_at" => !empty($request->post("updated_at")) ? $request->post("updated_at") : null,
            "updated_by" => !empty($request->post("updated_by")) ? $request->post("updated_by") : null,
            "deleted_at" => !empty($request->post("deleted_at")) ? $request->post("deleted_at") : null,
            "deleted_by" => !empty($request->post("deleted_by")) ? $request->post("deleted_by") : null,
            "deleted_status" => !empty($request->post("deleted_status")) ? $request->post("deleted_status") : null,
            "status" => !empty($request->post("status")) ? $request->post("status") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_SKM" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_SKM")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_SKM") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_SKM" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_SKM")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_SKM") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_SKM" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_SKM")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_SKM") : null,

        );
        $response = DB::table("aggregate.GENER43_2021_CORE")->insert($data);
        $q = DB::GetQueryLog();
        return response()->json($response);
    }
    public function gener43_2021_core_list()
    {
        $query = DB::select('select * from aggregate."GENER43_2021_CORE"');
        return response()->json($query);
    }
    public function gener43_2021_core_id($id, $id2, $id3, $id4)
    {
        DB::EnableQueryLog();
        $sql = "
            select
                gen.*,
                jfb.\"name\" as FBLI_FA_TLOC_FD_BEAT, 
                jfc.\"name\"  as FBLI_FA_TLOC_FD_CIR,
                jfd.\"name\" as FBLI_FA_TLOC_FD_DIVISION,
                jfr.\"name\" as FBLI_FA_TLOC_FD_RANGE,
                
                jad.\"name\" as FBLI_CA_TLOC_AD_DIVISION,
                jadd.\"name\" as FBLI_CA_TLOC_AD_DISTRICT,
                
                upz.\"VALUE\" as UPAZILA,
                
                lc1.\"name\" as LAND_TRANSPORTS_MOTORB_CONDITION,
                
                lc2.\"name\" as LAND_TRANSPORTS_BICYCLE_CONDITION,
                
                lc3.\"name\" as LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION,
                
                lc4.\"name\" as LOGISTICS3_SPEEDBOAT_CONDITION,
                
                lc5.\"name\" as LOGISTICS3_TVESSEL_CONDITION,
                
                lc6.\"name\" as LOGISTICS3_COUNTRYBOAT_CONDITION,
                
                lc7.\"name\" as LOGISTICS3_OTHERS_WATER_TRA_CONDITION,
                
                lc8.\"name\" as LOGISTICS4_RIFLE303_CONDITION,
                
                lc9.\"name\" as LOGISTICS4_SLR_CONDITION,
                
                lc10.\"name\" as LOGISTICS4_SHORTGUN_CONDITION,
                
                lc11.\"name\" as LOGISTICS4_CHINESERIFLE_CONDITION,
                
                lc12.\"name\" as LOGISTICS4_OTHERS_WATER_TRA_CONDITION
                from 
                
                aggregate.\"GENER43_2021_CORE\" as gen
                
                left join jur_fd_beats jfb on jfb.code=gen.\"FBLI_FA_TLOC_FD_BEAT\"
                left join jur_fd_circles jfc on jfc.code=gen.\"FBLI_FA_TLOC_FD_CIR\"
                left join jur_fd_divisions jfd on jfd.code=gen.\"FBLI_FA_TLOC_FD_DIVISION\"
                left join jur_fd_ranges jfr on jfr.code=gen.\"FBLI_FA_TLOC_FD_RANGE\"
                left join jur_ad_divisions jad on jad.code=gen.\"FBLI_CA_TLOC_AD_DIVISION\"
                left join jur_ad_districts jadd on jadd.code=gen.\"FBLI_CA_TLOC_AD_DISTRICT\"
                left join aggregate.\"GENER43_2021_FBLI_CA_TLOC_AD_UPZILLA\" upz on upz.\"_PARENT_AURI\" = gen.\"_URI\" 
                left join logistic_conditions lc1 on lc1.code=gen.\"LAND_TRANSPORTS_MOTORB_CONDITION\"
                left join logistic_conditions lc2 on lc2.code=gen.\"LAND_TRANSPORTS_BICYCLE_CONDITION\"
                left join logistic_conditions lc3 on lc3.code=gen.\"LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION\"
                left join logistic_conditions lc4 on lc4.code=gen.\"LOGISTICS3_SPEEDBOAT_CONDITION\"
                left join logistic_conditions lc5 on lc5.code=gen.\"LOGISTICS3_TVESSEL_CONDITION\"
                left join logistic_conditions lc6 on lc6.code=gen.\"LOGISTICS3_COUNTRYBOAT_CONDITION\"
                left join logistic_conditions lc7 on lc7.code=gen.\"LOGISTICS3_OTHERS_WATER_TRA_CONDITION\"
                left join logistic_conditions lc8 on lc8.code=gen.\"LOGISTICS4_RIFLE303_CONDITION\"
                left join logistic_conditions lc9 on lc9.code=gen.\"LOGISTICS4_SLR_CONDITION\"
                left join logistic_conditions lc10 on lc10.code=gen.\"LOGISTICS4_SHORTGUN_CONDITION\"
                left join logistic_conditions lc11 on lc11.code=gen.\"LOGISTICS4_CHINESERIFLE_CONDITION\"
                left join logistic_conditions lc12 on lc12.code=gen.\"LOGISTICS4_OTHERS_WATER_TRA_CONDITION\"
                where  gen.\"FBLI_FA_TLOC_FD_CIR\" = '$id' and gen.\"FBLI_FA_TLOC_FD_DIVISION\" = '$id2' and 
                gen.\"FBLI_FA_TLOC_FD_RANGE\" = '$id3' and gen.\"FBLI_FA_TLOC_FD_BEAT\" = '$id4'
            ";
        //$sql = "select * from aggregate.\"GENER43_2021_CORE\" where \"FBLI_FA_TLOC_FD_BEAT\"='$id'";
        $query =  DB::select($sql);
        $q = DB::GetQueryLog();
        return response()->json($query);
    }

    public function gener43_2021_core_uri($uri)
    {
        DB::EnableQueryLog();
        $sql = "
            select
                gen.*,
                
                jfb.\"name\" as FBLI_FA_TLOC_FD_BEAT, 
                jfc.\"name\"  as FBLI_FA_TLOC_FD_CIR,
                jfd.\"name\" as FBLI_FA_TLOC_FD_DIVISION,
                jfr.\"name\" as FBLI_FA_TLOC_FD_RANGE,
                
                jad.\"name\" as FBLI_CA_TLOC_AD_DIVISION,
                jadd.\"name\" as FBLI_CA_TLOC_AD_DISTRICT,
                
                upz.\"VALUE\" as UPAZILA,
           
                lc1.\"name\" as LAND_TRANSPORTS_MOTORB_CONDITION,
                
                lc2.\"name\" as LAND_TRANSPORTS_BICYCLE_CONDITION,
                
                lc3.\"name\" as LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION,
               
                lc4.\"name\" as LOGISTICS3_SPEEDBOAT_CONDITION,
                
                lc5.\"name\" as LOGISTICS3_TVESSEL_CONDITION,
               
                lc6.\"name\" as LOGISTICS3_COUNTRYBOAT_CONDITION,
               
                lc7.\"name\" as LOGISTICS3_OTHERS_WATER_TRA_CONDITION,
               
                lc8.\"name\" as LOGISTICS4_RIFLE303_CONDITION,
               
                lc9.\"name\" as LOGISTICS4_SLR_CONDITION,
               
                lc10.\"name\" as LOGISTICS4_SHORTGUN_CONDITION,
              
                lc11.\"name\" as LOGISTICS4_CHINESERIFLE_CONDITION,
               
                lc12.\"name\" as LOGISTICS4_OTHERS_WATER_TRA_CONDITION
                from 
                
                aggregate.\"GENER43_2021_CORE\" as gen
                
                left join jur_fd_beats jfb on jfb.code=gen.\"FBLI_FA_TLOC_FD_BEAT\"
                left join jur_fd_circles jfc on jfc.code=gen.\"FBLI_FA_TLOC_FD_CIR\"
                left join jur_fd_divisions jfd on jfd.code=gen.\"FBLI_FA_TLOC_FD_DIVISION\"
                left join jur_fd_ranges jfr on jfr.code=gen.\"FBLI_FA_TLOC_FD_RANGE\"
                left join jur_ad_divisions jad on jad.code=gen.\"FBLI_CA_TLOC_AD_DIVISION\"
                left join jur_ad_districts jadd on jadd.code=gen.\"FBLI_CA_TLOC_AD_DISTRICT\"
                left join aggregate.\"GENER43_2021_FBLI_CA_TLOC_AD_UPZILLA\" upz on upz.\"_PARENT_AURI\" = gen.\"_URI\" 
                left join logistic_conditions lc1 on lc1.code=gen.\"LAND_TRANSPORTS_MOTORB_CONDITION\"
                left join logistic_conditions lc2 on lc2.code=gen.\"LAND_TRANSPORTS_BICYCLE_CONDITION\"
                left join logistic_conditions lc3 on lc3.code=gen.\"LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION\"
                left join logistic_conditions lc4 on lc4.code=gen.\"LOGISTICS3_SPEEDBOAT_CONDITION\"
                left join logistic_conditions lc5 on lc5.code=gen.\"LOGISTICS3_TVESSEL_CONDITION\"
                left join logistic_conditions lc6 on lc6.code=gen.\"LOGISTICS3_COUNTRYBOAT_CONDITION\"
                left join logistic_conditions lc7 on lc7.code=gen.\"LOGISTICS3_OTHERS_WATER_TRA_CONDITION\"
                left join logistic_conditions lc8 on lc8.code=gen.\"LOGISTICS4_RIFLE303_CONDITION\"
                left join logistic_conditions lc9 on lc9.code=gen.\"LOGISTICS4_SLR_CONDITION\"
                left join logistic_conditions lc10 on lc10.code=gen.\"LOGISTICS4_SHORTGUN_CONDITION\"
                left join logistic_conditions lc11 on lc11.code=gen.\"LOGISTICS4_CHINESERIFLE_CONDITION\"
                left join logistic_conditions lc12 on lc12.code=gen.\"LOGISTICS4_OTHERS_WATER_TRA_CONDITION\"
                where  gen.\"_URI\" = '$uri' ";
        //$sql = "select * from aggregate.\"GENER43_2021_CORE\" where \"FBLI_FA_TLOC_FD_BEAT\"='$id'";
        $query =  DB::select($sql);
        $q = DB::GetQueryLog();
        return response()->json($query);
    }

    public function gener43_2021_core_update(Request $request, $uri)
    {

        $data = array(
            "_URI" => !empty($request->post("_URI")) ? $request->post("_URI") : null,
            "_CREATOR_URI_USER" => !empty($request->post("_CREATOR_URI_USER")) ? $request->post("_CREATOR_URI_USER") : null,
            "_CREATION_DATE" => !empty($request->post("_CREATION_DATE")) ? $request->post("_CREATION_DATE") : null,
            "_LAST_UPDATE_URI_USER" => !empty($request->post("_LAST_UPDATE_URI_USER")) ? $request->post("_LAST_UPDATE_URI_USER") : null,
            "_LAST_UPDATE_DATE" => !empty($request->post("_LAST_UPDATE_DATE")) ? $request->post("_LAST_UPDATE_DATE") : null,
            "GUSER_DCOLLECTION_RAW" => !empty($request->post("GUSER_DCOLLECTION_RAW")) ? $request->post("GUSER_DCOLLECTION_RAW") : null,
            "GUSER_USER" => !empty($request->post("GUSER_USER")) ? $request->post("GUSER_USER") : null,
            "GUSER_TLOC_FD_BEAT_POINT_LNG" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_LNG")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_LNG") : null,
            "GUSER_TLOC_FD_BEAT_POINT_LAT" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_LAT")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_LAT") : null,
            "GUSER_USER_CELL" => !empty($request->post("GUSER_USER_CELL")) ? $request->post("GUSER_USER_CELL") : null,
            "GUSER_BEAT_ADDRESS" => !empty($request->post("GUSER_BEAT_ADDRESS")) ? $request->post("GUSER_BEAT_ADDRESS") : null,
            "FBLI_FA_TLOC_FD_BEAT" => !empty($request->post("FBLI_FA_TLOC_FD_BEAT")) ? $request->post("FBLI_FA_TLOC_FD_BEAT") : null,
            "FBLI_FA_TLOC_FD_DIVISION" => !empty($request->post("FBLI_FA_TLOC_FD_DIVISION")) ? $request->post("FBLI_FA_TLOC_FD_DIVISION") : null,
            "FBLI_FA_TLOC_FD_BLOCK" => !empty($request->post("FBLI_FA_TLOC_FD_BLOCK")) ? $request->post("FBLI_FA_TLOC_FD_BLOCK") : null,
            "FBLI_FA_TLOC_FD_RANGE" => !empty($request->post("FBLI_FA_TLOC_FD_RANGE")) ? $request->post("FBLI_FA_TLOC_FD_RANGE") : null,
            "FBLI_FA_TLOC_FD_CIR" => !empty($request->post("FBLI_FA_TLOC_FD_CIR")) ? $request->post("FBLI_FA_TLOC_FD_CIR") : null,
            "FBLI_CA_TLOC_AD_DIVISION" => !empty($request->post("FBLI_CA_TLOC_AD_DIVISION")) ? $request->post("FBLI_CA_TLOC_AD_DIVISION") : null,
            "FBLI_CA_TLOC_AD_DISTRICT" => !empty($request->post("FBLI_CA_TLOC_AD_DISTRICT")) ? $request->post("FBLI_CA_TLOC_AD_DISTRICT") : null,
            "FBLI_CA_UNION" => !empty($request->post("FBLI_CA_UNION")) ? $request->post("FBLI_CA_UNION") : null,
            "FBLI_TLOC_ECOZONE" => !empty($request->post("FBLI_TLOC_ECOZONE")) ? $request->post("FBLI_TLOC_ECOZONE") : null,
            "RO_INFO_NAME_OF_RO" => !empty($request->post("RO_INFO_NAME_OF_RO")) ? $request->post("RO_INFO_NAME_OF_RO") : null,
            "RO_INFO_RO_CELL" => !empty($request->post("RO_INFO_RO_CELL")) ? $request->post("RO_INFO_RO_CELL") : null,
            "RO_INFO_RO_JOINING_DATE_RAW" => !empty($request->post("RO_INFO_RO_JOINING_DATE_RAW")) ? $request->post("RO_INFO_RO_JOINING_DATE_RAW") : null,
            "RO_INFO_RO_NID" => !empty($request->post("RO_INFO_RO_NID")) ? $request->post("RO_INFO_RO_NID") : null,
            "RO_INFO_RO_MAIL" => !empty($request->post("RO_INFO_RO_MAIL")) ? $request->post("RO_INFO_RO_MAIL") : null,
            "RO_INFO_RO_RANK" => !empty($request->post("RO_INFO_RO_RANK")) ? $request->post("RO_INFO_RO_RANK") : null,
            "BO_INFO_BO_CELL" => !empty($request->post("BO_INFO_BO_CELL")) ? $request->post("BO_INFO_BO_CELL") : null,
            "BO_INFO_BO_NID" => !empty($request->post("BO_INFO_BO_NID")) ? $request->post("BO_INFO_BO_NID") : null,
            "BO_INFO_BO_JOINING_DATE_RAW" => !empty($request->post("BO_INFO_BO_JOINING_DATE_RAW")) ? $request->post("BO_INFO_BO_JOINING_DATE_RAW") : null,
            "BO_INFO_NAME_OF_BO" => !empty($request->post("BO_INFO_NAME_OF_BO")) ? $request->post("BO_INFO_NAME_OF_BO") : null,
            "BO_INFO_BO_RANK" => !empty($request->post("BO_INFO_BO_RANK")) ? $request->post("BO_INFO_BO_RANK") : null,
            "BO_INFO_BO_MAIL" => !empty($request->post("BO_INFO_BO_MAIL")) ? $request->post("BO_INFO_BO_MAIL") : null,
            "LAND_TRANSPORTS_BICYCLE_AVAIL" => !empty($request->post("LAND_TRANSPORTS_BICYCLE_AVAIL")) ? $request->post("LAND_TRANSPORTS_BICYCLE_AVAIL") : null,
            "LAND_TRANSPORTS_MOTORB_CONDITION" => !empty($request->post("LAND_TRANSPORTS_MOTORB_CONDITION")) ? $request->post("LAND_TRANSPORTS_MOTORB_CONDITION") : null,
            "LAND_TRANSPORTS_MOTORB_AVAIL" => !empty($request->post("LAND_TRANSPORTS_MOTORB_AVAIL")) ? $request->post("LAND_TRANSPORTS_MOTORB_AVAIL") : null,
            "LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION" => !empty($request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION")) ? $request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_CONDITION") : null,
            "LAND_TRANSPORTS_BICYCLE_CONDITION" => !empty($request->post("LAND_TRANSPORTS_BICYCLE_CONDITION")) ? $request->post("LAND_TRANSPORTS_BICYCLE_CONDITION") : null,
            "LAND_TRANSPORTS_OTHERS_LAND_TRA" => !empty($request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA")) ? $request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA") : null,
            "LAND_TRANSPORTS_OTHERS_LAND_TRA_AVAIL" => !empty($request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_AVAIL")) ? $request->post("LAND_TRANSPORTS_OTHERS_LAND_TRA_AVAIL") : null,
            "LOGISTICS3_COUNTRYBOAT_CONDITION" => !empty($request->post("LOGISTICS3_COUNTRYBOAT_CONDITION")) ? $request->post("LOGISTICS3_COUNTRYBOAT_CONDITION") : null,
            "LOGISTICS3_TVESSEL_AVAIL" => !empty($request->post("LOGISTICS3_TVESSEL_AVAIL")) ? $request->post("LOGISTICS3_TVESSEL_AVAIL") : null,
            "LOGISTICS3_SPEEDBOAT_CONDITION" => !empty($request->post("LOGISTICS3_SPEEDBOAT_CONDITION")) ? $request->post("LOGISTICS3_SPEEDBOAT_CONDITION") : null,
            "LOGISTICS3_COUNTRYBOAT_AVAIL" => !empty($request->post("LOGISTICS3_COUNTRYBOAT_AVAIL")) ? $request->post("LOGISTICS3_COUNTRYBOAT_AVAIL") : null,
            "LOGISTICS3_SPEEDBOAT_AVAIL" => !empty($request->post("LOGISTICS3_SPEEDBOAT_AVAIL")) ? $request->post("LOGISTICS3_SPEEDBOAT_AVAIL") : null,
            "LOGISTICS3_OTHERS_WATER_TRA_AVAIL" => !empty($request->post("LOGISTICS3_OTHERS_WATER_TRA_AVAIL")) ? $request->post("LOGISTICS3_OTHERS_WATER_TRA_AVAIL") : null,
            "LOGISTICS3_OTHERS_WATER_TRA_CONDITION" => !empty($request->post("LOGISTICS3_OTHERS_WATER_TRA_CONDITION")) ? $request->post("LOGISTICS3_OTHERS_WATER_TRA_CONDITION") : null,
            "LOGISTICS3_TVESSEL_CONDITION" => !empty($request->post("LOGISTICS3_TVESSEL_CONDITION")) ? $request->post("LOGISTICS3_TVESSEL_CONDITION") : null,
            "LOGISTICS4_CHINESERIFLE_CONDITION" => !empty($request->post("LOGISTICS4_CHINESERIFLE_CONDITION")) ? $request->post("LOGISTICS4_CHINESERIFLE_CONDITION") : null,
            "LOGISTICS4_TFIREARMS_CHINESERIFLE_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_CHINESERIFLE_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_CHINESERIFLE_AVAIL") : null,
            "LOGISTICS4_OTHERS_WATER_TRA_CONDITION" => !empty($request->post("LOGISTICS4_OTHERS_WATER_TRA_CONDITION")) ? $request->post("LOGISTICS4_OTHERS_WATER_TRA_CONDITION") : null,
            "LOGISTICS4_RIFLE303_CONDITION" => !empty($request->post("LOGISTICS4_RIFLE303_CONDITION")) ? $request->post("LOGISTICS4_RIFLE303_CONDITION") : null,
            "LOGISTICS4_GFIREARMS_SHORTGUN" => !empty($request->post("LOGISTICS4_GFIREARMS_SHORTGUN")) ? $request->post("LOGISTICS4_GFIREARMS_SHORTGUN") : null,
            "LOGISTICS4_SHORTGUN_CONDITION" => !empty($request->post("LOGISTICS4_SHORTGUN_CONDITION")) ? $request->post("LOGISTICS4_SHORTGUN_CONDITION") : null,
            "LOGISTICS4_TFIREARMS_303RIFLE_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_303RIFLE_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_303RIFLE_AVAIL") : null,
            "LOGISTICS4_TFIREARMS_SLR_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_SLR_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_SLR_AVAIL") : null,
            "LOGISTICS4_TFIREARMS_SHORTGUN_AVAIL" => !empty($request->post("LOGISTICS4_TFIREARMS_SHORTGUN_AVAIL")) ? $request->post("LOGISTICS4_TFIREARMS_SHORTGUN_AVAIL") : null,
            "LOGISTICS4_SLR_CONDITION" => !empty($request->post("LOGISTICS4_SLR_CONDITION")) ? $request->post("LOGISTICS4_SLR_CONDITION") : null,
            "LOGISTICS4_OTHERS_WATER_TRA_AVAIL" => !empty($request->post("LOGISTICS4_OTHERS_WATER_TRA_AVAIL")) ? $request->post("LOGISTICS4_OTHERS_WATER_TRA_AVAIL") : null,
            "GUSER_DCOLLECTION" => !empty($request->post("GUSER_DCOLLECTION")) ? $request->post("GUSER_DCOLLECTION") : null,
            "_MODEL_VERSION" => !empty($request->post("_MODEL_VERSION")) ? $request->post("_MODEL_VERSION") : null,
            "_UI_VERSION" => !empty($request->post("_UI_VERSION")) ? $request->post("_UI_VERSION") : null,
            "_IS_COMPLETE" => !empty($request->post("_IS_COMPLETE")) ? $request->post("_IS_COMPLETE") : null,
            "_SUBMISSION_DATE" => !empty($request->post("_SUBMISSION_DATE")) ? $request->post("_SUBMISSION_DATE") : null,
            "_MARKED_AS_COMPLETE_DATE" => !empty($request->post("_MARKED_AS_COMPLETE_DATE")) ? $request->post("_MARKED_AS_COMPLETE_DATE") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_HA") : null,
            "LOGISTICS4_GFIREARMS_303RIFLE" => !empty($request->post("LOGISTICS4_GFIREARMS_303RIFLE")) ? $request->post("LOGISTICS4_GFIREARMS_303RIFLE") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_OTHER_PA_AREA_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_OTHER_PA_AREA_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_OTHER_PA_AREA_HA") : null,
            "LOGISTICS4_OTHERS_WATER_TRA" => !empty($request->post("LOGISTICS4_OTHERS_WATER_TRA")) ? $request->post("LOGISTICS4_OTHERS_WATER_TRA") : null,
            "FBLI_FA_TLOC_FD_BEAT_TXT" => !empty($request->post("FBLI_FA_TLOC_FD_BEAT_TXT")) ? $request->post("FBLI_FA_TLOC_FD_BEAT_TXT") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_VESTED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_VESTED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_VESTED_FOREST_HA") : null,
            "SUBSCRIBERID" => !empty($request->post("SUBSCRIBERID")) ? $request->post("SUBSCRIBERID") : null,
            "DEVICEID" => !empty($request->post("DEVICEID")) ? $request->post("DEVICEID") : null,
            "FBLI_GENERATED_NOTE_NAME_18" => !empty($request->post("FBLI_GENERATED_NOTE_NAME_18")) ? $request->post("FBLI_GENERATED_NOTE_NAME_18") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_GENERATED_NOTE_NAME_74" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_GENERATED_NOTE_NAME_74")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_GENERATED_NOTE_NAME_74") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_WS_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_WS_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_WS_HA") : null,
            "LOGISTICS4_GENERATED_NOTE_NAME_152" => !empty($request->post("LOGISTICS4_GENERATED_NOTE_NAME_152")) ? $request->post("LOGISTICS4_GENERATED_NOTE_NAME_152") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_HA") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_SECTION_6_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_6_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_6_HA") : null,
            "SIMSERIAL" => !empty($request->post("SIMSERIAL")) ? $request->post("SIMSERIAL") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_HA") : null,
            "GUSER_GENERATED_NOTE_NAME_10" => !empty($request->post("GUSER_GENERATED_NOTE_NAME_10")) ? $request->post("GUSER_GENERATED_NOTE_NAME_10") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_OTHER_FORESTAREA_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_OTHER_FORESTAREA_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_OTHER_FORESTAREA_HA") : null,
            "LAND_TRANSPORTS_GBI_CYCLE" => !empty($request->post("LAND_TRANSPORTS_GBI_CYCLE")) ? $request->post("LAND_TRANSPORTS_GBI_CYCLE") : null,
            "LOGISTICS3_GCOUNTRY_BOAT" => !empty($request->post("LOGISTICS3_GCOUNTRY_BOAT")) ? $request->post("LOGISTICS3_GCOUNTRY_BOAT") : null,
            "LOGISTICS4_GFIREARMS_SLR" => !empty($request->post("LOGISTICS4_GFIREARMS_SLR")) ? $request->post("LOGISTICS4_GFIREARMS_SLR") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_NATURAL_TO_DC_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_NATURAL_TO_DC_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_NATURAL_TO_DC_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SAFARIPARK_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SAFARIPARK_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SAFARIPARK_HA") : null,
            "BO_INFO_BO_JOINING_DATE" => !empty($request->post("BO_INFO_BO_JOINING_DATE")) ? $request->post("BO_INFO_BO_JOINING_DATE") : null,
            "GUSER_TLOC_FD_BEAT_POINT_ALT" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_ALT")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_ALT") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_SECTION_4_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_4_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_SECTION_4_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SBCA_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SBCA_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_SBCA_HA") : null,
            "END_RAW" => !empty($request->post("END_RAW")) ? $request->post("END_RAW") : null,
            "BO_INFO_GENERATED_NOTE_NAME_106" => !empty($request->post("BO_INFO_GENERATED_NOTE_NAME_106")) ? $request->post("BO_INFO_GENERATED_NOTE_NAME_106") : null,
            "GENERATED_NOTE_NAME_81" => !empty($request->post("GENERATED_NOTE_NAME_81")) ? $request->post("GENERATED_NOTE_NAME_81") : null,
            "RO_INFO_GENERATED_NOTE_NAME_97" => !empty($request->post("RO_INFO_GENERATED_NOTE_NAME_97")) ? $request->post("RO_INFO_GENERATED_NOTE_NAME_97") : null,
            "FBLI_FA_GENERATED_NOTE_NAME_21" => !empty($request->post("FBLI_FA_GENERATED_NOTE_NAME_21")) ? $request->post("FBLI_FA_GENERATED_NOTE_NAME_21") : null,
            "LAND_TRANSPORTS_GENERATED_NOTE_NAME_125" => !empty($request->post("LAND_TRANSPORTS_GENERATED_NOTE_NAME_125")) ? $request->post("LAND_TRANSPORTS_GENERATED_NOTE_NAME_125") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_AQUIRED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_AQUIRED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_AQUIRED_FOREST_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_NP_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_NP_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_NP_HA") : null,
            "GUSER_TLOC_FD_BEAT_POINT_ACC" => !empty($request->post("GUSER_TLOC_FD_BEAT_POINT_ACC")) ? $request->post("GUSER_TLOC_FD_BEAT_POINT_ACC") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_GENERATED_NOTE_NAME_53" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_GENERATED_NOTE_NAME_53")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_GENERATED_NOTE_NAME_53") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_RESERVED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_RESERVED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_RESERVED_FOREST_HA") : null,
            "LOGISTICS3_OTHERS_WATER_TRA" => !empty($request->post("LOGISTICS3_OTHERS_WATER_TRA")) ? $request->post("LOGISTICS3_OTHERS_WATER_TRA") : null,
            "END" => !empty($request->post("END")) ? $request->post("END") : null,
            "RO_INFO_RO_JOINING_DATE" => !empty($request->post("RO_INFO_RO_JOINING_DATE")) ? $request->post("RO_INFO_RO_JOINING_DATE") : null,
            "PHONENUMBER" => !empty($request->post("PHONENUMBER")) ? $request->post("PHONENUMBER") : null,
            "LOGISTICS3_TRAWLER" => !empty($request->post("LOGISTICS3_TRAWLER")) ? $request->post("LOGISTICS3_TRAWLER") : null,
            "START_RAW" => !empty($request->post("START_RAW")) ? $request->post("START_RAW") : null,
            "LAND_STATISTICS_TOTAL_LEGAL_LAND_STATS" => !empty($request->post("LAND_STATISTICS_TOTAL_LEGAL_LAND_STATS")) ? $request->post("LAND_STATISTICS_TOTAL_LEGAL_LAND_STATS") : null,
            "META_INSTANCE_ID" => !empty($request->post("META_INSTANCE_ID")) ? $request->post("META_INSTANCE_ID") : null,
            "FBLI_CA_GENERATED_NOTE_NAME_33" => !empty($request->post("FBLI_CA_GENERATED_NOTE_NAME_33")) ? $request->post("FBLI_CA_GENERATED_NOTE_NAME_33") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_GENERATED_NOTE_NAME_65" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_GENERATED_NOTE_NAME_65")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_GENERATED_NOTE_NAME_65") : null,
            "LOGISTICS3_GSPEED_BOAT" => !empty($request->post("LOGISTICS3_GSPEED_BOAT")) ? $request->post("LOGISTICS3_GSPEED_BOAT") : null,
            "LOGISTICS4_GFIREARMS_CHINESERIFLE" => !empty($request->post("LOGISTICS4_GFIREARMS_CHINESERIFLE")) ? $request->post("LOGISTICS4_GFIREARMS_CHINESERIFLE") : null,
            "TODAY" => !empty($request->post("TODAY")) ? $request->post("TODAY") : null,
            "FBLI_FA_TLOC_FD_CHAR" => !empty($request->post("FBLI_FA_TLOC_FD_CHAR")) ? $request->post("FBLI_FA_TLOC_FD_CHAR") : null,
            "LAND_TRANSPORTS_GMOTORBIKE" => !empty($request->post("LAND_TRANSPORTS_GMOTORBIKE")) ? $request->post("LAND_TRANSPORTS_GMOTORBIKE") : null,
            "LAND_STATISTICS_BEAT_LAND_INFO_PROTECTED_FOREST_HA" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_INFO_PROTECTED_FOREST_HA")) ? $request->post("LAND_STATISTICS_BEAT_LAND_INFO_PROTECTED_FOREST_HA") : null,
            "LAND_STATISTICS_BEAT_MGT_APPROACH_PA_ECOPARK_HA" => !empty($request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_ECOPARK_HA")) ? $request->post("LAND_STATISTICS_BEAT_MGT_APPROACH_PA_ECOPARK_HA") : null,
            "FBLI_FA_TLOC_ENTER_RANGE" => !empty($request->post("FBLI_FA_TLOC_ENTER_RANGE")) ? $request->post("FBLI_FA_TLOC_ENTER_RANGE") : null,
            "LAND_STATISTICS_AREA_SUM" => !empty($request->post("LAND_STATISTICS_AREA_SUM")) ? $request->post("LAND_STATISTICS_AREA_SUM") : null,
            "GENERATED_NOTE_NAME_123" => !empty($request->post("GENERATED_NOTE_NAME_123")) ? $request->post("GENERATED_NOTE_NAME_123") : null,
            "START" => !empty($request->post("START")) ? $request->post("START") : null,
            "FBLI_FA_TLOC_ENTER_DIV" => !empty($request->post("FBLI_FA_TLOC_ENTER_DIV")) ? $request->post("FBLI_FA_TLOC_ENTER_DIV") : null,
            "TODAY_RAW" => !empty($request->post("TODAY_RAW")) ? $request->post("TODAY_RAW") : null,
            "GENERATED_NOTE_NAME_94" => !empty($request->post("GENERATED_NOTE_NAME_94")) ? $request->post("GENERATED_NOTE_NAME_94") : null,
            "GENERATED_NOTE_NAME_95" => !empty($request->post("GENERATED_NOTE_NAME_95")) ? $request->post("GENERATED_NOTE_NAME_95") : null,
            "LOGISTICS3_GENERATED_NOTE_NAME_137" => !empty($request->post("LOGISTICS3_GENERATED_NOTE_NAME_137")) ? $request->post("LOGISTICS3_GENERATED_NOTE_NAME_137") : null,
            "project_id" => !empty($request->post("project_id")) ? $request->post("project_id") : null,
            "sort" => !empty($request->post("sort")) ? $request->post("sort") : null,
            "last_log_id" => !empty($request->post("last_log_id")) ? $request->post("last_log_id") : null,
            "restore_id" => !empty($request->post("restore_id")) ? $request->post("restore_id") : null,
            "created_at" => !empty($request->post("created_at")) ? $request->post("created_at") : null,
            "created_by" => !empty($request->post("created_by")) ? $request->post("created_by") : null,
            "updated_at" => !empty($request->post("updated_at")) ? $request->post("updated_at") : null,
            "updated_by" => !empty($request->post("updated_by")) ? $request->post("updated_by") : null,
            "deleted_at" => !empty($request->post("deleted_at")) ? $request->post("deleted_at") : null,
            "deleted_by" => !empty($request->post("deleted_by")) ? $request->post("deleted_by") : null,
            "deleted_status" => !empty($request->post("deleted_status")) ? $request->post("deleted_status") : null,
            "status" => !empty($request->post("status")) ? $request->post("status") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_SKM" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_SKM")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_SOCIAL_ACCRETED_SKM") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_SKM" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_SKM")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_NON_PP_SKM") : null,
            "LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_SKM" => !empty($request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_SKM")) ? $request->post("LAND_STATISTICS_BEAT_LAND_BIO_OTHER_PLANT_SKM") : null,

        );




        $response = DB::table("aggregate.GENER43_2021_CORE")->where("_URI", $uri)->update($data);
        if ($response) {
            return response()->json(['message' => 'Record Updated successfully.']);
        } else {
            return response()->json(['message' => 'Something went wrong'], 404);
        }
    }
}
