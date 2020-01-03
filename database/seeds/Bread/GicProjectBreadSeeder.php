<?php

use Illuminate\Database\Seeder;

class GicProjectBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "gic_projects",
            "slug" => "gic-projects",
            "display_name_singular" => "Gic Project",
            "display_name_plural" => "Gic Projects",
            "icon" => null,
            "model_name" => "App\GicProject",
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

          $rows =[
            [
              "id" => 197,
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
              "id" => 198,
              "data_type_id" => 27,
              "field" => "title_en",
              "type" => "text",
              "display_name" => "Title En",
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
              "id" => 199,
              "data_type_id" => 27,
              "field" => "title_kh",
              "type" => "text",
              "display_name" => "Title Kh",
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
              "id" => 200,
              "data_type_id" => 27,
              "field" => "thumbnail",
              "type" => "image",
              "display_name" => "Thumbnail",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"thumbnails":[{"name":"cropped","crop":{"width":"400","height":"270"}}]}',
              "order" => 4,
            ],
            [
              "id" => 201,
              "data_type_id" => 27,
              "field" => "description_en",
              "type" => "rich_text_box",
              "display_name" => "Description En",
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
              "id" => 202,
              "data_type_id" => 27,
              "field" => "description_kh",
              "type" => "rich_text_box",
              "display_name" => "Description Kh",
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
              "id" => 203,
              "data_type_id" => 27,
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
              "order" => 7,
            ],
            [
              "id" => 204,
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
              "id" => 205,
              "data_type_id" => 27,
              "field" => "ongoing_project",
              "type" => "checkbox",
              "display_name" => "Ongoing Project",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 7,
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
                "id" => 130,
                "key" => "browse_gic_projects",
                "table_name" => "gic_projects",
                "created_at" => "2019-06-09 07:42:27",
                "updated_at" => "2019-06-09 07:42:27",
            ],
            [
                "id" => 131,
                "key" => "read_gic_projects",
                "table_name" => "gic_projects",
                "created_at" => "2019-06-09 07:42:27",
                "updated_at" => "2019-06-09 07:42:27",
            ],
            [
                "id" => 132,
                "key" => "edit_gic_projects",
                "table_name" => "gic_projects",
                "created_at" => "2019-06-09 07:42:27",
                "updated_at" => "2019-06-09 07:42:27",
            ],
            [
                "id" => 133,
                "key" => "add_gic_projects",
                "table_name" => "gic_projects",
                "created_at" => "2019-06-09 07:42:27",
                "updated_at" => "2019-06-09 07:42:27",
            ],
            [
                "id" => 134,
                "key" => "delete_gic_projects",
                "table_name" => "gic_projects",
                "created_at" => "2019-06-09 07:42:27",
                "updated_at" => "2019-06-09 07:42:27",
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