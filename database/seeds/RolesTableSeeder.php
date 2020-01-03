<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => __('voyager::seeders.roles.admin'),
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => __('voyager::seeders.roles.user'),
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'gic_staff']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'GIC Staff',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'gic_alumni']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'GIC Alumni',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'gic_student']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'GIC Student',
                ])->save();
        }
    }
}
