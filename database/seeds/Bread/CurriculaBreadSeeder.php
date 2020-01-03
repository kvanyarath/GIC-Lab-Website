<?php

use Illuminate\Database\Seeder;

class CurriculaBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "curricula",
            "slug" => "curricula",
            "display_name_singular" => "Curricula",
            "display_name_plural" => "Curricula",
            "icon" => null,
            "model_name" => "App\Curricula",
            "policy_name" => null,
            "controller" => null,
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',    
          ];
          $type = App\DataType::firstOrNew(collect($tmp)->only('name', 'slug')->toArray());
          if (!$type->exists) {
            $type->fill($tmp)->save();
          }

          $rows = [
            [
              "id" => 184,
              "data_type_id" => 26,
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
              "id" => 185,
              "data_type_id" => 26,
              "field" => "degree_id",
              "type" => "select_dropdown",
              "display_name" => "Degree Id",
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
              "id" => 186,
              "data_type_id" => 26,
              "field" => "duration_en",
              "type" => "text",
              "display_name" => "Duration En",
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
              "id" => 187,
              "data_type_id" => 26,
              "field" => "duration_kh",
              "type" => "text",
              "display_name" => "Duration Kh",
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
              "id" => 188,
              "data_type_id" => 26,
              "field" => "detail_en",
              "type" => "rich_text_box",
              "display_name" => "Detail En",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 6,
            ],
            [
              "id" => 189,
              "data_type_id" => 26,
              "field" => "detail_kh",
              "type" => "rich_text_box",
              "display_name" => "Detail Kh",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 7,
            ],
            [
              "id" => 190,
              "data_type_id" => 26,
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
              "id" => 191,
              "data_type_id" => 26,
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
              "id" => 192,
              "data_type_id" => 26,
              "field" => "curriculum_belongsto_degree_relationship",
              "type" => "relationship",
              "display_name" => "degrees",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"model":"App\\\\Degree","table":"degrees","type":"belongsTo","column":"degree_id","key":"id","label":"degree_en","pivot_table":"about_gic","pivot":"0","taggable":"0"}',
              "order" => 2,
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
  
          $perms = [
            [
              "id" => 125,
              "key" => "browse_curricula",
              "table_name" => "curricula",
              "created_at" => "2019-06-03 10:41:07",
              "updated_at" => "2019-06-03 10:41:07",
            ],
            [
              "id" => 126,
              "key" => "read_curricula",
              "table_name" => "curricula",
              "created_at" => "2019-06-03 10:41:07",
              "updated_at" => "2019-06-03 10:41:07",
            ],
            [
              "id" => 127,
              "key" => "edit_curricula",
              "table_name" => "curricula",
              "created_at" => "2019-06-03 10:41:07",
              "updated_at" => "2019-06-03 10:41:07",
            ],
            [
              "id" => 128,
              "key" => "add_curricula",
              "table_name" => "curricula",
              "created_at" => "2019-06-03 10:41:07",
              "updated_at" => "2019-06-03 10:41:07",
            ],
            [
              "id" => 129,
              "key" => "delete_curricula",
              "table_name" => "curricula",
              "created_at" => "2019-06-03 10:41:07",
              "updated_at" => "2019-06-03 10:41:07",
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
