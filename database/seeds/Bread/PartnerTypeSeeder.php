<?php

use Illuminate\Database\Seeder;

class PartnerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "partner_types",
            "slug" => "partner-types",
            "display_name_singular" => "Partner Type",
            "display_name_plural" => "Partner Types",
            "icon" => "voyager-documentation",
            "model_name" => "App\PartnerType",
            "policy_name" => null,
            "controller" => null,
            "description" => null,
            "generate_permissions" => 1,
            "server_side" => 0,
            "details" => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
          ];
        $type = App\DataType::firstOrCreate($tmp);

        $rows = [
            [
              "id" => 78,
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
              "id" => 79,
              "data_type_id" => 20,
              "field" => "typename_kh",
              "type" => "text",
              "display_name" => "Typename Kh",
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
              "id" => 80,
              "data_type_id" => 20,
              "field" => "typename_en",
              "type" => "text",
              "display_name" => "Typename En",
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
              "id" => 81,
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
              "id" => 82,
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
            App\DataRow::firstOrCreate($row);
        }

        $perms = [
            [
              "id" => 66,
              "key" => "browse_partner_types",
              "table_name" => "partner_types",
              "created_at" => "2019-05-08 03:03:14",
              "updated_at" => "2019-05-08 03:03:14",
            ],
            [
              "id" => 67,
              "key" => "read_partner_types",
              "table_name" => "partner_types",
              "created_at" => "2019-05-08 03:03:14",
              "updated_at" => "2019-05-08 03:03:14",
            ],
            [
              "id" => 68,
              "key" => "edit_partner_types",
              "table_name" => "partner_types",
              "created_at" => "2019-05-08 03:03:14",
              "updated_at" => "2019-05-08 03:03:14",
            ],
            [
              "id" => 69,
              "key" => "add_partner_types",
              "table_name" => "partner_types",
              "created_at" => "2019-05-08 03:03:14",
              "updated_at" => "2019-05-08 03:03:14",
            ],
            [
              "id" => 70,
              "key" => "delete_partner_types",
              "table_name" => "partner_types",
              "created_at" => "2019-05-08 03:03:14",
              "updated_at" => "2019-05-08 03:03:14",
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
        //   "title" => "Partner Types",
        //   "url" => "",
        //   "target" => "_self",
        //   "icon_class" => "voyager-documentation",
        //   "color" => "#000000",
        //   "parent_id" => null,
        //   "order" => 16,
        //   "route" => "voyager.partner-types.index",
        //   "parameters" => "null",
        // ];
        // App\MenuItem::firstOrCreate($menuItem);
    }
}
