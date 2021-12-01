<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'profile_access',
            ],
            [
                'id'    => 20,
                'title' => 'individual_create',
            ],
            [
                'id'    => 21,
                'title' => 'individual_edit',
            ],
            [
                'id'    => 22,
                'title' => 'individual_show',
            ],
            [
                'id'    => 23,
                'title' => 'individual_delete',
            ],
            [
                'id'    => 24,
                'title' => 'individual_access',
            ],
            [
                'id'    => 25,
                'title' => 'level_create',
            ],
            [
                'id'    => 26,
                'title' => 'level_edit',
            ],
            [
                'id'    => 27,
                'title' => 'level_show',
            ],
            [
                'id'    => 28,
                'title' => 'level_delete',
            ],
            [
                'id'    => 29,
                'title' => 'level_access',
            ],
            [
                'id'    => 30,
                'title' => 'qualification_access',
            ],
            [
                'id'    => 31,
                'title' => 'module_create',
            ],
            [
                'id'    => 32,
                'title' => 'module_edit',
            ],
            [
                'id'    => 33,
                'title' => 'module_show',
            ],
            [
                'id'    => 34,
                'title' => 'module_delete',
            ],
            [
                'id'    => 35,
                'title' => 'module_access',
            ],
            [
                'id'    => 36,
                'title' => 'class_intake_create',
            ],
            [
                'id'    => 37,
                'title' => 'class_intake_edit',
            ],
            [
                'id'    => 38,
                'title' => 'class_intake_show',
            ],
            [
                'id'    => 39,
                'title' => 'class_intake_delete',
            ],
            [
                'id'    => 40,
                'title' => 'class_intake_access',
            ],
            [
                'id'    => 41,
                'title' => 'course_create',
            ],
            [
                'id'    => 42,
                'title' => 'course_edit',
            ],
            [
                'id'    => 43,
                'title' => 'course_show',
            ],
            [
                'id'    => 44,
                'title' => 'course_delete',
            ],
            [
                'id'    => 45,
                'title' => 'course_access',
            ],
            [
                'id'    => 46,
                'title' => 'officer_create',
            ],
            [
                'id'    => 47,
                'title' => 'officer_edit',
            ],
            [
                'id'    => 48,
                'title' => 'officer_show',
            ],
            [
                'id'    => 49,
                'title' => 'officer_delete',
            ],
            [
                'id'    => 50,
                'title' => 'officer_access',
            ],
            [
                'id'    => 51,
                'title' => 'grade_create',
            ],
            [
                'id'    => 52,
                'title' => 'grade_edit',
            ],
            [
                'id'    => 53,
                'title' => 'grade_show',
            ],
            [
                'id'    => 54,
                'title' => 'grade_delete',
            ],
            [
                'id'    => 55,
                'title' => 'grade_access',
            ],
            [
                'id'    => 56,
                'title' => 'membership_access',
            ],
            [
                'id'    => 57,
                'title' => 'member_class_create',
            ],
            [
                'id'    => 58,
                'title' => 'member_class_edit',
            ],
            [
                'id'    => 59,
                'title' => 'member_class_show',
            ],
            [
                'id'    => 60,
                'title' => 'member_class_delete',
            ],
            [
                'id'    => 61,
                'title' => 'member_class_access',
            ],
            [
                'id'    => 62,
                'title' => 'individual_membership_access',
            ],
            [
                'id'    => 63,
                'title' => 'memberships_individual_create',
            ],
            [
                'id'    => 64,
                'title' => 'memberships_individual_edit',
            ],
            [
                'id'    => 65,
                'title' => 'memberships_individual_show',
            ],
            [
                'id'    => 66,
                'title' => 'memberships_individual_delete',
            ],
            [
                'id'    => 67,
                'title' => 'memberships_individual_access',
            ],
            [
                'id'    => 68,
                'title' => 'certificate_create',
            ],
            [
                'id'    => 69,
                'title' => 'certificate_edit',
            ],
            [
                'id'    => 70,
                'title' => 'certificate_show',
            ],
            [
                'id'    => 71,
                'title' => 'certificate_delete',
            ],
            [
                'id'    => 72,
                'title' => 'certificate_access',
            ],
            [
                'id'    => 73,
                'title' => 'edp_access',
            ],
            [
                'id'    => 74,
                'title' => 'programme_create',
            ],
            [
                'id'    => 75,
                'title' => 'programme_edit',
            ],
            [
                'id'    => 76,
                'title' => 'programme_show',
            ],
            [
                'id'    => 77,
                'title' => 'programme_delete',
            ],
            [
                'id'    => 78,
                'title' => 'programme_access',
            ],
            [
                'id'    => 79,
                'title' => 'enrolments_qualification_create',
            ],
            [
                'id'    => 80,
                'title' => 'enrolments_qualification_edit',
            ],
            [
                'id'    => 81,
                'title' => 'enrolments_qualification_show',
            ],
            [
                'id'    => 82,
                'title' => 'enrolments_qualification_delete',
            ],
            [
                'id'    => 83,
                'title' => 'enrolments_qualification_access',
            ],
            [
                'id'    => 84,
                'title' => 'payment_source_create',
            ],
            [
                'id'    => 85,
                'title' => 'payment_source_edit',
            ],
            [
                'id'    => 86,
                'title' => 'payment_source_show',
            ],
            [
                'id'    => 87,
                'title' => 'payment_source_delete',
            ],
            [
                'id'    => 88,
                'title' => 'payment_source_access',
            ],
            [
                'id'    => 89,
                'title' => 'payments_qualification_create',
            ],
            [
                'id'    => 90,
                'title' => 'payments_qualification_edit',
            ],
            [
                'id'    => 91,
                'title' => 'payments_qualification_show',
            ],
            [
                'id'    => 92,
                'title' => 'payments_qualification_delete',
            ],
            [
                'id'    => 93,
                'title' => 'payments_qualification_access',
            ],
            [
                'id'    => 94,
                'title' => 'payments_individual_create',
            ],
            [
                'id'    => 95,
                'title' => 'payments_individual_edit',
            ],
            [
                'id'    => 96,
                'title' => 'payments_individual_show',
            ],
            [
                'id'    => 97,
                'title' => 'payments_individual_delete',
            ],
            [
                'id'    => 98,
                'title' => 'payments_individual_access',
            ],
            [
                'id'    => 99,
                'title' => 'achievement_create',
            ],
            [
                'id'    => 100,
                'title' => 'achievement_edit',
            ],
            [
                'id'    => 101,
                'title' => 'achievement_show',
            ],
            [
                'id'    => 102,
                'title' => 'achievement_delete',
            ],
            [
                'id'    => 103,
                'title' => 'achievement_access',
            ],
            [
                'id'    => 104,
                'title' => 'results_module_create',
            ],
            [
                'id'    => 105,
                'title' => 'results_module_edit',
            ],
            [
                'id'    => 106,
                'title' => 'results_module_show',
            ],
            [
                'id'    => 107,
                'title' => 'results_module_delete',
            ],
            [
                'id'    => 108,
                'title' => 'results_module_access',
            ],
            [
                'id'    => 109,
                'title' => 'support_fund_create',
            ],
            [
                'id'    => 110,
                'title' => 'support_fund_edit',
            ],
            [
                'id'    => 111,
                'title' => 'support_fund_show',
            ],
            [
                'id'    => 112,
                'title' => 'support_fund_delete',
            ],
            [
                'id'    => 113,
                'title' => 'support_fund_access',
            ],
            [
                'id'    => 114,
                'title' => 'facilitator_create',
            ],
            [
                'id'    => 115,
                'title' => 'facilitator_edit',
            ],
            [
                'id'    => 116,
                'title' => 'facilitator_show',
            ],
            [
                'id'    => 117,
                'title' => 'facilitator_delete',
            ],
            [
                'id'    => 118,
                'title' => 'facilitator_access',
            ],
            [
                'id'    => 119,
                'title' => 'venue_create',
            ],
            [
                'id'    => 120,
                'title' => 'venue_edit',
            ],
            [
                'id'    => 121,
                'title' => 'venue_show',
            ],
            [
                'id'    => 122,
                'title' => 'venue_delete',
            ],
            [
                'id'    => 123,
                'title' => 'venue_access',
            ],
            [
                'id'    => 124,
                'title' => 'admissions_edp_create',
            ],
            [
                'id'    => 125,
                'title' => 'admissions_edp_edit',
            ],
            [
                'id'    => 126,
                'title' => 'admissions_edp_show',
            ],
            [
                'id'    => 127,
                'title' => 'admissions_edp_delete',
            ],
            [
                'id'    => 128,
                'title' => 'admissions_edp_access',
            ],
            [
                'id'    => 129,
                'title' => 'payments_edp_create',
            ],
            [
                'id'    => 130,
                'title' => 'payments_edp_edit',
            ],
            [
                'id'    => 131,
                'title' => 'payments_edp_show',
            ],
            [
                'id'    => 132,
                'title' => 'payments_edp_delete',
            ],
            [
                'id'    => 133,
                'title' => 'payments_edp_access',
            ],
            [
                'id'    => 134,
                'title' => 'ada_access',
            ],
            [
                'id'    => 135,
                'title' => 'award_create',
            ],
            [
                'id'    => 136,
                'title' => 'award_edit',
            ],
            [
                'id'    => 137,
                'title' => 'award_show',
            ],
            [
                'id'    => 138,
                'title' => 'award_delete',
            ],
            [
                'id'    => 139,
                'title' => 'award_access',
            ],
            [
                'id'    => 140,
                'title' => 'applicants_ada_create',
            ],
            [
                'id'    => 141,
                'title' => 'applicants_ada_edit',
            ],
            [
                'id'    => 142,
                'title' => 'applicants_ada_show',
            ],
            [
                'id'    => 143,
                'title' => 'applicants_ada_delete',
            ],
            [
                'id'    => 144,
                'title' => 'applicants_ada_access',
            ],
            [
                'id'    => 145,
                'title' => 'credits_funds_purpose_create',
            ],
            [
                'id'    => 146,
                'title' => 'credits_funds_purpose_edit',
            ],
            [
                'id'    => 147,
                'title' => 'credits_funds_purpose_show',
            ],
            [
                'id'    => 148,
                'title' => 'credits_funds_purpose_delete',
            ],
            [
                'id'    => 149,
                'title' => 'credits_funds_purpose_access',
            ],
            [
                'id'    => 150,
                'title' => 'training_credits_individual_create',
            ],
            [
                'id'    => 151,
                'title' => 'training_credits_individual_edit',
            ],
            [
                'id'    => 152,
                'title' => 'training_credits_individual_show',
            ],
            [
                'id'    => 153,
                'title' => 'training_credits_individual_delete',
            ],
            [
                'id'    => 154,
                'title' => 'training_credits_individual_access',
            ],
            [
                'id'    => 155,
                'title' => 'support_funds_individual_create',
            ],
            [
                'id'    => 156,
                'title' => 'support_funds_individual_edit',
            ],
            [
                'id'    => 157,
                'title' => 'support_funds_individual_show',
            ],
            [
                'id'    => 158,
                'title' => 'support_funds_individual_delete',
            ],
            [
                'id'    => 159,
                'title' => 'support_funds_individual_access',
            ],
            [
                'id'    => 160,
                'title' => 'corporate_create',
            ],
            [
                'id'    => 161,
                'title' => 'corporate_edit',
            ],
            [
                'id'    => 162,
                'title' => 'corporate_show',
            ],
            [
                'id'    => 163,
                'title' => 'corporate_delete',
            ],
            [
                'id'    => 164,
                'title' => 'corporate_access',
            ],
            [
                'id'    => 165,
                'title' => 'corporate_membership_access',
            ],
            [
                'id'    => 166,
                'title' => 'memberships_corporate_create',
            ],
            [
                'id'    => 167,
                'title' => 'memberships_corporate_edit',
            ],
            [
                'id'    => 168,
                'title' => 'memberships_corporate_show',
            ],
            [
                'id'    => 169,
                'title' => 'memberships_corporate_delete',
            ],
            [
                'id'    => 170,
                'title' => 'memberships_corporate_access',
            ],
            [
                'id'    => 171,
                'title' => 'payments_corporate_create',
            ],
            [
                'id'    => 172,
                'title' => 'payments_corporate_edit',
            ],
            [
                'id'    => 173,
                'title' => 'payments_corporate_show',
            ],
            [
                'id'    => 174,
                'title' => 'payments_corporate_delete',
            ],
            [
                'id'    => 175,
                'title' => 'payments_corporate_access',
            ],
            [
                'id'    => 176,
                'title' => 'training_credits_corporate_create',
            ],
            [
                'id'    => 177,
                'title' => 'training_credits_corporate_edit',
            ],
            [
                'id'    => 178,
                'title' => 'training_credits_corporate_show',
            ],
            [
                'id'    => 179,
                'title' => 'training_credits_corporate_delete',
            ],
            [
                'id'    => 180,
                'title' => 'training_credits_corporate_access',
            ],
            [
                'id'    => 181,
                'title' => 'support_funds_corporate_create',
            ],
            [
                'id'    => 182,
                'title' => 'support_funds_corporate_edit',
            ],
            [
                'id'    => 183,
                'title' => 'support_funds_corporate_show',
            ],
            [
                'id'    => 184,
                'title' => 'support_funds_corporate_delete',
            ],
            [
                'id'    => 185,
                'title' => 'support_funds_corporate_access',
            ],
            [
                'id'    => 186,
                'title' => 'application_access',
            ],
            [
                'id'    => 187,
                'title' => 'qualifications_app_create',
            ],
            [
                'id'    => 188,
                'title' => 'qualifications_app_edit',
            ],
            [
                'id'    => 189,
                'title' => 'qualifications_app_show',
            ],
            [
                'id'    => 190,
                'title' => 'qualifications_app_delete',
            ],
            [
                'id'    => 191,
                'title' => 'qualifications_app_access',
            ],
            [
                'id'    => 192,
                'title' => 'status_app_create',
            ],
            [
                'id'    => 193,
                'title' => 'status_app_edit',
            ],
            [
                'id'    => 194,
                'title' => 'status_app_show',
            ],
            [
                'id'    => 195,
                'title' => 'status_app_delete',
            ],
            [
                'id'    => 196,
                'title' => 'status_app_access',
            ],
            [
                'id'    => 197,
                'title' => 'status_qualification_create',
            ],
            [
                'id'    => 198,
                'title' => 'status_qualification_edit',
            ],
            [
                'id'    => 199,
                'title' => 'status_qualification_show',
            ],
            [
                'id'    => 200,
                'title' => 'status_qualification_delete',
            ],
            [
                'id'    => 201,
                'title' => 'status_qualification_access',
            ],
            [
                'id'    => 202,
                'title' => 'edp_app_create',
            ],
            [
                'id'    => 203,
                'title' => 'edp_app_edit',
            ],
            [
                'id'    => 204,
                'title' => 'edp_app_show',
            ],
            [
                'id'    => 205,
                'title' => 'edp_app_delete',
            ],
            [
                'id'    => 206,
                'title' => 'edp_app_access',
            ],
            [
                'id'    => 207,
                'title' => 'memberships_app_access',
            ],
            [
                'id'    => 208,
                'title' => 'corporates_app_create',
            ],
            [
                'id'    => 209,
                'title' => 'corporates_app_edit',
            ],
            [
                'id'    => 210,
                'title' => 'corporates_app_show',
            ],
            [
                'id'    => 211,
                'title' => 'corporates_app_delete',
            ],
            [
                'id'    => 212,
                'title' => 'corporates_app_access',
            ],
            [
                'id'    => 213,
                'title' => 'individuals_app_create',
            ],
            [
                'id'    => 214,
                'title' => 'individuals_app_edit',
            ],
            [
                'id'    => 215,
                'title' => 'individuals_app_show',
            ],
            [
                'id'    => 216,
                'title' => 'individuals_app_delete',
            ],
            [
                'id'    => 217,
                'title' => 'individuals_app_access',
            ],
            [
                'id'    => 218,
                'title' => 'ada_app_create',
            ],
            [
                'id'    => 219,
                'title' => 'ada_app_edit',
            ],
            [
                'id'    => 220,
                'title' => 'ada_app_show',
            ],
            [
                'id'    => 221,
                'title' => 'ada_app_delete',
            ],
            [
                'id'    => 222,
                'title' => 'ada_app_access',
            ],
            [
                'id'    => 223,
                'title' => 'lead_access',
            ],
            [
                'id'    => 224,
                'title' => 'status_lead_create',
            ],
            [
                'id'    => 225,
                'title' => 'status_lead_edit',
            ],
            [
                'id'    => 226,
                'title' => 'status_lead_show',
            ],
            [
                'id'    => 227,
                'title' => 'status_lead_delete',
            ],
            [
                'id'    => 228,
                'title' => 'status_lead_access',
            ],
            [
                'id'    => 229,
                'title' => 'qualifications_req_create',
            ],
            [
                'id'    => 230,
                'title' => 'qualifications_req_edit',
            ],
            [
                'id'    => 231,
                'title' => 'qualifications_req_show',
            ],
            [
                'id'    => 232,
                'title' => 'qualifications_req_delete',
            ],
            [
                'id'    => 233,
                'title' => 'qualifications_req_access',
            ],
            [
                'id'    => 234,
                'title' => 'edp_req_create',
            ],
            [
                'id'    => 235,
                'title' => 'edp_req_edit',
            ],
            [
                'id'    => 236,
                'title' => 'edp_req_show',
            ],
            [
                'id'    => 237,
                'title' => 'edp_req_delete',
            ],
            [
                'id'    => 238,
                'title' => 'edp_req_access',
            ],
            [
                'id'    => 239,
                'title' => 'status_membership_create',
            ],
            [
                'id'    => 240,
                'title' => 'status_membership_edit',
            ],
            [
                'id'    => 241,
                'title' => 'status_membership_show',
            ],
            [
                'id'    => 242,
                'title' => 'status_membership_delete',
            ],
            [
                'id'    => 243,
                'title' => 'status_membership_access',
            ],
            [
                'id'    => 244,
                'title' => 'status_edp_create',
            ],
            [
                'id'    => 245,
                'title' => 'status_edp_edit',
            ],
            [
                'id'    => 246,
                'title' => 'status_edp_show',
            ],
            [
                'id'    => 247,
                'title' => 'status_edp_delete',
            ],
            [
                'id'    => 248,
                'title' => 'status_edp_access',
            ],
            [
                'id'    => 249,
                'title' => 'status_ada_create',
            ],
            [
                'id'    => 250,
                'title' => 'status_ada_edit',
            ],
            [
                'id'    => 251,
                'title' => 'status_ada_show',
            ],
            [
                'id'    => 252,
                'title' => 'status_ada_delete',
            ],
            [
                'id'    => 253,
                'title' => 'status_ada_access',
            ],
            [
                'id'    => 254,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
