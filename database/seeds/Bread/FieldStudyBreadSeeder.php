<?php

use Illuminate\Database\Seeder;

class FieldStudyBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp =[
            "name" => "field_studies",
            "slug" => "field-studies",
            "display_name_singular" => "Field Study",
            "display_name_plural" => "Field Studies",
            "icon" => null,
            "model_name" => "App\FieldStudy",
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

          $rows =[
            [
              "id" => 163,
              "data_type_id" => 22,
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
              "id" => 164,
              "data_type_id" => 22,
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
              "order" => 5,
            ],
            [
              "id" => 165,
              "data_type_id" => 22,
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
              "order" => 6,
            ],
            [
              "id" => 166,
              "data_type_id" => 22,
              "field" => "text_detail_en",
              "type" => "rich_text_box",
              "display_name" => "Text Detail En",
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
              "id" => 167,
              "data_type_id" => 22,
              "field" => "text_detail_kh",
              "type" => "rich_text_box",
              "display_name" => "Text Detail Kh",
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
              "id" => 168,
              "data_type_id" => 22,
              "field" => "degree_id",
              "type" => "select_dropdown",
              "display_name" => "Degree Id",
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
              "id" => 169,
              "data_type_id" => 22,
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
              "order" => 11,
            ],
            [
              "id" => 170,
              "data_type_id" => 22,
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
              "order" => 12,
            ],
            [
              "id" => 171,
              "data_type_id" => 22,
              "field" => "field_study_belongsto_degree_relationship",
              "type" => "relationship",
              "display_name" => "degrees",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => '{"model":"App\\\\Degree","table":"degrees","type":"belongsTo","column":"degree_id","key":"id","label":"degree_en","pivot_table":"about_gic","pivot":"0","taggable":"0"}',
              "order" => 2,
            ],
            [
              "id" => 172,
              "data_type_id" => 22,
              "field" => "field_study_belongstomany_program_year_relationship",
              "type" => "relationship",
              "display_name" => "program_years",
              "required" => 0,
              "browse" => 0,
              "read" => 0,
              "edit" => 0,
              "add" => 0,
              "delete" => 0,
              "details" => '{"model":"App\\\\ProgramYear","table":"program_years","type":"belongsToMany","column":"id","key":"id","label":"program_year_en","pivot_table":"curriculums","pivot":"1","taggable":"0"}',
              "order" => 3,
            ],
            [
              "id" => 193,
              "data_type_id" => 22,
              "field" => "entrance_selection_en",
              "type" => "rich_text_box",
              "display_name" => "Entrance Selection En",
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
              "id" => 194,
              "data_type_id" => 22,
              "field" => "entrance_selection_kh",
              "type" => "rich_text_box",
              "display_name" => "Entrance Selection Kh",
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
              "id" => 195,
              "data_type_id" => 22,
              "field" => "curriculum_en",
              "type" => "rich_text_box",
              "display_name" => "Curriculum En",
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
              "id" => 196,
              "data_type_id" => 22,
              "field" => "curriculum_kh",
              "type" => "rich_text_box",
              "display_name" => "Curriculum Kh",
              "required" => 0,
              "browse" => 1,
              "read" => 1,
              "edit" => 1,
              "add" => 1,
              "delete" => 1,
              "details" => "{}",
              "order" => 12,
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
  
          $perms =[
            [
              "id" => 115,
              "key" => "browse_field_studies",
              "table_name" => "field_studies",
              "created_at" => "2019-06-01 13:41:10",
              "updated_at" => "2019-06-01 13:41:10",
            ],
            [
              "id" => 116,
              "key" => "read_field_studies",
              "table_name" => "field_studies",
              "created_at" => "2019-06-01 13:41:10",
              "updated_at" => "2019-06-01 13:41:10",
            ],
            [
              "id" => 117,
              "key" => "edit_field_studies",
              "table_name" => "field_studies",
              "created_at" => "2019-06-01 13:41:10",
              "updated_at" => "2019-06-01 13:41:10",
            ],
            [
              "id" => 118,
              "key" => "add_field_studies",
              "table_name" => "field_studies",
              "created_at" => "2019-06-01 13:41:10",
              "updated_at" => "2019-06-01 13:41:10",
            ],
            [
              "id" => 119,
              "key" => "delete_field_studies",
              "table_name" => "field_studies",
              "created_at" => "2019-06-01 13:41:10",
              "updated_at" => "2019-06-01 13:41:10",
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
