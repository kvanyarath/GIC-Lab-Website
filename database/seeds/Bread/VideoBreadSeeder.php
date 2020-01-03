<?php

use Illuminate\Database\Seeder;

class VideoBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "videos",
            "slug" => "videos",
            "display_name_singular" => "Video",
            "display_name_plural" => "Videos",
            "icon" => null,
            "model_name" => "App\Video",
          ];
          $type = App\DataType::firstOrNew(collect($tmp)->only('name', 'slug')->toArray());
          if (!$type->exists) {
            $type->fill($tmp)->save();
          }

          $rows = [
            [
              "id" => 217,
              "data_type_id" => 30,
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
              "id" => 218,
              "data_type_id" => 30,
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
              "id" => 219,
              "data_type_id" => 30,
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
              "id" => 220,
              "data_type_id" => 30,
              "field" => "description_en",
              "type" => "text_area",
              "display_name" => "Description En",
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
              "id" => 221,
              "data_type_id" => 30,
              "field" => "description_kh",
              "type" => "text_area",
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
              "id" => 222,
              "data_type_id" => 30,
              "field" => "video_file",
              "type" => "text",
              "display_name" => "Video File",
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
              "id" => 223,
              "data_type_id" => 30,
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
              "id" => 224,
              "data_type_id" => 30,
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
              "order" => 8,
            ],
            [
              "id" => 225,
              "data_type_id" => 30,
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
              "id" => 145,
              "key" => "browse_videos",
              "table_name" => "videos",
              "created_at" => "2019-06-19 07:10:30",
              "updated_at" => "2019-06-19 07:10:30",
            ],
            [
              "id" => 146,
              "key" => "read_videos",
              "table_name" => "videos",
              "created_at" => "2019-06-19 07:10:30",
              "updated_at" => "2019-06-19 07:10:30",
            ],
            [
              "id" => 147,
              "key" => "edit_videos",
              "table_name" => "videos",
              "created_at" => "2019-06-19 07:10:30",
              "updated_at" => "2019-06-19 07:10:30",
            ],
            [
              "id" => 148,
              "key" => "add_videos",
              "table_name" => "videos",
              "created_at" => "2019-06-19 07:10:30",
              "updated_at" => "2019-06-19 07:10:30",
            ],
            [
              "id" => 149,
              "key" => "delete_videos",
              "table_name" => "videos",
              "created_at" => "2019-06-19 07:10:30",
              "updated_at" => "2019-06-19 07:10:30",
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
