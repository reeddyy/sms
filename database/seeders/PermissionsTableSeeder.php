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
                'title' => 'module_create',
            ],
            [
                'id'    => 18,
                'title' => 'module_edit',
            ],
            [
                'id'    => 19,
                'title' => 'module_show',
            ],
            [
                'id'    => 20,
                'title' => 'module_delete',
            ],
            [
                'id'    => 21,
                'title' => 'module_access',
            ],
            [
                'id'    => 22,
                'title' => 'course_create',
            ],
            [
                'id'    => 23,
                'title' => 'course_edit',
            ],
            [
                'id'    => 24,
                'title' => 'course_show',
            ],
            [
                'id'    => 25,
                'title' => 'course_delete',
            ],
            [
                'id'    => 26,
                'title' => 'course_access',
            ],
            [
                'id'    => 27,
                'title' => 'individual_create',
            ],
            [
                'id'    => 28,
                'title' => 'individual_edit',
            ],
            [
                'id'    => 29,
                'title' => 'individual_show',
            ],
            [
                'id'    => 30,
                'title' => 'individual_delete',
            ],
            [
                'id'    => 31,
                'title' => 'individual_access',
            ],
            [
                'id'    => 32,
                'title' => 'qualification_create',
            ],
            [
                'id'    => 33,
                'title' => 'qualification_edit',
            ],
            [
                'id'    => 34,
                'title' => 'qualification_show',
            ],
            [
                'id'    => 35,
                'title' => 'qualification_delete',
            ],
            [
                'id'    => 36,
                'title' => 'qualification_access',
            ],
            [
                'id'    => 37,
                'title' => 'grade_create',
            ],
            [
                'id'    => 38,
                'title' => 'grade_edit',
            ],
            [
                'id'    => 39,
                'title' => 'grade_show',
            ],
            [
                'id'    => 40,
                'title' => 'grade_delete',
            ],
            [
                'id'    => 41,
                'title' => 'grade_access',
            ],
            [
                'id'    => 42,
                'title' => 'membership_create',
            ],
            [
                'id'    => 43,
                'title' => 'membership_edit',
            ],
            [
                'id'    => 44,
                'title' => 'membership_show',
            ],
            [
                'id'    => 45,
                'title' => 'membership_delete',
            ],
            [
                'id'    => 46,
                'title' => 'membership_access',
            ],
            [
                'id'    => 47,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
