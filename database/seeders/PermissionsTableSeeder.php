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
                'title' => 'digital_module_create',
            ],
            [
                'id'    => 37,
                'title' => 'digital_module_edit',
            ],
            [
                'id'    => 38,
                'title' => 'digital_module_show',
            ],
            [
                'id'    => 39,
                'title' => 'digital_module_delete',
            ],
            [
                'id'    => 40,
                'title' => 'digital_module_access',
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
                'title' => 'cf_purpose_create',
            ],
            [
                'id'    => 58,
                'title' => 'cf_purpose_edit',
            ],
            [
                'id'    => 59,
                'title' => 'cf_purpose_show',
            ],
            [
                'id'    => 60,
                'title' => 'cf_purpose_delete',
            ],
            [
                'id'    => 61,
                'title' => 'cf_purpose_access',
            ],
            [
                'id'    => 62,
                'title' => 'member_class_create',
            ],
            [
                'id'    => 63,
                'title' => 'member_class_edit',
            ],
            [
                'id'    => 64,
                'title' => 'member_class_show',
            ],
            [
                'id'    => 65,
                'title' => 'member_class_delete',
            ],
            [
                'id'    => 66,
                'title' => 'member_class_access',
            ],
            [
                'id'    => 67,
                'title' => 'status_create',
            ],
            [
                'id'    => 68,
                'title' => 'status_edit',
            ],
            [
                'id'    => 69,
                'title' => 'status_show',
            ],
            [
                'id'    => 70,
                'title' => 'status_delete',
            ],
            [
                'id'    => 71,
                'title' => 'status_access',
            ],
            [
                'id'    => 72,
                'title' => 'memberships_individual_create',
            ],
            [
                'id'    => 73,
                'title' => 'memberships_individual_edit',
            ],
            [
                'id'    => 74,
                'title' => 'memberships_individual_show',
            ],
            [
                'id'    => 75,
                'title' => 'memberships_individual_delete',
            ],
            [
                'id'    => 76,
                'title' => 'memberships_individual_access',
            ],
            [
                'id'    => 77,
                'title' => 'tc_individual_create',
            ],
            [
                'id'    => 78,
                'title' => 'tc_individual_edit',
            ],
            [
                'id'    => 79,
                'title' => 'tc_individual_show',
            ],
            [
                'id'    => 80,
                'title' => 'tc_individual_delete',
            ],
            [
                'id'    => 81,
                'title' => 'tc_individual_access',
            ],
            [
                'id'    => 82,
                'title' => 'certificate_create',
            ],
            [
                'id'    => 83,
                'title' => 'certificate_edit',
            ],
            [
                'id'    => 84,
                'title' => 'certificate_show',
            ],
            [
                'id'    => 85,
                'title' => 'certificate_delete',
            ],
            [
                'id'    => 86,
                'title' => 'certificate_access',
            ],
            [
                'id'    => 87,
                'title' => 'edp_access',
            ],
            [
                'id'    => 88,
                'title' => 'programme_create',
            ],
            [
                'id'    => 89,
                'title' => 'programme_edit',
            ],
            [
                'id'    => 90,
                'title' => 'programme_show',
            ],
            [
                'id'    => 91,
                'title' => 'programme_delete',
            ],
            [
                'id'    => 92,
                'title' => 'programme_access',
            ],
            [
                'id'    => 93,
                'title' => 'enrolments_qualification_create',
            ],
            [
                'id'    => 94,
                'title' => 'enrolments_qualification_edit',
            ],
            [
                'id'    => 95,
                'title' => 'enrolments_qualification_show',
            ],
            [
                'id'    => 96,
                'title' => 'enrolments_qualification_delete',
            ],
            [
                'id'    => 97,
                'title' => 'enrolments_qualification_access',
            ],
            [
                'id'    => 98,
                'title' => 'payment_source_create',
            ],
            [
                'id'    => 99,
                'title' => 'payment_source_edit',
            ],
            [
                'id'    => 100,
                'title' => 'payment_source_show',
            ],
            [
                'id'    => 101,
                'title' => 'payment_source_delete',
            ],
            [
                'id'    => 102,
                'title' => 'payment_source_access',
            ],
            [
                'id'    => 103,
                'title' => 'payments_qualification_create',
            ],
            [
                'id'    => 104,
                'title' => 'payments_qualification_edit',
            ],
            [
                'id'    => 105,
                'title' => 'payments_qualification_show',
            ],
            [
                'id'    => 106,
                'title' => 'payments_qualification_delete',
            ],
            [
                'id'    => 107,
                'title' => 'payments_qualification_access',
            ],
            [
                'id'    => 108,
                'title' => 'payments_individual_create',
            ],
            [
                'id'    => 109,
                'title' => 'payments_individual_edit',
            ],
            [
                'id'    => 110,
                'title' => 'payments_individual_show',
            ],
            [
                'id'    => 111,
                'title' => 'payments_individual_delete',
            ],
            [
                'id'    => 112,
                'title' => 'payments_individual_access',
            ],
            [
                'id'    => 113,
                'title' => 'results_module_create',
            ],
            [
                'id'    => 114,
                'title' => 'results_module_edit',
            ],
            [
                'id'    => 115,
                'title' => 'results_module_show',
            ],
            [
                'id'    => 116,
                'title' => 'results_module_delete',
            ],
            [
                'id'    => 117,
                'title' => 'results_module_access',
            ],
            [
                'id'    => 118,
                'title' => 'results_digital_module_create',
            ],
            [
                'id'    => 119,
                'title' => 'results_digital_module_edit',
            ],
            [
                'id'    => 120,
                'title' => 'results_digital_module_show',
            ],
            [
                'id'    => 121,
                'title' => 'results_digital_module_delete',
            ],
            [
                'id'    => 122,
                'title' => 'results_digital_module_access',
            ],
            [
                'id'    => 123,
                'title' => 'support_fund_create',
            ],
            [
                'id'    => 124,
                'title' => 'support_fund_edit',
            ],
            [
                'id'    => 125,
                'title' => 'support_fund_show',
            ],
            [
                'id'    => 126,
                'title' => 'support_fund_delete',
            ],
            [
                'id'    => 127,
                'title' => 'support_fund_access',
            ],
            [
                'id'    => 128,
                'title' => 'sf_individual_create',
            ],
            [
                'id'    => 129,
                'title' => 'sf_individual_edit',
            ],
            [
                'id'    => 130,
                'title' => 'sf_individual_show',
            ],
            [
                'id'    => 131,
                'title' => 'sf_individual_delete',
            ],
            [
                'id'    => 132,
                'title' => 'sf_individual_access',
            ],
            [
                'id'    => 133,
                'title' => 'facilitator_create',
            ],
            [
                'id'    => 134,
                'title' => 'facilitator_edit',
            ],
            [
                'id'    => 135,
                'title' => 'facilitator_show',
            ],
            [
                'id'    => 136,
                'title' => 'facilitator_delete',
            ],
            [
                'id'    => 137,
                'title' => 'facilitator_access',
            ],
            [
                'id'    => 138,
                'title' => 'venue_create',
            ],
            [
                'id'    => 139,
                'title' => 'venue_edit',
            ],
            [
                'id'    => 140,
                'title' => 'venue_show',
            ],
            [
                'id'    => 141,
                'title' => 'venue_delete',
            ],
            [
                'id'    => 142,
                'title' => 'venue_access',
            ],
            [
                'id'    => 143,
                'title' => 'payments_edp_create',
            ],
            [
                'id'    => 144,
                'title' => 'payments_edp_edit',
            ],
            [
                'id'    => 145,
                'title' => 'payments_edp_show',
            ],
            [
                'id'    => 146,
                'title' => 'payments_edp_delete',
            ],
            [
                'id'    => 147,
                'title' => 'payments_edp_access',
            ],
            [
                'id'    => 148,
                'title' => 'ada_access',
            ],
            [
                'id'    => 149,
                'title' => 'award_create',
            ],
            [
                'id'    => 150,
                'title' => 'award_edit',
            ],
            [
                'id'    => 151,
                'title' => 'award_show',
            ],
            [
                'id'    => 152,
                'title' => 'award_delete',
            ],
            [
                'id'    => 153,
                'title' => 'award_access',
            ],
            [
                'id'    => 154,
                'title' => 'applicants_ada_create',
            ],
            [
                'id'    => 155,
                'title' => 'applicants_ada_edit',
            ],
            [
                'id'    => 156,
                'title' => 'applicants_ada_show',
            ],
            [
                'id'    => 157,
                'title' => 'applicants_ada_delete',
            ],
            [
                'id'    => 158,
                'title' => 'applicants_ada_access',
            ],
            [
                'id'    => 159,
                'title' => 'admissions_edp_create',
            ],
            [
                'id'    => 160,
                'title' => 'admissions_edp_edit',
            ],
            [
                'id'    => 161,
                'title' => 'admissions_edp_show',
            ],
            [
                'id'    => 162,
                'title' => 'admissions_edp_delete',
            ],
            [
                'id'    => 163,
                'title' => 'admissions_edp_access',
            ],
            [
                'id'    => 164,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
