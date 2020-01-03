<?php

use Illuminate\Database\Seeder;

class ProgramYearBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "program_years",
            "slug" => "program-years",
            "display_name_singular" => "Program Year",
            "display_name_plural" => "Program Years",
            "icon" => null,
            "model_name" => "App\ProgramYear",
            "policy_name" => null,
            "controller" => null,
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
          ];
          $type = App\DataType::firstOrNew(collect($tmp)->only('name', 'slug')->toArray());
          if (!$type->exists) {
            $type->fill($tmp)->save();
          }

          $rows = [
            [
              "id" => 158,
              "data_type_id" => 21,
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
              "data_type_id" => 21,
              "field" => "program_year_en",
              "type" => "text",
              "display_name" => "Program Year En",
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
              "id" => 160,
              "data_type_id" => 21,
              "field" => "program_year_kh",
              "type" => "text",
              "display_name" => "Program Year Kh",
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
              "id" => 161,
              "data_type_id" => 21,
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
              "id" => 162,
              "data_type_id" => 21,
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
              $tmp = App\DataRow::firstOrNew(collect($row)->only('data_type_id', 'field')->toArray());
              if (!$tmp->exists) {
                $tmp->fill($row)->save();
              }
          }
  
          $perms =[
            [
              "id" => 110,
              "key" => "browse_program_years",
              "table_name" => "program_years",
              "created_at" => "2019-06-01 13:14:38",
              "updated_at" => "2019-06-01 13:14:38",
            ],
            [
              "id" => 111,
              "key" => "read_program_years",
              "table_name" => "program_years",
              "created_at" => "2019-06-01 13:14:38",
              "updated_at" => "2019-06-01 13:14:38",
            ],
            [
              "id" => 112,
              "key" => "edit_program_years",
              "table_name" => "program_years",
              "created_at" => "2019-06-01 13:14:38",
              "updated_at" => "2019-06-01 13:14:38",
            ],
            [
              "id" => 113,
              "key" => "add_program_years",
              "table_name" => "program_years",
              "created_at" => "2019-06-01 13:14:38",
              "updated_at" => "2019-06-01 13:14:38",
            ],
            [
              "id" => 114,
              "key" => "delete_program_years",
              "table_name" => "program_years",
              "created_at" => "2019-06-01 13:14:38",
              "updated_at" => "2019-06-01 13:14:38",
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
