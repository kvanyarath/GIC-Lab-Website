<?php

use Illuminate\Database\Seeder;
use App\DataType;
use App\Permission;
use App\MenuItem;
use App\DataRow;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "contact_us",
            "slug" => "contact-us",
            "display_name_singular" => "Contact U",
            "display_name_plural" => "Contact Us",
            "icon" => null,
            "model_name" => "App\ContactUs",
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
              "id" => 89,
              "data_type_id" => 11,
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
              "id" => 90,
              "data_type_id" => 11,
              "field" => "contactUs_description",
              "type" => "text",
              "display_name" => "ContactUs Description",
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
              "id" => 91,
              "data_type_id" => 11,
              "field" => "institute_address",
              "type" => "text",
              "display_name" => "Institute Address",
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
              "id" => 92,
              "data_type_id" => 11,
              "field" => "email",
              "type" => "text",
              "display_name" => "Email",
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
              "id" => 93,
              "data_type_id" => 11,
              "field" => "phone",
              "type" => "text",
              "display_name" => "Phone",
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
              "id" => 94,
              "data_type_id" => 11,
              "field" => "general_communication",
              "type" => "text",
              "display_name" => "General Communication",
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
              "id" => 95,
              "data_type_id" => 11,
              "field" => "general_commnucation_link",
              "type" => "text",
              "display_name" => "General Commnucation Link",
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
              "id" => 96,
              "data_type_id" => 11,
              "field" => "technical_support",
              "type" => "text",
              "display_name" => "Technical Support",
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
              "id" => 97,
              "data_type_id" => 11,
              "field" => "technical_support_link",
              "type" => "text",
              "display_name" => "Technical Support Link",
              "required" => 1,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 9,
            ],
            [
              "id" => 98,
              "data_type_id" => 11,
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
              "order" => 10,
            ],
            [
              "id" => 99,
              "data_type_id" => 11,
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
              "order" => 11,
            ],
          ];

        foreach($rows as $row) {
            unset($row['id']);
            $row['data_type_id'] = $type->id;
            DataRow::firstOrCreate($row);
        }

        $perms = [
            [
              "key" => "browse_contact_us",
              "table_name" => "contact_us",
            ],
            [
              "key" => "read_contact_us",
              "table_name" => "contact_us",
            ],
            [
              "key" => "edit_contact_us",
              "table_name" => "contact_us",
            ],
            [
              "key" => "add_contact_us",
              "table_name" => "contact_us",
            ],
            [
              "key" => "delete_contact_us",
              "table_name" => "contact_us",
            ],
          ];

        foreach($perms as $perm) {
            Permission::firstOrCreate($perm);
        }
    }
}
