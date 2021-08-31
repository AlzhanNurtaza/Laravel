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
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'kpi_general_access',
            ],
            [
                'id'    => 19,
                'title' => 'kpi_zpp_access',
            ],
            [
                'id'    => 20,
                'title' => 'kpi_gen_anpz_create',
            ],
            [
                'id'    => 21,
                'title' => 'kpi_gen_anpz_edit',
            ],
            [
                'id'    => 22,
                'title' => 'kpi_gen_anpz_show',
            ],
            [
                'id'    => 23,
                'title' => 'kpi_gen_anpz_delete',
            ],
            [
                'id'    => 24,
                'title' => 'kpi_gen_anpz_access',
            ],
            [
                'id'    => 25,
                'title' => 'kpi_gen_pnhz_create',
            ],
            [
                'id'    => 26,
                'title' => 'kpi_gen_pnhz_edit',
            ],
            [
                'id'    => 27,
                'title' => 'kpi_gen_pnhz_show',
            ],
            [
                'id'    => 28,
                'title' => 'kpi_gen_pnhz_delete',
            ],
            [
                'id'    => 29,
                'title' => 'kpi_gen_pnhz_access',
            ],
            [
                'id'    => 30,
                'title' => 'kpi_gen_pkop_create',
            ],
            [
                'id'    => 31,
                'title' => 'kpi_gen_pkop_edit',
            ],
            [
                'id'    => 32,
                'title' => 'kpi_gen_pkop_show',
            ],
            [
                'id'    => 33,
                'title' => 'kpi_gen_pkop_delete',
            ],
            [
                'id'    => 34,
                'title' => 'kpi_gen_pkop_access',
            ],
            [
                'id'    => 35,
                'title' => 'kpi_gen_c_b_create',
            ],
            [
                'id'    => 36,
                'title' => 'kpi_gen_c_b_edit',
            ],
            [
                'id'    => 37,
                'title' => 'kpi_gen_c_b_show',
            ],
            [
                'id'    => 38,
                'title' => 'kpi_gen_c_b_delete',
            ],
            [
                'id'    => 39,
                'title' => 'kpi_gen_c_b_access',
            ],
            [
                'id'    => 40,
                'title' => 'kpi_zpp_anpz_create',
            ],
            [
                'id'    => 41,
                'title' => 'kpi_zpp_anpz_edit',
            ],
            [
                'id'    => 42,
                'title' => 'kpi_zpp_anpz_show',
            ],
            [
                'id'    => 43,
                'title' => 'kpi_zpp_anpz_delete',
            ],
            [
                'id'    => 44,
                'title' => 'kpi_zpp_anpz_access',
            ],
            [
                'id'    => 45,
                'title' => 'kpi_zpp_pnhz_create',
            ],
            [
                'id'    => 46,
                'title' => 'kpi_zpp_pnhz_edit',
            ],
            [
                'id'    => 47,
                'title' => 'kpi_zpp_pnhz_show',
            ],
            [
                'id'    => 48,
                'title' => 'kpi_zpp_pnhz_delete',
            ],
            [
                'id'    => 49,
                'title' => 'kpi_zpp_pnhz_access',
            ],
            [
                'id'    => 50,
                'title' => 'kpi_zpp_pkop_create',
            ],
            [
                'id'    => 51,
                'title' => 'kpi_zpp_pkop_edit',
            ],
            [
                'id'    => 52,
                'title' => 'kpi_zpp_pkop_show',
            ],
            [
                'id'    => 53,
                'title' => 'kpi_zpp_pkop_delete',
            ],
            [
                'id'    => 54,
                'title' => 'kpi_zpp_pkop_access',
            ],
            [
                'id'    => 55,
                'title' => 'kpi_zpp_c_b_create',
            ],
            [
                'id'    => 56,
                'title' => 'kpi_zpp_c_b_edit',
            ],
            [
                'id'    => 57,
                'title' => 'kpi_zpp_c_b_show',
            ],
            [
                'id'    => 58,
                'title' => 'kpi_zpp_c_b_delete',
            ],
            [
                'id'    => 59,
                'title' => 'kpi_zpp_c_b_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
