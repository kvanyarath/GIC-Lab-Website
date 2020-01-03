<?php

use Illuminate\Database\Seeder;

class ContactUsMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
          "name" => "contactus_message",
          "slug" => "contactus-message",
          "display_name_singular" => "Contactus Message",
          "display_name_plural" => "Contactus Messages",
          "icon" => null,
          "model_name" => "App\ContactusMessage",
          "policy_name" => null,
          "controller" => null,
          "description" => null,
          "generate_permissions" => 1,
          "server_side" => 0,
          "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
          "created_at" => "2019-04-03 05:18:54",
          "updated_at" => "2019-04-03 05:18:54",
        ];
        $type = App\DataType::firstOrCreate($tmp);

        $rows = [
          [
            "id" => 100,
            "data_type_id" => 12,
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
            "id" => 101,
            "data_type_id" => 12,
            "field" => "name",
            "type" => "text",
            "display_name" => "Name",
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
            "id" => 102,
            "data_type_id" => 12,
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
            "order" => 3,
          ],
          [
            "id" => 103,
            "data_type_id" => 12,
            "field" => "question",
            "type" => "text",
            "display_name" => "Question",
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
            "id" => 104,
            "data_type_id" => 12,
            "field" => "messageStatus",
            "type" => "text",
            "display_name" => "MessageStatus",
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
            "id" => 105,
            "data_type_id" => 12,
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
            "id" => 106,
            "data_type_id" => 12,
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
        ];

        foreach($rows as $row) {
            unset($row['id']);
            $row['data_type_id'] = $type->id;
            App\DataRow::firstOrCreate($row);
        }

        $perms = [
          [
            "id" => 67,
            "key" => "browse_contactus_message",
            "table_name" => "contactus_message",
            "created_at" => "2019-04-03 05:18:54",
            "updated_at" => "2019-04-03 05:18:54",
          ],
          [
            "id" => 68,
            "key" => "read_contactus_message",
            "table_name" => "contactus_message",
            "created_at" => "2019-04-03 05:18:54",
            "updated_at" => "2019-04-03 05:18:54",
          ],
          [
            "id" => 69,
            "key" => "edit_contactus_message",
            "table_name" => "contactus_message",
            "created_at" => "2019-04-03 05:18:54",
            "updated_at" => "2019-04-03 05:18:54",
          ],
          [
            "id" => 70,
            "key" => "add_contactus_message",
            "table_name" => "contactus_message",
            "created_at" => "2019-04-03 05:18:54",
            "updated_at" => "2019-04-03 05:18:54",
          ],
          [
            "id" => 71,
            "key" => "delete_contactus_message",
            "table_name" => "contactus_message",
            "created_at" => "2019-04-03 05:18:54",
            "updated_at" => "2019-04-03 05:18:54",
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
