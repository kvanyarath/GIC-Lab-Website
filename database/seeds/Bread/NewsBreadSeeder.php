<?php

use Illuminate\Database\Seeder;

class NewsBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "news",
            "slug" => "news",
            "display_name_singular" => "News",
            "display_name_plural" => "News",
            "icon" => null,
            "model_name" => "App\News",
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
              "id" => 183,
              "data_type_id" => 31,
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
              "id" => 184,
              "data_type_id" => 31,
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
              "id" => 185,
              "data_type_id" => 31,
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
              "id" => 186,
              "data_type_id" => 31,
              "field" => "thumbnail",
              "type" => "image",
              "display_name" => "Thumbnail",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"thumbnails":[{"name":"cropped","crop":{"width":"450","height":"350"}}]}',
              "order" => 4,
            ],
            [
              "id" => 187,
              "data_type_id" => 31,
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
              "order" => 5,
            ],
            [
              "id" => 188,
              "data_type_id" => 31,
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
              "order" => 6,
            ],
            [
              "id" => 189,
              "data_type_id" => 31,
              "field" => "posted_date",
              "type" => "date",
              "display_name" => "Posted Date",
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
              "data_type_id" => 31,
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
              "data_type_id" => 31,
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
              "id" => 106,
              "key" => "browse_news",
              "table_name" => "news",
              "created_at" => "2019-05-16 04:58:56",
              "updated_at" => "2019-05-16 04:58:56",
            ],
            [
              "id" => 107,
              "key" => "read_news",
              "table_name" => "news",
              "created_at" => "2019-05-16 04:58:56",
              "updated_at" => "2019-05-16 04:58:56",
            ],
            [
              "id" => 108,
              "key" => "edit_news",
              "table_name" => "news",
              "created_at" => "2019-05-16 04:58:57",
              "updated_at" => "2019-05-16 04:58:57",
            ],
            [
              "id" => 109,
              "key" => "add_news",
              "table_name" => "news",
              "created_at" => "2019-05-16 04:58:57",
              "updated_at" => "2019-05-16 04:58:57",
            ],
            [
              "id" => 110,
              "key" => "delete_news",
              "table_name" => "news",
              "created_at" => "2019-05-16 04:58:57",
              "updated_at" => "2019-05-16 04:58:57",
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
