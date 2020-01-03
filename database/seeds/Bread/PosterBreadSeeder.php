<?php

use Illuminate\Database\Seeder;

class PosterBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "posters",
            "slug" => "posters",
            "display_name_singular" => "Poster",
            "display_name_plural" => "Posters",
            "icon" => null,
            "model_name" => "App\Poster",
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
              "id" => 208,
              "data_type_id" => 28,
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
              "id" => 209,
              "data_type_id" => 28,
              "field" => "file_location",
              "type" => "image",
              "display_name" => "File Location",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"thumbnails":[{"name":"cropped","crop":{"width":"255","height":"405"}}]}',
              "order" => 2,
            ],
            [
              "id" => 210,
              "data_type_id" => 28,
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
              "order" => 3,
            ],
            [
              "id" => 211,
              "data_type_id" => 28,
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
              "order" => 4,
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
              "id" => 135,
              "key" => "browse_posters",
              "table_name" => "posters",
              "created_at" => "2019-06-10 08:11:14",
              "updated_at" => "2019-06-10 08:11:14",
            ],
            [
              "id" => 136,
              "key" => "read_posters",
              "table_name" => "posters",
              "created_at" => "2019-06-10 08:11:14",
              "updated_at" => "2019-06-10 08:11:14",
            ],
            [
              "id" => 137,
              "key" => "edit_posters",
              "table_name" => "posters",
              "created_at" => "2019-06-10 08:11:14",
              "updated_at" => "2019-06-10 08:11:14",
            ],
            [
              "id" => 138,
              "key" => "add_posters",
              "table_name" => "posters",
              "created_at" => "2019-06-10 08:11:14",
              "updated_at" => "2019-06-10 08:11:14",
            ],
            [
              "id" => 139,
              "key" => "delete_posters",
              "table_name" => "posters",
              "created_at" => "2019-06-10 08:11:14",
              "updated_at" => "2019-06-10 08:11:14",
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
