<?php

use Illuminate\Database\Seeder;

class PhotoAlbumBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "photo_albums",
            "slug" => "photo-albums",
            "display_name_singular" => "Photo Album",
            "display_name_plural" => "Photo Albums",
            "icon" => "voyager-photos",
            "model_name" => "App\PhotoAlbum",
            "policy_name" => null,
            "controller" => "App\Http\Controllers\Backend\PhotoAlbumController",
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
          ];
          $type = App\DataType::firstOrCreate($tmp);
  
          $rows = [
            [
              "id" => 130,
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
              "id" => 131,
              "data_type_id" => 29,
              "field" => "name_en",
              "type" => "text",
              "display_name" => "Name En",
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
              "id" => 132,
              "data_type_id" => 29,
              "field" => "name_kh",
              "type" => "text",
              "display_name" => "Name Kh",
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
              "id" => 133,
              "data_type_id" => 29,
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
              "order" => 4,
            ],
            [
              "id" => 134,
              "data_type_id" => 29,
              "field" => "text_desc_en",
              "type" => "text_area",
              "display_name" => "Text Desc En",
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
              "id" => 135,
              "data_type_id" => 29,
              "field" => "text_desc_kh",
              "type" => "text_area",
              "display_name" => "Text Desc Kh",
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
              "id" => 136,
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
              "order" => 7,
            ],
            [
              "id" => 137,
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
              "order" => 8,
            ],
          ];
  
          foreach($rows as $row) {
              unset($row['id']);
              $row['data_type_id'] = $type->id;
              App\DataRow::firstOrCreate($row);
          }
  
          $perms = [
            [
              "id" => 101,
              "key" => "browse_photo_albums",
              "table_name" => "photo_albums",
              "created_at" => "2019-05-10 04:34:00",
              "updated_at" => "2019-05-10 04:34:00",
            ],
            [
              "id" => 102,
              "key" => "read_photo_albums",
              "table_name" => "photo_albums",
              "created_at" => "2019-05-10 04:34:00",
              "updated_at" => "2019-05-10 04:34:00",
            ],
            [
              "id" => 103,
              "key" => "edit_photo_albums",
              "table_name" => "photo_albums",
              "created_at" => "2019-05-10 04:34:00",
              "updated_at" => "2019-05-10 04:34:00",
            ],
            [
              "id" => 104,
              "key" => "add_photo_albums",
              "table_name" => "photo_albums",
              "created_at" => "2019-05-10 04:34:00",
              "updated_at" => "2019-05-10 04:34:00",
            ],
            [
              "id" => 105,
              "key" => "delete_photo_albums",
              "table_name" => "photo_albums",
              "created_at" => "2019-05-10 04:34:00",
              "updated_at" => "2019-05-10 04:34:00",
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
