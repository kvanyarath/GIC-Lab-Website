<?php

use Illuminate\Database\Seeder;

class AboutGicBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
          "name" => "about_gic",
          "slug" => "about-gic",
          "display_name_singular" => "About Gic",
          "display_name_plural" => "About Gics",
          "icon" => null,
          "model_name" => "App\AboutGic",
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
              "id" => 148,
              "data_type_id" => 33,
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
              "id" => 149,
              "data_type_id" => 33,
              "field" => "location_map",
              "type" => "text",
              "display_name" => "Location Map",
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
              "id" => 150,
              "data_type_id" => 33,
              "field" => "facebook_page",
              "type" => "text",
              "display_name" => "Facebook Page",
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
              "id" => 151,
              "data_type_id" => 33,
              "field" => "youtube_url",
              "type" => "text",
              "display_name" => "Youtube Url",
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
              "id" => 152,
              "data_type_id" => 33,
              "field" => "twitter_url",
              "type" => "text",
              "display_name" => "Twitter Url",
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
              "id" => 153,
              "data_type_id" => 33,
              "field" => "instagram_url",
              "type" => "text",
              "display_name" => "Instagram Url",
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
              "id" => 154,
              "data_type_id" => 33,
              "field" => "linkedin_url",
              "type" => "text",
              "display_name" => "Linkedin Url",
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
              "id" => 155,
              "data_type_id" => 33,
              "field" => "contact_email",
              "type" => "text",
              "display_name" => "Contact Email",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 8,
            ],
            [
              "id" => 156,
              "data_type_id" => 33,
              "field" => "contact_phone",
              "type" => "text",
              "display_name" => "Contact Phone",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 9,
            ],
            [
              "id" => 157,
              "data_type_id" => 33,
              "field" => "about_us_text_en",
              "type" => "rich_text_box",
              "display_name" => "About Us Text En",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 10,
            ],
            [
              "id" => 158,
              "data_type_id" => 33,
              "field" => "about_us_text_kh",
              "type" => "rich_text_box",
              "display_name" => "About Us Text Kh",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 11,
            ],
            [
              "id" => 159,
              "data_type_id" => 33,
              "field" => "mission_en",
              "type" => "rich_text_box",
              "display_name" => "Mission En",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 12,
            ],
            [
              "id" => 160,
              "data_type_id" => 33,
              "field" => "mission_kh",
              "type" => "rich_text_box",
              "display_name" => "Mission Kh",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 13,
            ],
            [
              "id" => 161,
              "data_type_id" => 33,
              "field" => "vision_en",
              "type" => "rich_text_box",
              "display_name" => "Vision En",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 14,
            ],
            [
              "id" => 162,
              "data_type_id" => 33,
              "field" => "vision_kh",
              "type" => "rich_text_box",
              "display_name" => "Vision Kh",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 15,
            ],
            [
              "id" => 163,
              "data_type_id" => 33,
              "field" => "created_at",
              "type" => "timestamp",
              "display_name" => "Created At",
              "required" => 0,
              "browse" => 0,
              "read" => 1,
              "edit" => 0,
              "add" => 0,
              "delete" => 0,
              "details" => "{}",
              "order" => 16,
            ],
            [
              "id" => 164,
              "data_type_id" => 33,
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
              "order" => 17,
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
              "id" => 111,
              "key" => "browse_about_gic",
              "table_name" => "about_gic",
              "created_at" => "2019-05-17 06:26:40",
              "updated_at" => "2019-05-17 06:26:40",
            ],
            [
              "id" => 112,
              "key" => "read_about_gic",
              "table_name" => "about_gic",
              "created_at" => "2019-05-17 06:26:40",
              "updated_at" => "2019-05-17 06:26:40",
            ],
            [
              "id" => 113,
              "key" => "edit_about_gic",
              "table_name" => "about_gic",
              "created_at" => "2019-05-17 06:26:40",
              "updated_at" => "2019-05-17 06:26:40",
            ],
            // [
            //   "id" => 114,
            //   "key" => "add_about_gic",
            //   "table_name" => "about_gic",
            //   "created_at" => "2019-05-17 06:26:40",
            //   "updated_at" => "2019-05-17 06:26:40",
            // ],
            // [
            //   "id" => 115,
            //   "key" => "delete_about_gic",
            //   "table_name" => "about_gic",
            //   "created_at" => "2019-05-17 06:26:40",
            //   "updated_at" => "2019-05-17 06:26:40",
            // ],
          ];
  
          foreach($perms as $perm) {
              unset($perm['id']);
              unset($perm['created_at']);
              unset($perm['updated_at']);
              App\Permission::firstOrCreate($perm);
          }

          $first = App\AboutGic::first();
          if (!$first) {
            App\AboutGic::create([
              'location_map' => '<iframe src="https://www.google.com/maps/embed?pb=" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'
            ]);
          }
      }
}
