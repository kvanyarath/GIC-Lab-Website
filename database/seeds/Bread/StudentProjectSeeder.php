<?php

use Illuminate\Database\Seeder;
use App\DataType;
use App\Permission;
use App\MenuItem;
use App\DataRow;

class StudentProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "students_projects",
            "slug" => "students-projects",
            "display_name_singular" => "Students Project",
            "display_name_plural" => "Students Projects",
            "icon" => "voyager-paper-plane",
            "model_name" => "App\StudentsProject",
            "policy_name" => null,
            "controller" => null,
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
          ];
        $type = DataType::firstOrCreate($tmp);

        $rows = [
            [
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
              "data_type_id" => 11,
              "field" => "name",
              "type" => "text",
              "display_name" => "Name",
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
              "data_type_id" => 11,
              "field" => "description",
              "type" => "rich_text_box",
              "display_name" => "Description",
              "required" => 1,
              "browse" => 0,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 3,
            ],
            [
              "data_type_id" => 11,
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
              "data_type_id" => 11,
              "field" => "academic_year",
              "type" => "text",
              "display_name" => "Academic Year",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 5,
            ],
            [
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
              "order" => 6,
            ],
            [
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
              "order" => 7,
            ],
          ];

        foreach($rows as $row) {
            $row['data_type_id'] = $type->id;
            DataRow::firstOrCreate($row);
        }

        $perms = [
            [
              "key" => "browse_students_projects",
              "table_name" => "students_projects",
            ],
            [
              "key" => "read_students_projects",
              "table_name" => "students_projects",
            ],
            [
              "key" => "edit_students_projects",
              "table_name" => "students_projects",
            ],
            [
              "key" => "add_students_projects",
              "table_name" => "students_projects",
            ],
            [
              "key" => "delete_students_projects",
              "table_name" => "students_projects",
            ],
          ];

        foreach($perms as $perm) {
            Permission::firstOrCreate($perm);
        }
    }
}
