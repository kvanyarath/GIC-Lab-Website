<?php

use Illuminate\Database\Seeder;
use App\DataType;
use App\Permission;
use App\MenuItem;
use App\DataRow;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "about_us",
            "slug" => "about-us",
            "display_name_singular" => "About U",
            "display_name_plural" => "About Us",
            "icon" => null,
            "model_name" => "App\AboutUs",
            "policy_name" => null,
            "controller" => null,
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
          ];
        $type = DataType::firstOrCreate($tmp);

        $rows = [[
            "data_type_id" => 9,
            "field" => "id",
            "type" => "text",
            "display_name" => "Id",
            "required" => 1,
            "browse" => 0,
            "read" => 0,
            "edit" => 0,
            "add" => 0,
            "delete" => 0,
            "details" => "{}",
            "order" => 1,
          ],
          [
            "data_type_id" => 9,
            "field" => "welcome_back_description",
            "type" => "text",
            "display_name" => "Welcome Back Description",
            "required" => 1,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => "{}",
            "order" => 2,
          ],
          [
            "data_type_id" => 9,
            "field" => "aboutUs_welcome_photo",
            "type" => "text",
            "display_name" => "AboutUs Welcome Photo",
            "required" => 1,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => "{}",
            "order" => 3,
          ],
          [
            "data_type_id" => 9,
            "field" => "aboutUs_description",
            "type" => "text",
            "display_name" => "AboutUs Description",
            "required" => 1,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => "{}",
            "order" => 4,
          ],
          [
            "data_type_id" => 9,
            "field" => "history",
            "type" => "text",
            "display_name" => "History",
            "required" => 1,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => "{}",
            "order" => 5,
          ],
          [
            "data_type_id" => 9,
            "field" => "history_photo",
            "type" => "text",
            "display_name" => "History Photo",
            "required" => 1,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => "{}",
            "order" => 6,
          ],
          [
            "data_type_id" => 9,
            "field" => "partnership_title",
            "type" => "text",
            "display_name" => "Partnership Title",
            "required" => 1,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => "{}",
            "order" => 7,
          ],
          [
            "data_type_id" => 9,
            "field" => "partnership_description",
            "type" => "text",
            "display_name" => "Partnership Description",
            "required" => 1,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => "{}",
            "order" => 8,
          ],
          [
            "data_type_id" => 9,
            "field" => "created_at",
            "type" => "timestamp",
            "display_name" => "Created At",
            "required" => 0,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 0,
            "delete" => 1,
            "details" => "{}",
            "order" => 9,
          ],
          [
            "data_type_id" => 9,
            "field" => "updated_at",
            "type" => "timestamp",
            "display_name" => "Updated At",
            "required" => 0,
            "browse" => 0,
            "read" => 0,
            "edit" => 0,
            "add" => 0,
            "delete" => 0,
            "details" => "{}",
            "order" => 10,
          ]];

        foreach($rows as $row) {
            $row['data_type_id'] = $type->id;
            DataRow::firstOrCreate($row);
        }

        $perms = [
            [
              "key" => "browse_about_us",
              "table_name" => "about_us",
            ],
            [
              "key" => "read_about_us",
              "table_name" => "about_us",
            ],
            [
              "key" => "edit_about_us",
              "table_name" => "about_us",
            ],
            [
              "key" => "add_about_us",
              "table_name" => "about_us",
            ],
            [
              "key" => "delete_about_us",
              "table_name" => "about_us",
            ],
          ];

        foreach($perms as $perm) {
            Permission::firstOrCreate($perm);
        }
    }
}
