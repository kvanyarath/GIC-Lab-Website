<?php

use Illuminate\Database\Seeder;

class PhotoBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "photos",
            "slug" => "photos",
            "display_name_singular" => "Photo",
            "display_name_plural" => "Photos",
            "icon" => "voyager-photo",
            "model_name" => "App\Photo",
            "policy_name" => null,
            "controller" => "App\Http\Controllers\Backend\PhotoController",
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
          ];
          $type = App\DataType::firstOrCreate($tmp);
  
          $rows = [
            [
              "id" => 125,
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
              "id" => 126,
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
              "details" => "{}",
              "order" => 2,
            ],
            [
              "id" => 127,
              "data_type_id" => 28,
              "field" => "photo_album_id",
              "type" => "select_dropdown",
              "display_name" => "Photo Album Id",
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
              "id" => 128,
              "data_type_id" => 28,
              "field" => "created_at",
              "type" => "timestamp",
              "display_name" => "Created At",
              "required" => 0,
              "browse" => 0,
              "read" => 0,
              "edit" => 0,
              "add" => 0,
              "delete" => 0,
              "details" => "{}",
              "order" => 4,
            ],
            [
              "id" => 129,
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
              "order" => 5,
            ],
            [
              "id" => 139,
              "data_type_id" => 28,
              "field" => "photo_belongsto_photo_album_relationship",
              "type" => "relationship",
              "display_name" => "photo_albums",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"model":"App\\\\PhotoAlbum","table":"photo_albums","type":"belongsTo","column":"photo_album_id","key":"id","label":"name_en","pivot_table":"about_us","pivot":"0","taggable":"0"}',
              "order" => 6,
            ],
          ];
  
          foreach($rows as $row) {
              unset($row['id']);
              $row['data_type_id'] = $type->id;
              App\DataRow::firstOrCreate($row);
          }
  
          $perms = [
            [
              "id" => 96,
              "key" => "browse_photos",
              "table_name" => "photos",
              "created_at" => "2019-05-10 04:33:27",
              "updated_at" => "2019-05-10 04:33:27",
            ],
            [
              "id" => 97,
              "key" => "read_photos",
              "table_name" => "photos",
              "created_at" => "2019-05-10 04:33:27",
              "updated_at" => "2019-05-10 04:33:27",
            ],
            [
              "id" => 98,
              "key" => "edit_photos",
              "table_name" => "photos",
              "created_at" => "2019-05-10 04:33:27",
              "updated_at" => "2019-05-10 04:33:27",
            ],
            [
              "id" => 99,
              "key" => "add_photos",
              "table_name" => "photos",
              "created_at" => "2019-05-10 04:33:27",
              "updated_at" => "2019-05-10 04:33:27",
            ],
            [
              "id" => 100,
              "key" => "delete_photos",
              "table_name" => "photos",
              "created_at" => "2019-05-10 04:33:27",
              "updated_at" => "2019-05-10 04:33:27",
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
