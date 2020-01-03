<?php

use Illuminate\Database\Seeder;

class EventBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "events",
            "slug" => "events",
            "display_name_singular" => "Seminar",
            "display_name_plural" => "Seminars",
            "icon" => null,
            "model_name" => "App\Event",
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
              "id" => 117,
              "data_type_id" => 27,
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
              "id" => 118,
              "data_type_id" => 27,
              "field" => "name",
              "type" => "text",
              "display_name" => "Name",
              "required" => 1,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"validation":{"rule":"required"}}',
              "order" => 2,
            ],
            [
              "id" => 119,
              "data_type_id" => 27,
              "field" => "detail",
              "type" => "rich_text_box",
              "display_name" => "Detail",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 4,
            ],
            [
              "id" => 120,
              "data_type_id" => 27,
              "field" => "start_date",
              "type" => "date",
              "display_name" => "Start Date",
              "required" => 1,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"validation":{"rule":"required"}}',
              "order" => 5,
            ],
            [
              "id" => 121,
              "data_type_id" => 27,
              "field" => "end_date",
              "type" => "date",
              "display_name" => "End Date",
              "required" => 1,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"validation":{"rule":"required"}}',
              "order" => 6,
            ],
            [
              "id" => 122,
              "data_type_id" => 27,
              "field" => "created_at",
              "type" => "timestamp",
              "display_name" => "Created At",
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
              "id" => 123,
              "data_type_id" => 27,
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
              "order" => 8,
            ],
            [
              "id" => 124,
              "data_type_id" => 27,
              "field" => "image",
              "type" => "image",
              "display_name" => "Image",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 3,
            ],
          ];

        foreach($rows as $row) {
            unset($row['id']);
            $row['data_type_id'] = $type->id;
            App\DataRow::firstOrCreate($row);
        }

        $perms = [
            [
              "id" => 91,
              "key" => "browse_events",
              "table_name" => "events",
              "created_at" => "2019-05-09 05:48:33",
              "updated_at" => "2019-05-09 05:48:33",
            ],
            [
              "id" => 92,
              "key" => "read_events",
              "table_name" => "events",
              "created_at" => "2019-05-09 05:48:33",
              "updated_at" => "2019-05-09 05:48:33",
            ],
            [
              "id" => 93,
              "key" => "edit_events",
              "table_name" => "events",
              "created_at" => "2019-05-09 05:48:33",
              "updated_at" => "2019-05-09 05:48:33",
            ],
            [
              "id" => 94,
              "key" => "add_events",
              "table_name" => "events",
              "created_at" => "2019-05-09 05:48:33",
              "updated_at" => "2019-05-09 05:48:33",
            ],
            [
              "id" => 95,
              "key" => "delete_events",
              "table_name" => "events",
              "created_at" => "2019-05-09 05:48:33",
              "updated_at" => "2019-05-09 05:48:33",
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
