<?php

use Illuminate\Database\Seeder;

class CurriculumBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = [
            "name" => "curriculums",
            "slug" => "curriculums",
            "display_name_singular" => "Curriculum",
            "display_name_plural" => "Curriculums",
            "icon" => null,
            "model_name" => "App\Curriculum",
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
              "id" => 173,
              "data_type_id" => 23,
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
              "id" => 174,
              "data_type_id" => 23,
              "field" => "curriculum_kh",
              "type" => "text",
              "display_name" => "Curriculum Kh",
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
              "id" => 175,
              "data_type_id" => 23,
              "field" => "curriculum_en",
              "type" => "text",
              "display_name" => "Curriculum En",
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
              "id" => 176,
              "data_type_id" => 23,
              "field" => "field_study_id",
              "type" => "select_dropdown",
              "display_name" => "Field Study Id",
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
              "id" => 177,
              "data_type_id" => 23,
              "field" => "program_year_id",
              "type" => "select_dropdown",
              "display_name" => "Program Year Id",
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
              "id" => 178,
              "data_type_id" => 23,
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
              "id" => 179,
              "data_type_id" => 23,
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
              "id" => 180,
              "data_type_id" => 23,
              "field" => "curriculum_belongsto_field_study_relationship",
              "type" => "relationship",
              "display_name" => "field_studies",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"model":"App\\\\FieldStudy","table":"field_studies","type":"belongsTo","column":"field_study_id","key":"id","label":"title_en","pivot_table":"about_gic","pivot":"0","taggable":null}',
              "order" => 8,
            ],
            [
              "id" => 181,
              "data_type_id" => 23,
              "field" => "curriculum_belongsto_program_year_relationship",
              "type" => "relationship",
              "display_name" => "program_years",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"model":"App\\\\ProgramYear","table":"program_years","type":"belongsTo","column":"program_year_id","key":"id","label":"program_year_en","pivot_table":"about_gic","pivot":"0","taggable":null}',
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
              "id" => 120,
              "key" => "browse_curriculums",
              "table_name" => "curriculums",
              "created_at" => "2019-06-01 13:44:03",
              "updated_at" => "2019-06-01 13:44:03",
            ],
            [
              "id" => 121,
              "key" => "read_curriculums",
              "table_name" => "curriculums",
              "created_at" => "2019-06-01 13:44:03",
              "updated_at" => "2019-06-01 13:44:03",
            ],
            [
              "id" => 122,
              "key" => "edit_curriculums",
              "table_name" => "curriculums",
              "created_at" => "2019-06-01 13:44:03",
              "updated_at" => "2019-06-01 13:44:03",
            ],
            [
              "id" => 123,
              "key" => "add_curriculums",
              "table_name" => "curriculums",
              "created_at" => "2019-06-01 13:44:03",
              "updated_at" => "2019-06-01 13:44:03",
            ],
            [
              "id" => 124,
              "key" => "delete_curriculums",
              "table_name" => "curriculums",
              "created_at" => "2019-06-01 13:44:03",
              "updated_at" => "2019-06-01 13:44:03",
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
