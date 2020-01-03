<?php

use Illuminate\Database\Seeder;

class StudentMessageBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "student_message",
            "slug" => "student-message",
            "display_name_singular" => "Student Message",
            "display_name_plural" => "Student Messages",
            "icon" => null,
            "model_name" => "App\StudentMessage",
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
              "id" => 158,
              "data_type_id" => 29,
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
              "id" => 159,
              "data_type_id" => 29,
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
              "id" => 160,
              "data_type_id" => 29,
              "field" => "position",
              "type" => "text",
              "display_name" => "Position",
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
              "id" => 161,
              "data_type_id" => 29,
              "field" => "photo_url",
              "type" => "text",
              "display_name" => "Photo Url",
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
              "id" => 162,
              "data_type_id" => 29,
              "field" => "posted_date",
              "type" => "timestamp",
              "display_name" => "Posted Date",
              "required" => 1,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "null",
              "order" => 7,
            ],
            [
              "id" => 163,
              "data_type_id" => 29,
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
              "order" => 8,
            ],
            [
              "id" => 164,
              "data_type_id" => 29,
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
              "order" => 9,
            ],
            [
              "id" => 165,
              "data_type_id" => 29,
              "field" => "content_kh",
              "type" => "text",
              "display_name" => "Content Kh",
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
              "id" => 166,
              "data_type_id" => 29,
              "field" => "content_en",
              "type" => "text",
              "display_name" => "Content En",
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
              "id" => 112,
              "key" => "browse_student_message",
              "table_name" => "student_message",
              "created_at" => "2019-05-09 10:13:20",
              "updated_at" => "2019-05-09 10:13:20",
            ],
            [
              "id" => 113,
              "key" => "read_student_message",
              "table_name" => "student_message",
              "created_at" => "2019-05-09 10:13:20",
              "updated_at" => "2019-05-09 10:13:20",
            ],
            [
              "id" => 114,
              "key" => "edit_student_message",
              "table_name" => "student_message",
              "created_at" => "2019-05-09 10:13:20",
              "updated_at" => "2019-05-09 10:13:20",
            ],
            [
              "id" => 115,
              "key" => "add_student_message",
              "table_name" => "student_message",
              "created_at" => "2019-05-09 10:13:20",
              "updated_at" => "2019-05-09 10:13:20",
            ],
            [
              "id" => 116,
              "key" => "delete_student_message",
              "table_name" => "student_message",
              "created_at" => "2019-05-09 10:13:20",
              "updated_at" => "2019-05-09 10:13:20",
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
