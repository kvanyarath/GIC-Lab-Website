<?php

use Illuminate\Database\Seeder;

class AboutUsLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
          "name" => "about_us_link",
          "slug" => "about-us-link",
          "display_name_singular" => "About Us Link",
          "display_name_plural" => "About Us Links",
          "icon" => null,
          "model_name" => "App\AboutUsLink",
          "policy_name" => null,
          "controller" => null,
          "description" => null,
          "generate_permissions" => 1,
          "server_side" => 0,
          "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
        ];
        $type = App\DataType::firstOrCreate($tmp);

        $rows = [
          [
            "id" => 84,
            "data_type_id" => 10,
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
            "id" => 85,
            "data_type_id" => 10,
            "field" => "link_title",
            "type" => "text",
            "display_name" => "Link Title",
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
            "id" => 86,
            "data_type_id" => 10,
            "field" => "link",
            "type" => "text",
            "display_name" => "Link",
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
            "id" => 87,
            "data_type_id" => 10,
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
            "order" => 4,
          ],
          [
            "id" => 88,
            "data_type_id" => 10,
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
            "order" => 5,
          ],
        ];

        foreach($rows as $row) {
            unset($row['id']);
            $row['data_type_id'] = $type->id;
            App\DataRow::firstOrCreate($row);
        }

        $perms = [
          [
            "id" => 57,
            "key" => "browse_about_us_link",
            "table_name" => "about_us_link",
            "created_at" => "2019-04-03 05:18:42",
            "updated_at" => "2019-04-03 05:18:42",
          ],
          [
            "id" => 58,
            "key" => "read_about_us_link",
            "table_name" => "about_us_link",
            "created_at" => "2019-04-03 05:18:42",
            "updated_at" => "2019-04-03 05:18:42",
          ],
          [
            "id" => 59,
            "key" => "edit_about_us_link",
            "table_name" => "about_us_link",
            "created_at" => "2019-04-03 05:18:42",
            "updated_at" => "2019-04-03 05:18:42",
          ],
          [
            "id" => 60,
            "key" => "add_about_us_link",
            "table_name" => "about_us_link",
            "created_at" => "2019-04-03 05:18:42",
            "updated_at" => "2019-04-03 05:18:42",
          ],
          [
            "id" => 61,
            "key" => "delete_about_us_link",
            "table_name" => "about_us_link",
            "created_at" => "2019-04-03 05:18:42",
            "updated_at" => "2019-04-03 05:18:42",
          ],
        ];

        foreach($perms as $perm) {
            unset($perm['id']);
            unset($perm['created_at']);
            unset($perm['updated_at']);
            App\Permission::firstOrCreate($perm);
        }
    }
}
