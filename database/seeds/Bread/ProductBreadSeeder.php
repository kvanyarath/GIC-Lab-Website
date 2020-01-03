<?php

use Illuminate\Database\Seeder;

class ProductBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "products",
            "slug" => "products",
            "display_name_singular" => "Product",
            "display_name_plural" => "Products",
            "icon" => null,
            "model_name" => "App\Product",
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
              "id" => 146,
              "data_type_id" => 19,
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
              "id" => 147,
              "data_type_id" => 19,
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
              "order" => 2,
            ],
            [
              "id" => 148,
              "data_type_id" => 19,
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
              "order" => 3,
            ],
            [
              "id" => 149,
              "data_type_id" => 19,
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
              "order" => 5,
            ],
            [
              "id" => 150,
              "data_type_id" => 19,
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
              "id" => 151,
              "data_type_id" => 19,
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
              "id" => 152,
              "data_type_id" => 19,
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
              "id" => 207,
              "data_type_id" => 19,
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
              "id" => 100,
              "key" => "browse_products",
              "table_name" => "products",
              "created_at" => "2019-05-31 06:07:03",
              "updated_at" => "2019-05-31 06:07:03",
            ],
            [
              "id" => 101,
              "key" => "read_products",
              "table_name" => "products",
              "created_at" => "2019-05-31 06:07:03",
              "updated_at" => "2019-05-31 06:07:03",
            ],
            [
              "id" => 102,
              "key" => "edit_products",
              "table_name" => "products",
              "created_at" => "2019-05-31 06:07:03",
              "updated_at" => "2019-05-31 06:07:03",
            ],
            [
              "id" => 103,
              "key" => "add_products",
              "table_name" => "products",
              "created_at" => "2019-05-31 06:07:03",
              "updated_at" => "2019-05-31 06:07:03",
            ],
            [
              "id" => 104,
              "key" => "delete_products",
              "table_name" => "products",
              "created_at" => "2019-05-31 06:07:03",
              "updated_at" => "2019-05-31 06:07:03",
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