<?php

use Illuminate\Database\Seeder;

class DegreeBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "degrees",
            "slug" => "degrees",
            "display_name_singular" => "Degree",
            "display_name_plural" => "Degrees",
            "icon" => null,
            "model_name" => "App\Degree",
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
              "id" => 153,
              "data_type_id" => 20,
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
              "id" => 154,
              "data_type_id" => 20,
              "field" => "degree_en",
              "type" => "text",
              "display_name" => "Degree En",
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
              "id" => 155,
              "data_type_id" => 20,
              "field" => "degree_kh",
              "type" => "text",
              "display_name" => "Degree Kh",
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
              "id" => 156,
              "data_type_id" => 20,
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
              "id" => 157,
              "data_type_id" => 20,
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
  
          $perms = [
            [
              "id" => 105,
              "key" => "browse_degrees",
              "table_name" => "degrees",
              "created_at" => "2019-06-01 13:14:19",
              "updated_at" => "2019-06-01 13:14:19",
            ],
            [
              "id" => 106,
              "key" => "read_degrees",
              "table_name" => "degrees",
              "created_at" => "2019-06-01 13:14:19",
              "updated_at" => "2019-06-01 13:14:19",
            ],
            [
              "id" => 107,
              "key" => "edit_degrees",
              "table_name" => "degrees",
              "created_at" => "2019-06-01 13:14:19",
              "updated_at" => "2019-06-01 13:14:19",
            ],
            [
              "id" => 108,
              "key" => "add_degrees",
              "table_name" => "degrees",
              "created_at" => "2019-06-01 13:14:19",
              "updated_at" => "2019-06-01 13:14:19",
            ],
            [
              "id" => 109,
              "key" => "delete_degrees",
              "table_name" => "degrees",
              "created_at" => "2019-06-01 13:14:19",
              "updated_at" => "2019-06-01 13:14:19",
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
