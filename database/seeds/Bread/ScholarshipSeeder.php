<?php

use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "scholarship",
            "slug" => "scholarship",
            "display_name_singular" => "Scholarship",
            "display_name_plural" => "Scholarships",
            "icon" => null,
            "model_name" => "App\Scholarship",
            "policy_name" => null,
            "controller" => null,
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
          ];
        $type = App\DataType::firstOrCreate($tmp);

        $rows = [
            [
              "id" => 111,
              "data_type_id" => 16,
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
              "id" => 112,
              "data_type_id" => 16,
              "field" => "title",
              "type" => "text",
              "display_name" => "Title",
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
              "id" => 113,
              "data_type_id" => 16,
              "field" => "scholarship_description",
              "type" => "text",
              "display_name" => "Scholarship Description",
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
              "id" => 114,
              "data_type_id" => 16,
              "field" => "scholarship_image",
              "type" => "text",
              "display_name" => "Scholarship Image",
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
              "id" => 115,
              "data_type_id" => 16,
              "field" => "scholarship_reference_url",
              "type" => "text",
              "display_name" => "Scholarship Reference Url",
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
              "id" => 116,
              "data_type_id" => 16,
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
              "order" => 6,
            ],
            [
              "id" => 117,
              "data_type_id" => 16,
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
              "order" => 7,
            ],
            [
              "id" => 118,
              "data_type_id" => 16,
              "field" => "scholarship_image_description",
              "type" => "text",
              "display_name" => "Scholarship Image Description",
              "required" => 1,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
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
              "id" => 77,
              "key" => "browse_scholarship",
              "table_name" => "scholarship",
              "created_at" => "2019-04-04 06:57:40",
              "updated_at" => "2019-04-04 06:57:40",
            ],
            [
              "id" => 78,
              "key" => "read_scholarship",
              "table_name" => "scholarship",
              "created_at" => "2019-04-04 06:57:40",
              "updated_at" => "2019-04-04 06:57:40",
            ],
            [
              "id" => 79,
              "key" => "edit_scholarship",
              "table_name" => "scholarship",
              "created_at" => "2019-04-04 06:57:40",
              "updated_at" => "2019-04-04 06:57:40",
            ],
            [
              "id" => 80,
              "key" => "add_scholarship",
              "table_name" => "scholarship",
              "created_at" => "2019-04-04 06:57:40",
              "updated_at" => "2019-04-04 06:57:40",
            ],
            [
              "id" => 81,
              "key" => "delete_scholarship",
              "table_name" => "scholarship",
              "created_at" => "2019-04-04 06:57:40",
              "updated_at" => "2019-04-04 06:57:40",
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
