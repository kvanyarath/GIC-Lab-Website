<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GeneratedRolesTableSeeder::class);
        $this->call(GeneratedSettingsTableSeeder::class);
        $this->call(GeneratedDataTypesTableSeeder::class);
        $this->call(GeneratedDataRowsTableSeeder::class);
        $this->call(GeneratedPermissionsTableSeeder::class);
        $this->call(GeneratedPermissionRoleTableSeeder::class);
        $this->call(GeneratedMenusTableSeeder::class);
        $this->call(GeneratedMenuItemsTableSeeder::class);
        $this->call(GeneratedAboutGicTableSeeder::class);
        $this->call(GeneratedSiteContentsTableSeeder::class);

        $this->call(UsersTableSeeder::class);
    }
}
