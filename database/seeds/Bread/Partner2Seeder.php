<?php

use Illuminate\Database\Seeder;

class Partner2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
          "name" => "partner2",
          "slug" => "partner2",
          "display_name_singular" => "Partner",
          "display_name_plural" => "Partners",
          "icon" => "voyager-group",
          "model_name" => "App\Partner2",
          "policy_name" => null,
          "controller" => null,
          "description" => null,
          "generate_permissions" => 1,
          "server_side" => 0,
          "details" => '{"order_column":"created_at","order_display_column":"name","order_direction":"asc","default_search_key":null,"scope":null}',
        ];
        $type = App\DataType::firstOrCreate($tmp);

        $rows = [
          [
            "id" => 83,
            "data_type_id" => 21,
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
            "id" => 84,
            "data_type_id" => 21,
            "field" => "name",
            "type" => "text",
            "display_name" => "Name",
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
            "id" => 85,
            "data_type_id" => 21,
            "field" => "logo",
            "type" => "image",
            "display_name" => "Logo",
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
            "id" => 86,
            "data_type_id" => 21,
            "field" => "website",
            "type" => "text",
            "display_name" => "Website",
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
            "id" => 87,
            "data_type_id" => 21,
            "field" => "partner_type_id",
            "type" => "select_dropdown",
            "display_name" => "Partner Type Id",
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
            "id" => 88,
            "data_type_id" => 21,
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
            "order" => 6,
          ],
          [
            "id" => 89,
            "data_type_id" => 21,
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
            "order" => 7,
          ],
          [
            "id" => 90,
            "data_type_id" => 21,
            "field" => "partner2_belongsto_partner_type_relationship",
            "type" => "relationship",
            "display_name" => "partner_types",
            "required" => 0,
            "browse" => 1,
            "read" => 1,
            "edit" => 1,
            "add" => 1,
            "delete" => 1,
            "details" => '{"model":"App\\\\PartnerType","table":"partner_types","type":"belongsTo","column":"partner_type_id","key":"id","label":"typename_en","pivot_table":"about_us","pivot":"0","taggable":"0"}',
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
            "id" => 71,
            "key" => "browse_partner2",
            "table_name" => "partner2",
            "created_at" => "2019-05-08 03:05:21",
            "updated_at" => "2019-05-08 03:05:21",
          ],
          [
            "id" => 72,
            "key" => "read_partner2",
            "table_name" => "partner2",
            "created_at" => "2019-05-08 03:05:21",
            "updated_at" => "2019-05-08 03:05:21",
          ],
          [
            "id" => 73,
            "key" => "edit_partner2",
            "table_name" => "partner2",
            "created_at" => "2019-05-08 03:05:21",
            "updated_at" => "2019-05-08 03:05:21",
          ],
          [
            "id" => 74,
            "key" => "add_partner2",
            "table_name" => "partner2",
            "created_at" => "2019-05-08 03:05:21",
            "updated_at" => "2019-05-08 03:05:21",
          ],
          [
            "id" => 75,
            "key" => "delete_partner2",
            "table_name" => "partner2",
            "created_at" => "2019-05-08 03:05:21",
            "updated_at" => "2019-05-08 03:05:21",
          ],
        ];

        foreach($perms as $perm) {
            unset($perm['id']);
            unset($perm['created_at']);
            unset($perm['updated_at']);
            App\Permission::firstOrCreate($perm);
        }

        // $menuItem = [
        //   "menu_id" => 1,
        //   "title" => "Partner",
        //   "url" => "",
        //   "target" => "_self",
        //   "icon_class" => "voyager-dollar",
        //   "color" => "#000000",
        //   "parent_id" => null,
        //   "order" => 17,
        //   "route" => "voyager.partner2.index",
        //   "parameters" => "null",
        // ];
        // App\MenuItem::firstOrCreate($menuItem);
    }
}
