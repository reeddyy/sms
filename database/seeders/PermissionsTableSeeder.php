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
                'title' => 'status_create',
            ],
            [
                'id'    => 63,
                'title' => 'status_edit',
            ],
            [
                'id'    => 64,
                'title' => 'status_show',
            ],
            [
                'id'    => 65,
                'title' => 'status_delete',
            ],
            [
                'id'    => 66,
                'title' => 'status_access',
            ],
            [
                'id'    => 67,
                'title' => 'individual_membership_access',
            ],
            [
                'id'    => 68,
                'title' => 'memberships_individual_create',
            ],
            [
                'id'    => 69,
                'title' => 'memberships_individual_edit',
            ],
            [
                'id'    => 70,
                'title' => 'memberships_individual_show',
            ],
            [
                'id'    => 71,
                'title' => 'memberships_individual_delete',
            ],
            [
                'id'    => 72,
                'title' => 'memberships_individual_access',
            ],
            [
                'id'    => 73,
                'title' => 'certificate_create',
            ],
            [
                'id'    => 74,
                'title' => 'certificate_edit',
            ],
            [
                'id'    => 75,
                'title' => 'certificate_show',
            ],
            [
                'id'    => 76,
                'title' => 'certificate_delete',
            ],
            [
                'id'    => 77,
                'title' => 'certificate_access',
            ],
            [
                'id'    => 78,
                'title' => 'edp_access',
            ],
            [
                'id'    => 79,
                'title' => 'programme_create',
            ],
            [
                'id'    => 80,
                'title' => 'programme_edit',
            ],
            [
                'id'    => 81,
                'title' => 'programme_show',
            ],
            [
                'id'    => 82,
                'title' => 'programme_delete',
            ],
            [
                'id'    => 83,
                'title' => 'programme_access',
            ],
            [
                'id'    => 84,
                'title' => 'enrolments_qualification_create',
            ],
            [
                'id'    => 85,
                'title' => 'enrolments_qualification_edit',
            ],
            [
                'id'    => 86,
                'title' => 'enrolments_qualification_show',
            ],
            [
                'id'    => 87,
                'title' => 'enrolments_qualification_delete',
            ],
            [
                'id'    => 88,
                'title' => 'enrolments_qualification_access',
            ],
            [
                'id'    => 89,
                'title' => 'payment_source_create',
            ],
            [
                'id'    => 90,
                'title' => 'payment_source_edit',
            ],
            [
                'id'    => 91,
                'title' => 'payment_source_show',
            ],
            [
                'id'    => 92,
                'title' => 'payment_source_delete',
            ],
            [
                'id'    => 93,
                'title' => 'payment_source_access',
            ],
            [
                'id'    => 94,
                'title' => 'payments_qualification_create',
            ],
            [
                'id'    => 95,
                'title' => 'payments_qualification_edit',
            ],
            [
                'id'    => 96,
                'title' => 'payments_qualification_show',
            ],
            [
                'id'    => 97,
                'title' => 'payments_qualification_delete',
            ],
            [
                'id'    => 98,
                'title' => 'payments_qualification_access',
            ],
            [
                'id'    => 99,
                'title' => 'payments_individual_create',
            ],
            [
                'id'    => 100,
                'title' => 'payments_individual_edit',
            ],
            [
                'id'    => 101,
                'title' => 'payments_individual_show',
            ],
            [
                'id'    => 102,
                'title' => 'payments_individual_delete',
            ],
            [
                'id'    => 103,
                'title' => 'payments_individual_access',
            ],
            [
                'id'    => 104,
                'title' => 'achievement_create',
            ],
            [
                'id'    => 105,
                'title' => 'achievement_edit',
            ],
            [
                'id'    => 106,
                'title' => 'achievement_show',
            ],
            [
                'id'    => 107,
                'title' => 'achievement_delete',
            ],
            [
                'id'    => 108,
                'title' => 'achievement_access',
            ],
            [
                'id'    => 109,
                'title' => 'results_module_create',
            ],
            [
                'id'    => 110,
                'title' => 'results_module_edit',
            ],
            [
                'id'    => 111,
                'title' => 'results_module_show',
            ],
            [
                'id'    => 112,
                'title' => 'results_module_delete',
            ],
            [
                'id'    => 113,
                'title' => 'results_module_access',
            ],
            [
                'id'    => 114,
                'title' => 'support_fund_create',
            ],
            [
                'id'    => 115,
                'title' => 'support_fund_edit',
            ],
            [
                'id'    => 116,
                'title' => 'support_fund_show',
            ],
            [
                'id'    => 117,
                'title' => 'support_fund_delete',
            ],
            [
                'id'    => 118,
                'title' => 'support_fund_access',
            ],
            [
                'id'    => 119,
                'title' => 'facilitator_create',
            ],
            [
                'id'    => 120,
                'title' => 'facilitator_edit',
            ],
            [
                'id'    => 121,
                'title' => 'facilitator_show',
            ],
            [
                'id'    => 122,
                'title' => 'facilitator_delete',
            ],
            [
                'id'    => 123,
                'title' => 'facilitator_access',
            ],
            [
                'id'    => 124,
                'title' => 'venue_create',
            ],
            [
                'id'    => 125,
                'title' => 'venue_edit',
            ],
            [
                'id'    => 126,
                'title' => 'venue_show',
            ],
            [
                'id'    => 127,
                'title' => 'venue_delete',
            ],
            [
                'id'    => 128,
                'title' => 'venue_access',
            ],
            [
                'id'    => 129,
                'title' => 'admissions_edp_create',
            ],
            [
                'id'    => 130,
                'title' => 'admissions_edp_edit',
            ],
            [
                'id'    => 131,
                'title' => 'admissions_edp_show',
            ],
            [
                'id'    => 132,
                'title' => 'admissions_edp_delete',
            ],
            [
                'id'    => 133,
                'title' => 'admissions_edp_access',
            ],
            [
                'id'    => 134,
                'title' => 'payments_edp_create',
            ],
            [
                'id'    => 135,
                'title' => 'payments_edp_edit',
            ],
            [
                'id'    => 136,
                'title' => 'payments_edp_show',
            ],
            [
                'id'    => 137,
                'title' => 'payments_edp_delete',
            ],
            [
                'id'    => 138,
                'title' => 'payments_edp_access',
            ],
            [
                'id'    => 139,
                'title' => 'ada_access',
            ],
            [
                'id'    => 140,
                'title' => 'award_create',
            ],
            [
                'id'    => 141,
                'title' => 'award_edit',
            ],
            [
                'id'    => 142,
                'title' => 'award_show',
            ],
            [
                'id'    => 143,
                'title' => 'award_delete',
            ],
            [
                'id'    => 144,
                'title' => 'award_access',
            ],
            [
                'id'    => 145,
                'title' => 'applicants_ada_create',
            ],
            [
                'id'    => 146,
                'title' => 'applicants_ada_edit',
            ],
            [
                'id'    => 147,
                'title' => 'applicants_ada_show',
            ],
            [
                'id'    => 148,
                'title' => 'applicants_ada_delete',
            ],
            [
                'id'    => 149,
                'title' => 'applicants_ada_access',
            ],
            [
                'id'    => 150,
                'title' => 'credits_funds_purpose_create',
            ],
            [
                'id'    => 151,
                'title' => 'credits_funds_purpose_edit',
            ],
            [
                'id'    => 152,
                'title' => 'credits_funds_purpose_show',
            ],
            [
                'id'    => 153,
                'title' => 'credits_funds_purpose_delete',
            ],
            [
                'id'    => 154,
                'title' => 'credits_funds_purpose_access',
            ],
            [
                'id'    => 155,
                'title' => 'training_credits_individual_create',
            ],
            [
                'id'    => 156,
                'title' => 'training_credits_individual_edit',
            ],
            [
                'id'    => 157,
                'title' => 'training_credits_individual_show',
            ],
            [
                'id'    => 158,
                'title' => 'training_credits_individual_delete',
            ],
            [
                'id'    => 159,
                'title' => 'training_credits_individual_access',
            ],
            [
                'id'    => 160,
                'title' => 'support_funds_individual_create',
            ],
            [
                'id'    => 161,
                'title' => 'support_funds_individual_edit',
            ],
            [
                'id'    => 162,
                'title' => 'support_funds_individual_show',
            ],
            [
                'id'    => 163,
                'title' => 'support_funds_individual_delete',
            ],
            [
                'id'    => 164,
                'title' => 'support_funds_individual_access',
            ],
            [
                'id'    => 165,
                'title' => 'corporate_create',
            ],
            [
                'id'    => 166,
                'title' => 'corporate_edit',
            ],
            [
                'id'    => 167,
                'title' => 'corporate_show',
            ],
            [
                'id'    => 168,
                'title' => 'corporate_delete',
            ],
            [
                'id'    => 169,
                'title' => 'corporate_access',
            ],
            [
                'id'    => 170,
                'title' => 'corporate_membership_access',
            ],
            [
                'id'    => 171,
                'title' => 'memberships_corporate_create',
            ],
            [
                'id'    => 172,
                'title' => 'memberships_corporate_edit',
            ],
            [
                'id'    => 173,
                'title' => 'memberships_corporate_show',
            ],
            [
                'id'    => 174,
                'title' => 'memberships_corporate_delete',
            ],
            [
                'id'    => 175,
                'title' => 'memberships_corporate_access',
            ],
            [
                'id'    => 176,
                'title' => 'payments_corporate_create',
            ],
            [
                'id'    => 177,
                'title' => 'payments_corporate_edit',
            ],
            [
                'id'    => 178,
                'title' => 'payments_corporate_show',
            ],
            [
                'id'    => 179,
                'title' => 'payments_corporate_delete',
            ],
            [
                'id'    => 180,
                'title' => 'payments_corporate_access',
            ],
            [
                'id'    => 181,
                'title' => 'training_credits_corporate_create',
            ],
            [
                'id'    => 182,
                'title' => 'training_credits_corporate_edit',
            ],
            [
                'id'    => 183,
                'title' => 'training_credits_corporate_show',
            ],
            [
                'id'    => 184,
                'title' => 'training_credits_corporate_delete',
            ],
            [
                'id'    => 185,
                'title' => 'training_credits_corporate_access',
            ],
            [
                'id'    => 186,
                'title' => 'support_funds_corporate_create',
            ],
            [
                'id'    => 187,
                'title' => 'support_funds_corporate_edit',
            ],
            [
                'id'    => 188,
                'title' => 'support_funds_corporate_show',
            ],
            [
                'id'    => 189,
                'title' => 'support_funds_corporate_delete',
            ],
            [
                'id'    => 190,
                'title' => 'support_funds_corporate_access',
            ],
            [
                'id'    => 191,
                'title' => 'application_access',
            ],
            [
                'id'    => 192,
                'title' => 'qualifications_app_create',
            ],
            [
                'id'    => 193,
                'title' => 'qualifications_app_edit',
            ],
            [
                'id'    => 194,
                'title' => 'qualifications_app_show',
            ],
            [
                'id'    => 195,
                'title' => 'qualifications_app_delete',
            ],
            [
                'id'    => 196,
                'title' => 'qualifications_app_access',
            ],
            [
                'id'    => 197,
                'title' => 'status_app_create',
            ],
            [
                'id'    => 198,
                'title' => 'status_app_edit',
            ],
            [
                'id'    => 199,
                'title' => 'status_app_show',
            ],
            [
                'id'    => 200,
                'title' => 'status_app_delete',
            ],
            [
                'id'    => 201,
                'title' => 'status_app_access',
            ],
            [
                'id'    => 202,
                'title' => 'status_qualification_create',
            ],
            [
                'id'    => 203,
                'title' => 'status_qualification_edit',
            ],
            [
                'id'    => 204,
                'title' => 'status_qualification_show',
            ],
            [
                'id'    => 205,
                'title' => 'status_qualification_delete',
            ],
            [
                'id'    => 206,
                'title' => 'status_qualification_access',
            ],
            [
                'id'    => 207,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
