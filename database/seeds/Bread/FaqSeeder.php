<?php

use Illuminate\Database\Seeder;
use App\DataType;
use App\Permission;
use App\MenuItem;
use App\DataRow;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "faqs",
            "slug" => "faqs",
            "display_name_singular" => "Faq",
            "display_name_plural" => "Faqs",
            "icon" => "voyager-paper-plane",
            "model_name" => "App\Faq",
            "policy_name" => null,
            "controller" => null,
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
        ];
        $type = DataType::firstOrCreate($tmp);

        $rows = [
            [
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
              "field" => "question",
              "type" => "text",
              "display_name" => "Question",
              "required" => 0,
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
              "field" => "answer",
              "type" => "text",
              "display_name" => "Answer",
              "required" => 0,
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
              "field" => "type",
              "type" => "text",
              "display_name" => "Type",
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
              "order" => 5,
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
              "order" => 6,
            ],
        ];

        foreach($rows as $row) {
            $row['data_type_id'] = $type->id;
            DataRow::firstOrCreate($row);
        }

        $perms = [
            [
              "key" => "browse_faqs",
              "table_name" => "faqs",
            ],
            [
              "key" => "read_faqs",
              "table_name" => "faqs",
            ],
            [
              "key" => "edit_faqs",
              "table_name" => "faqs",
            ],
            [
              "key" => "add_faqs",
              "table_name" => "faqs",
            ],
            [
              "key" => "delete_faqs",
              "table_name" => "faqs",
            ],
        ];

        foreach($perms as $perm) {
            Permission::firstOrCreate($perm);
        }
    }
}
