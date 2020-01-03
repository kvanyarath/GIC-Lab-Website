<?php

use Illuminate\Database\Seeder;

class GeneratedPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-03-07 21:36:16',
                'updated_at' => '2019-03-07 21:36:16',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-03-07 21:39:40',
                'updated_at' => '2019-03-07 21:39:40',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'browse_students_projects',
                'table_name' => 'students_projects',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'read_students_projects',
                'table_name' => 'students_projects',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'edit_students_projects',
                'table_name' => 'students_projects',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'add_students_projects',
                'table_name' => 'students_projects',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'delete_students_projects',
                'table_name' => 'students_projects',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'browse_about_us',
                'table_name' => 'about_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'read_about_us',
                'table_name' => 'about_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'edit_about_us',
                'table_name' => 'about_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'add_about_us',
                'table_name' => 'about_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'delete_about_us',
                'table_name' => 'about_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'browse_contact_us',
                'table_name' => 'contact_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'read_contact_us',
                'table_name' => 'contact_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'edit_contact_us',
                'table_name' => 'contact_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'add_contact_us',
                'table_name' => 'contact_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'delete_contact_us',
                'table_name' => 'contact_us',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'browse_scholarship',
                'table_name' => 'scholarship',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'read_scholarship',
                'table_name' => 'scholarship',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'edit_scholarship',
                'table_name' => 'scholarship',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'add_scholarship',
                'table_name' => 'scholarship',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'delete_scholarship',
                'table_name' => 'scholarship',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'browse_contactus_message',
                'table_name' => 'contactus_message',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'read_contactus_message',
                'table_name' => 'contactus_message',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'edit_contactus_message',
                'table_name' => 'contactus_message',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'add_contactus_message',
                'table_name' => 'contactus_message',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'delete_contactus_message',
                'table_name' => 'contactus_message',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            51 => 
            array (
                'id' => 57,
                'key' => 'browse_about_us_link',
                'table_name' => 'about_us_link',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            52 => 
            array (
                'id' => 58,
                'key' => 'read_about_us_link',
                'table_name' => 'about_us_link',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            53 => 
            array (
                'id' => 59,
                'key' => 'edit_about_us_link',
                'table_name' => 'about_us_link',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            54 => 
            array (
                'id' => 60,
                'key' => 'add_about_us_link',
                'table_name' => 'about_us_link',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            55 => 
            array (
                'id' => 61,
                'key' => 'delete_about_us_link',
                'table_name' => 'about_us_link',
                'created_at' => '2019-05-03 19:41:14',
                'updated_at' => '2019-05-03 19:41:14',
            ),
            56 => 
            array (
                'id' => 62,
                'key' => 'browse_partner_types',
                'table_name' => 'partner_types',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            57 => 
            array (
                'id' => 63,
                'key' => 'read_partner_types',
                'table_name' => 'partner_types',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            58 => 
            array (
                'id' => 64,
                'key' => 'edit_partner_types',
                'table_name' => 'partner_types',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            59 => 
            array (
                'id' => 65,
                'key' => 'add_partner_types',
                'table_name' => 'partner_types',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            60 => 
            array (
                'id' => 66,
                'key' => 'delete_partner_types',
                'table_name' => 'partner_types',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            61 => 
            array (
                'id' => 67,
                'key' => 'browse_partner2',
                'table_name' => 'partner2',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            62 => 
            array (
                'id' => 68,
                'key' => 'read_partner2',
                'table_name' => 'partner2',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            63 => 
            array (
                'id' => 69,
                'key' => 'edit_partner2',
                'table_name' => 'partner2',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            64 => 
            array (
                'id' => 70,
                'key' => 'add_partner2',
                'table_name' => 'partner2',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            65 => 
            array (
                'id' => 71,
                'key' => 'delete_partner2',
                'table_name' => 'partner2',
                'created_at' => '2019-05-08 12:05:08',
                'updated_at' => '2019-05-08 12:05:08',
            ),
            66 => 
            array (
                'id' => 72,
                'key' => 'browse_slide_shows',
                'table_name' => 'slide_shows',
                'created_at' => '2019-05-09 10:58:44',
                'updated_at' => '2019-05-09 10:58:44',
            ),
            67 => 
            array (
                'id' => 73,
                'key' => 'read_slide_shows',
                'table_name' => 'slide_shows',
                'created_at' => '2019-05-09 10:58:44',
                'updated_at' => '2019-05-09 10:58:44',
            ),
            68 => 
            array (
                'id' => 74,
                'key' => 'edit_slide_shows',
                'table_name' => 'slide_shows',
                'created_at' => '2019-05-09 10:58:44',
                'updated_at' => '2019-05-09 10:58:44',
            ),
            69 => 
            array (
                'id' => 75,
                'key' => 'add_slide_shows',
                'table_name' => 'slide_shows',
                'created_at' => '2019-05-09 10:58:44',
                'updated_at' => '2019-05-09 10:58:44',
            ),
            70 => 
            array (
                'id' => 76,
                'key' => 'delete_slide_shows',
                'table_name' => 'slide_shows',
                'created_at' => '2019-05-09 10:58:44',
                'updated_at' => '2019-05-09 10:58:44',
            ),
            71 => 
            array (
                'id' => 77,
                'key' => 'browse_events',
                'table_name' => 'events',
                'created_at' => '2019-05-09 14:13:33',
                'updated_at' => '2019-05-09 14:13:33',
            ),
            72 => 
            array (
                'id' => 78,
                'key' => 'read_events',
                'table_name' => 'events',
                'created_at' => '2019-05-09 14:13:33',
                'updated_at' => '2019-05-09 14:13:33',
            ),
            73 => 
            array (
                'id' => 79,
                'key' => 'edit_events',
                'table_name' => 'events',
                'created_at' => '2019-05-09 14:13:33',
                'updated_at' => '2019-05-09 14:13:33',
            ),
            74 => 
            array (
                'id' => 80,
                'key' => 'add_events',
                'table_name' => 'events',
                'created_at' => '2019-05-09 14:13:33',
                'updated_at' => '2019-05-09 14:13:33',
            ),
            75 => 
            array (
                'id' => 81,
                'key' => 'delete_events',
                'table_name' => 'events',
                'created_at' => '2019-05-09 14:13:33',
                'updated_at' => '2019-05-09 14:13:33',
            ),
            76 => 
            array (
                'id' => 82,
                'key' => 'browse_photo_albums',
                'table_name' => 'photo_albums',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            77 => 
            array (
                'id' => 83,
                'key' => 'read_photo_albums',
                'table_name' => 'photo_albums',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            78 => 
            array (
                'id' => 84,
                'key' => 'edit_photo_albums',
                'table_name' => 'photo_albums',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            79 => 
            array (
                'id' => 85,
                'key' => 'add_photo_albums',
                'table_name' => 'photo_albums',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            80 => 
            array (
                'id' => 86,
                'key' => 'delete_photo_albums',
                'table_name' => 'photo_albums',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            81 => 
            array (
                'id' => 87,
                'key' => 'browse_photos',
                'table_name' => 'photos',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            82 => 
            array (
                'id' => 88,
                'key' => 'read_photos',
                'table_name' => 'photos',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            83 => 
            array (
                'id' => 89,
                'key' => 'edit_photos',
                'table_name' => 'photos',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            84 => 
            array (
                'id' => 90,
                'key' => 'add_photos',
                'table_name' => 'photos',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            85 => 
            array (
                'id' => 91,
                'key' => 'delete_photos',
                'table_name' => 'photos',
                'created_at' => '2019-05-10 12:01:46',
                'updated_at' => '2019-05-10 12:01:46',
            ),
            86 => 
            array (
                'id' => 92,
                'key' => 'browse_news',
                'table_name' => 'news',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            87 => 
            array (
                'id' => 93,
                'key' => 'read_news',
                'table_name' => 'news',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            88 => 
            array (
                'id' => 94,
                'key' => 'edit_news',
                'table_name' => 'news',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            89 => 
            array (
                'id' => 95,
                'key' => 'add_news',
                'table_name' => 'news',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            90 => 
            array (
                'id' => 96,
                'key' => 'delete_news',
                'table_name' => 'news',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            91 => 
            array (
                'id' => 97,
                'key' => 'browse_about_gic',
                'table_name' => 'about_gic',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            92 => 
            array (
                'id' => 98,
                'key' => 'read_about_gic',
                'table_name' => 'about_gic',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            93 => 
            array (
                'id' => 99,
                'key' => 'edit_about_gic',
                'table_name' => 'about_gic',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-05-17 13:44:56',
            ),
            94 => 
            array (
                'id' => 100,
                'key' => 'browse_student_message',
                'table_name' => 'student_message',
                'created_at' => '2019-05-18 20:33:06',
                'updated_at' => '2019-05-18 20:33:06',
            ),
            95 => 
            array (
                'id' => 101,
                'key' => 'read_student_message',
                'table_name' => 'student_message',
                'created_at' => '2019-05-18 20:33:06',
                'updated_at' => '2019-05-18 20:33:06',
            ),
            96 => 
            array (
                'id' => 102,
                'key' => 'edit_student_message',
                'table_name' => 'student_message',
                'created_at' => '2019-05-18 20:33:06',
                'updated_at' => '2019-05-18 20:33:06',
            ),
            97 => 
            array (
                'id' => 103,
                'key' => 'add_student_message',
                'table_name' => 'student_message',
                'created_at' => '2019-05-18 20:33:06',
                'updated_at' => '2019-05-18 20:33:06',
            ),
            98 => 
            array (
                'id' => 104,
                'key' => 'delete_student_message',
                'table_name' => 'student_message',
                'created_at' => '2019-05-18 20:33:06',
                'updated_at' => '2019-05-18 20:33:06',
            ),
            99 => 
            array (
                'id' => 105,
                'key' => 'browse_scholarships',
                'table_name' => 'scholarships',
                'created_at' => '2019-05-21 14:31:04',
                'updated_at' => '2019-05-21 14:31:04',
            ),
            100 => 
            array (
                'id' => 106,
                'key' => 'read_scholarships',
                'table_name' => 'scholarships',
                'created_at' => '2019-05-21 14:31:04',
                'updated_at' => '2019-05-21 14:31:04',
            ),
            101 => 
            array (
                'id' => 107,
                'key' => 'edit_scholarships',
                'table_name' => 'scholarships',
                'created_at' => '2019-05-21 14:31:04',
                'updated_at' => '2019-05-21 14:31:04',
            ),
            102 => 
            array (
                'id' => 108,
                'key' => 'add_scholarships',
                'table_name' => 'scholarships',
                'created_at' => '2019-05-21 14:31:04',
                'updated_at' => '2019-05-21 14:31:04',
            ),
            103 => 
            array (
                'id' => 109,
                'key' => 'delete_scholarships',
                'table_name' => 'scholarships',
                'created_at' => '2019-05-21 14:31:04',
                'updated_at' => '2019-05-21 14:31:04',
            ),
            104 => 
            array (
                'id' => 110,
                'key' => 'browse_important_link',
                'table_name' => 'important_link',
                'created_at' => '2019-05-24 16:18:32',
                'updated_at' => '2019-05-24 16:18:32',
            ),
            105 => 
            array (
                'id' => 111,
                'key' => 'read_important_link',
                'table_name' => 'important_link',
                'created_at' => '2019-05-24 16:18:32',
                'updated_at' => '2019-05-24 16:18:32',
            ),
            106 => 
            array (
                'id' => 112,
                'key' => 'edit_important_link',
                'table_name' => 'important_link',
                'created_at' => '2019-05-24 16:18:32',
                'updated_at' => '2019-05-24 16:18:32',
            ),
            107 => 
            array (
                'id' => 113,
                'key' => 'add_important_link',
                'table_name' => 'important_link',
                'created_at' => '2019-05-24 16:18:32',
                'updated_at' => '2019-05-24 16:18:32',
            ),
            108 => 
            array (
                'id' => 114,
                'key' => 'delete_important_link',
                'table_name' => 'important_link',
                'created_at' => '2019-05-24 16:18:32',
                'updated_at' => '2019-05-24 16:18:32',
            ),
            109 => 
            array (
                'id' => 115,
                'key' => 'browse_staffs',
                'table_name' => 'staffs',
                'created_at' => '2019-05-29 22:19:49',
                'updated_at' => '2019-05-29 22:19:49',
            ),
            110 => 
            array (
                'id' => 116,
                'key' => 'read_staffs',
                'table_name' => 'staffs',
                'created_at' => '2019-05-29 22:19:49',
                'updated_at' => '2019-05-29 22:19:49',
            ),
            111 => 
            array (
                'id' => 117,
                'key' => 'edit_staffs',
                'table_name' => 'staffs',
                'created_at' => '2019-05-29 22:19:49',
                'updated_at' => '2019-05-29 22:19:49',
            ),
            112 => 
            array (
                'id' => 118,
                'key' => 'add_staffs',
                'table_name' => 'staffs',
                'created_at' => '2019-05-29 22:19:49',
                'updated_at' => '2019-05-29 22:19:49',
            ),
            113 => 
            array (
                'id' => 119,
                'key' => 'delete_staffs',
                'table_name' => 'staffs',
                'created_at' => '2019-05-29 22:19:49',
                'updated_at' => '2019-05-29 22:19:49',
            ),
            114 => 
            array (
                'id' => 120,
                'key' => 'browse_missions',
                'table_name' => 'missions',
                'created_at' => '2019-05-29 22:20:08',
                'updated_at' => '2019-05-29 22:20:08',
            ),
            115 => 
            array (
                'id' => 121,
                'key' => 'read_missions',
                'table_name' => 'missions',
                'created_at' => '2019-05-29 22:20:08',
                'updated_at' => '2019-05-29 22:20:08',
            ),
            116 => 
            array (
                'id' => 122,
                'key' => 'edit_missions',
                'table_name' => 'missions',
                'created_at' => '2019-05-29 22:20:08',
                'updated_at' => '2019-05-29 22:20:08',
            ),
            117 => 
            array (
                'id' => 123,
                'key' => 'add_missions',
                'table_name' => 'missions',
                'created_at' => '2019-05-29 22:20:08',
                'updated_at' => '2019-05-29 22:20:08',
            ),
            118 => 
            array (
                'id' => 124,
                'key' => 'delete_missions',
                'table_name' => 'missions',
                'created_at' => '2019-05-29 22:20:08',
                'updated_at' => '2019-05-29 22:20:08',
            ),
            119 => 
            array (
                'id' => 125,
                'key' => 'browse_country',
                'table_name' => 'country',
                'created_at' => '2019-05-29 22:20:17',
                'updated_at' => '2019-05-29 22:20:17',
            ),
            120 => 
            array (
                'id' => 126,
                'key' => 'read_country',
                'table_name' => 'country',
                'created_at' => '2019-05-29 22:20:17',
                'updated_at' => '2019-05-29 22:20:17',
            ),
            121 => 
            array (
                'id' => 127,
                'key' => 'edit_country',
                'table_name' => 'country',
                'created_at' => '2019-05-29 22:20:17',
                'updated_at' => '2019-05-29 22:20:17',
            ),
            122 => 
            array (
                'id' => 128,
                'key' => 'add_country',
                'table_name' => 'country',
                'created_at' => '2019-05-29 22:20:17',
                'updated_at' => '2019-05-29 22:20:17',
            ),
            123 => 
            array (
                'id' => 129,
                'key' => 'delete_country',
                'table_name' => 'country',
                'created_at' => '2019-05-29 22:20:17',
                'updated_at' => '2019-05-29 22:20:17',
            ),
            124 => 
            array (
                'id' => 130,
                'key' => 'browse_funders',
                'table_name' => 'funders',
                'created_at' => '2019-05-29 22:20:27',
                'updated_at' => '2019-05-29 22:20:27',
            ),
            125 => 
            array (
                'id' => 131,
                'key' => 'read_funders',
                'table_name' => 'funders',
                'created_at' => '2019-05-29 22:20:27',
                'updated_at' => '2019-05-29 22:20:27',
            ),
            126 => 
            array (
                'id' => 132,
                'key' => 'edit_funders',
                'table_name' => 'funders',
                'created_at' => '2019-05-29 22:20:27',
                'updated_at' => '2019-05-29 22:20:27',
            ),
            127 => 
            array (
                'id' => 133,
                'key' => 'add_funders',
                'table_name' => 'funders',
                'created_at' => '2019-05-29 22:20:27',
                'updated_at' => '2019-05-29 22:20:27',
            ),
            128 => 
            array (
                'id' => 134,
                'key' => 'delete_funders',
                'table_name' => 'funders',
                'created_at' => '2019-05-29 22:20:27',
                'updated_at' => '2019-05-29 22:20:27',
            ),
            129 => 
            array (
                'id' => 140,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2019-05-31 13:49:35',
                'updated_at' => '2019-05-31 13:49:35',
            ),
            130 => 
            array (
                'id' => 141,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2019-05-31 13:49:35',
                'updated_at' => '2019-05-31 13:49:35',
            ),
            131 => 
            array (
                'id' => 142,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2019-05-31 13:49:35',
                'updated_at' => '2019-05-31 13:49:35',
            ),
            132 => 
            array (
                'id' => 143,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2019-05-31 13:49:35',
                'updated_at' => '2019-05-31 13:49:35',
            ),
            133 => 
            array (
                'id' => 144,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2019-05-31 13:49:35',
                'updated_at' => '2019-05-31 13:49:35',
            ),
            134 => 
            array (
                'id' => 145,
                'key' => 'browse_degrees',
                'table_name' => 'degrees',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            135 => 
            array (
                'id' => 146,
                'key' => 'read_degrees',
                'table_name' => 'degrees',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            136 => 
            array (
                'id' => 147,
                'key' => 'edit_degrees',
                'table_name' => 'degrees',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            137 => 
            array (
                'id' => 148,
                'key' => 'add_degrees',
                'table_name' => 'degrees',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            138 => 
            array (
                'id' => 149,
                'key' => 'delete_degrees',
                'table_name' => 'degrees',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            139 => 
            array (
                'id' => 150,
                'key' => 'browse_program_years',
                'table_name' => 'program_years',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            140 => 
            array (
                'id' => 151,
                'key' => 'read_program_years',
                'table_name' => 'program_years',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            141 => 
            array (
                'id' => 152,
                'key' => 'edit_program_years',
                'table_name' => 'program_years',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            142 => 
            array (
                'id' => 153,
                'key' => 'add_program_years',
                'table_name' => 'program_years',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            143 => 
            array (
                'id' => 154,
                'key' => 'delete_program_years',
                'table_name' => 'program_years',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            144 => 
            array (
                'id' => 155,
                'key' => 'browse_field_studies',
                'table_name' => 'field_studies',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            145 => 
            array (
                'id' => 156,
                'key' => 'read_field_studies',
                'table_name' => 'field_studies',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            146 => 
            array (
                'id' => 157,
                'key' => 'edit_field_studies',
                'table_name' => 'field_studies',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            147 => 
            array (
                'id' => 158,
                'key' => 'add_field_studies',
                'table_name' => 'field_studies',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            148 => 
            array (
                'id' => 159,
                'key' => 'delete_field_studies',
                'table_name' => 'field_studies',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            149 => 
            array (
                'id' => 160,
                'key' => 'browse_curriculums',
                'table_name' => 'curriculums',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            150 => 
            array (
                'id' => 161,
                'key' => 'read_curriculums',
                'table_name' => 'curriculums',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            151 => 
            array (
                'id' => 162,
                'key' => 'edit_curriculums',
                'table_name' => 'curriculums',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            152 => 
            array (
                'id' => 163,
                'key' => 'add_curriculums',
                'table_name' => 'curriculums',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            153 => 
            array (
                'id' => 164,
                'key' => 'delete_curriculums',
                'table_name' => 'curriculums',
                'created_at' => '2019-06-01 21:33:04',
                'updated_at' => '2019-06-01 21:33:04',
            ),
            154 => 
            array (
                'id' => 165,
                'key' => 'browse_academic_years',
                'table_name' => 'academic_years',
                'created_at' => '2019-06-07 16:41:49',
                'updated_at' => '2019-06-07 16:41:49',
            ),
            155 => 
            array (
                'id' => 166,
                'key' => 'read_academic_years',
                'table_name' => 'academic_years',
                'created_at' => '2019-06-07 16:41:49',
                'updated_at' => '2019-06-07 16:41:49',
            ),
            156 => 
            array (
                'id' => 167,
                'key' => 'edit_academic_years',
                'table_name' => 'academic_years',
                'created_at' => '2019-06-07 16:41:49',
                'updated_at' => '2019-06-07 16:41:49',
            ),
            157 => 
            array (
                'id' => 168,
                'key' => 'add_academic_years',
                'table_name' => 'academic_years',
                'created_at' => '2019-06-07 16:41:49',
                'updated_at' => '2019-06-07 16:41:49',
            ),
            158 => 
            array (
                'id' => 169,
                'key' => 'delete_academic_years',
                'table_name' => 'academic_years',
                'created_at' => '2019-06-07 16:41:49',
                'updated_at' => '2019-06-07 16:41:49',
            ),
            159 => 
            array (
                'id' => 170,
                'key' => 'browse_gic_projects',
                'table_name' => 'gic_projects',
                'created_at' => '2019-06-09 15:04:33',
                'updated_at' => '2019-06-09 15:04:33',
            ),
            160 => 
            array (
                'id' => 171,
                'key' => 'read_gic_projects',
                'table_name' => 'gic_projects',
                'created_at' => '2019-06-09 15:04:33',
                'updated_at' => '2019-06-09 15:04:33',
            ),
            161 => 
            array (
                'id' => 172,
                'key' => 'edit_gic_projects',
                'table_name' => 'gic_projects',
                'created_at' => '2019-06-09 15:04:33',
                'updated_at' => '2019-06-09 15:04:33',
            ),
            162 => 
            array (
                'id' => 173,
                'key' => 'add_gic_projects',
                'table_name' => 'gic_projects',
                'created_at' => '2019-06-09 15:04:33',
                'updated_at' => '2019-06-09 15:04:33',
            ),
            163 => 
            array (
                'id' => 174,
                'key' => 'delete_gic_projects',
                'table_name' => 'gic_projects',
                'created_at' => '2019-06-09 15:04:33',
                'updated_at' => '2019-06-09 15:04:33',
            ),
            164 => 
            array (
                'id' => 175,
                'key' => 'browse_faq_types',
                'table_name' => 'faq_types',
                'created_at' => '2019-06-09 20:15:34',
                'updated_at' => '2019-06-09 20:15:34',
            ),
            165 => 
            array (
                'id' => 176,
                'key' => 'read_faq_types',
                'table_name' => 'faq_types',
                'created_at' => '2019-06-09 20:15:34',
                'updated_at' => '2019-06-09 20:15:34',
            ),
            166 => 
            array (
                'id' => 177,
                'key' => 'edit_faq_types',
                'table_name' => 'faq_types',
                'created_at' => '2019-06-09 20:15:34',
                'updated_at' => '2019-06-09 20:15:34',
            ),
            167 => 
            array (
                'id' => 178,
                'key' => 'add_faq_types',
                'table_name' => 'faq_types',
                'created_at' => '2019-06-09 20:15:34',
                'updated_at' => '2019-06-09 20:15:34',
            ),
            168 => 
            array (
                'id' => 179,
                'key' => 'delete_faq_types',
                'table_name' => 'faq_types',
                'created_at' => '2019-06-09 20:15:34',
                'updated_at' => '2019-06-09 20:15:34',
            ),
            169 => 
            array (
                'id' => 180,
                'key' => 'browse_faqs2',
                'table_name' => 'faqs2',
                'created_at' => '2019-06-09 20:16:21',
                'updated_at' => '2019-06-09 20:16:21',
            ),
            170 => 
            array (
                'id' => 181,
                'key' => 'read_faqs2',
                'table_name' => 'faqs2',
                'created_at' => '2019-06-09 20:16:21',
                'updated_at' => '2019-06-09 20:16:21',
            ),
            171 => 
            array (
                'id' => 182,
                'key' => 'edit_faqs2',
                'table_name' => 'faqs2',
                'created_at' => '2019-06-09 20:16:21',
                'updated_at' => '2019-06-09 20:16:21',
            ),
            172 => 
            array (
                'id' => 183,
                'key' => 'add_faqs2',
                'table_name' => 'faqs2',
                'created_at' => '2019-06-09 20:16:21',
                'updated_at' => '2019-06-09 20:16:21',
            ),
            173 => 
            array (
                'id' => 184,
                'key' => 'delete_faqs2',
                'table_name' => 'faqs2',
                'created_at' => '2019-06-09 20:16:21',
                'updated_at' => '2019-06-09 20:16:21',
            ),
            174 => 
            array (
                'id' => 185,
                'key' => 'browse_staff_position',
                'table_name' => 'staff_position',
                'created_at' => '2019-06-09 21:40:07',
                'updated_at' => '2019-06-09 21:40:07',
            ),
            175 => 
            array (
                'id' => 186,
                'key' => 'read_staff_position',
                'table_name' => 'staff_position',
                'created_at' => '2019-06-09 21:40:07',
                'updated_at' => '2019-06-09 21:40:07',
            ),
            176 => 
            array (
                'id' => 187,
                'key' => 'edit_staff_position',
                'table_name' => 'staff_position',
                'created_at' => '2019-06-09 21:40:07',
                'updated_at' => '2019-06-09 21:40:07',
            ),
            177 => 
            array (
                'id' => 188,
                'key' => 'add_staff_position',
                'table_name' => 'staff_position',
                'created_at' => '2019-06-09 21:40:07',
                'updated_at' => '2019-06-09 21:40:07',
            ),
            178 => 
            array (
                'id' => 189,
                'key' => 'delete_staff_position',
                'table_name' => 'staff_position',
                'created_at' => '2019-06-09 21:40:07',
                'updated_at' => '2019-06-09 21:40:07',
            ),
            179 => 
            array (
                'id' => 190,
                'key' => 'browse_posters',
                'table_name' => 'posters',
                'created_at' => '2019-06-10 15:18:59',
                'updated_at' => '2019-06-10 15:18:59',
            ),
            180 => 
            array (
                'id' => 191,
                'key' => 'read_posters',
                'table_name' => 'posters',
                'created_at' => '2019-06-10 15:18:59',
                'updated_at' => '2019-06-10 15:18:59',
            ),
            181 => 
            array (
                'id' => 192,
                'key' => 'edit_posters',
                'table_name' => 'posters',
                'created_at' => '2019-06-10 15:18:59',
                'updated_at' => '2019-06-10 15:18:59',
            ),
            182 => 
            array (
                'id' => 193,
                'key' => 'add_posters',
                'table_name' => 'posters',
                'created_at' => '2019-06-10 15:18:59',
                'updated_at' => '2019-06-10 15:18:59',
            ),
            183 => 
            array (
                'id' => 194,
                'key' => 'delete_posters',
                'table_name' => 'posters',
                'created_at' => '2019-06-10 15:18:59',
                'updated_at' => '2019-06-10 15:18:59',
            ),
            184 => 
            array (
                'id' => 195,
                'key' => 'browse_awardee',
                'table_name' => 'awardee',
                'created_at' => '2019-06-13 01:58:54',
                'updated_at' => '2019-06-13 01:58:54',
            ),
            185 => 
            array (
                'id' => 196,
                'key' => 'read_awardee',
                'table_name' => 'awardee',
                'created_at' => '2019-06-13 01:58:54',
                'updated_at' => '2019-06-13 01:58:54',
            ),
            186 => 
            array (
                'id' => 197,
                'key' => 'edit_awardee',
                'table_name' => 'awardee',
                'created_at' => '2019-06-13 01:58:54',
                'updated_at' => '2019-06-13 01:58:54',
            ),
            187 => 
            array (
                'id' => 198,
                'key' => 'add_awardee',
                'table_name' => 'awardee',
                'created_at' => '2019-06-13 01:58:54',
                'updated_at' => '2019-06-13 01:58:54',
            ),
            188 => 
            array (
                'id' => 199,
                'key' => 'delete_awardee',
                'table_name' => 'awardee',
                'created_at' => '2019-06-13 01:58:54',
                'updated_at' => '2019-06-13 01:58:54',
            ),
            189 => 
            array (
                'id' => 200,
                'key' => 'browse_site_contents',
                'table_name' => 'site_contents',
                'created_at' => '2019-06-13 11:25:43',
                'updated_at' => '2019-06-13 11:25:43',
            ),
            190 => 
            array (
                'id' => 201,
                'key' => 'read_site_contents',
                'table_name' => 'site_contents',
                'created_at' => '2019-06-13 11:25:43',
                'updated_at' => '2019-06-13 11:25:43',
            ),
            191 => 
            array (
                'id' => 202,
                'key' => 'edit_site_contents',
                'table_name' => 'site_contents',
                'created_at' => '2019-06-13 11:25:43',
                'updated_at' => '2019-06-13 11:25:43',
            ),
            192 => 
            array (
                'id' => 203,
                'key' => 'add_site_contents',
                'table_name' => 'site_contents',
                'created_at' => '2019-06-13 11:25:43',
                'updated_at' => '2019-06-13 11:25:43',
            ),
            193 => 
            array (
                'id' => 204,
                'key' => 'delete_site_contents',
                'table_name' => 'site_contents',
                'created_at' => '2019-06-13 11:25:43',
                'updated_at' => '2019-06-13 11:25:43',
            ),
            194 => 
            array (
                'id' => 205,
                'key' => 'browse_invited_professors',
                'table_name' => 'invited_professors',
                'created_at' => '2019-06-16 19:19:23',
                'updated_at' => '2019-06-16 19:19:23',
            ),
            195 => 
            array (
                'id' => 206,
                'key' => 'read_invited_professors',
                'table_name' => 'invited_professors',
                'created_at' => '2019-06-16 19:19:23',
                'updated_at' => '2019-06-16 19:19:23',
            ),
            196 => 
            array (
                'id' => 207,
                'key' => 'edit_invited_professors',
                'table_name' => 'invited_professors',
                'created_at' => '2019-06-16 19:19:23',
                'updated_at' => '2019-06-16 19:19:23',
            ),
            197 => 
            array (
                'id' => 208,
                'key' => 'add_invited_professors',
                'table_name' => 'invited_professors',
                'created_at' => '2019-06-16 19:19:23',
                'updated_at' => '2019-06-16 19:19:23',
            ),
            198 => 
            array (
                'id' => 209,
                'key' => 'delete_invited_professors',
                'table_name' => 'invited_professors',
                'created_at' => '2019-06-16 19:19:23',
                'updated_at' => '2019-06-16 19:19:23',
            ),
            199 => 
            array (
                'id' => 210,
                'key' => 'browse_aluminus',
                'table_name' => 'aluminus',
                'created_at' => '2019-06-16 19:37:03',
                'updated_at' => '2019-06-16 19:37:03',
            ),
            200 => 
            array (
                'id' => 211,
                'key' => 'read_aluminus',
                'table_name' => 'aluminus',
                'created_at' => '2019-06-16 19:37:03',
                'updated_at' => '2019-06-16 19:37:03',
            ),
            201 => 
            array (
                'id' => 212,
                'key' => 'edit_aluminus',
                'table_name' => 'aluminus',
                'created_at' => '2019-06-16 19:37:03',
                'updated_at' => '2019-06-16 19:37:03',
            ),
            202 => 
            array (
                'id' => 213,
                'key' => 'add_aluminus',
                'table_name' => 'aluminus',
                'created_at' => '2019-06-16 19:37:03',
                'updated_at' => '2019-06-16 19:37:03',
            ),
            203 => 
            array (
                'id' => 214,
                'key' => 'delete_aluminus',
                'table_name' => 'aluminus',
                'created_at' => '2019-06-16 19:37:03',
                'updated_at' => '2019-06-16 19:37:03',
            ),
            204 => 
            array (
                'id' => 215,
                'key' => 'browse_gratuated_year',
                'table_name' => 'gratuated_year',
                'created_at' => '2019-06-16 19:37:21',
                'updated_at' => '2019-06-16 19:37:21',
            ),
            205 => 
            array (
                'id' => 216,
                'key' => 'read_gratuated_year',
                'table_name' => 'gratuated_year',
                'created_at' => '2019-06-16 19:37:21',
                'updated_at' => '2019-06-16 19:37:21',
            ),
            206 => 
            array (
                'id' => 217,
                'key' => 'edit_gratuated_year',
                'table_name' => 'gratuated_year',
                'created_at' => '2019-06-16 19:37:21',
                'updated_at' => '2019-06-16 19:37:21',
            ),
            207 => 
            array (
                'id' => 218,
                'key' => 'add_gratuated_year',
                'table_name' => 'gratuated_year',
                'created_at' => '2019-06-16 19:37:21',
                'updated_at' => '2019-06-16 19:37:21',
            ),
            208 => 
            array (
                'id' => 219,
                'key' => 'delete_gratuated_year',
                'table_name' => 'gratuated_year',
                'created_at' => '2019-06-16 19:37:21',
                'updated_at' => '2019-06-16 19:37:21',
            ),
            209 => 
            array (
                'id' => 220,
                'key' => 'browse_videos',
                'table_name' => 'videos',
                'created_at' => '2019-06-19 15:52:08',
                'updated_at' => '2019-06-19 15:52:08',
            ),
            210 => 
            array (
                'id' => 221,
                'key' => 'read_videos',
                'table_name' => 'videos',
                'created_at' => '2019-06-19 15:52:08',
                'updated_at' => '2019-06-19 15:52:08',
            ),
            211 => 
            array (
                'id' => 222,
                'key' => 'edit_videos',
                'table_name' => 'videos',
                'created_at' => '2019-06-19 15:52:08',
                'updated_at' => '2019-06-19 15:52:08',
            ),
            212 => 
            array (
                'id' => 223,
                'key' => 'add_videos',
                'table_name' => 'videos',
                'created_at' => '2019-06-19 15:52:08',
                'updated_at' => '2019-06-19 15:52:08',
            ),
            213 => 
            array (
                'id' => 224,
                'key' => 'delete_videos',
                'table_name' => 'videos',
                'created_at' => '2019-06-19 15:52:08',
                'updated_at' => '2019-06-19 15:52:08',
            ),
            214 => 
            array (
                'id' => 225,
                'key' => 'browse_calendar',
                'table_name' => 'calendar',
                'created_at' => '2019-08-11 15:44:06',
                'updated_at' => '2019-08-11 15:44:06',
            ),
            215 => 
            array (
                'id' => 226,
                'key' => 'read_calendar',
                'table_name' => 'calendar',
                'created_at' => '2019-08-11 15:44:06',
                'updated_at' => '2019-08-11 15:44:06',
            ),
            216 => 
            array (
                'id' => 227,
                'key' => 'edit_calendar',
                'table_name' => 'calendar',
                'created_at' => '2019-08-11 15:44:06',
                'updated_at' => '2019-08-11 15:44:06',
            ),
            217 => 
            array (
                'id' => 228,
                'key' => 'add_calendar',
                'table_name' => 'calendar',
                'created_at' => '2019-08-11 15:44:06',
                'updated_at' => '2019-08-11 15:44:06',
            ),
            218 => 
            array (
                'id' => 229,
                'key' => 'delete_calendar',
                'table_name' => 'calendar',
                'created_at' => '2019-08-11 15:44:06',
                'updated_at' => '2019-08-11 15:44:06',
            ),
            219 => 
            array (
                'id' => 230,
                'key' => 'browse_timetable',
                'table_name' => 'timetable',
                'created_at' => '2019-08-11 15:48:57',
                'updated_at' => '2019-08-11 15:48:57',
            ),
            220 => 
            array (
                'id' => 231,
                'key' => 'read_timetable',
                'table_name' => 'timetable',
                'created_at' => '2019-08-11 15:48:57',
                'updated_at' => '2019-08-11 15:48:57',
            ),
            221 => 
            array (
                'id' => 232,
                'key' => 'edit_timetable',
                'table_name' => 'timetable',
                'created_at' => '2019-08-11 15:48:57',
                'updated_at' => '2019-08-11 15:48:57',
            ),
            222 => 
            array (
                'id' => 233,
                'key' => 'add_timetable',
                'table_name' => 'timetable',
                'created_at' => '2019-08-11 15:48:57',
                'updated_at' => '2019-08-11 15:48:57',
            ),
            223 => 
            array (
                'id' => 234,
                'key' => 'delete_timetable',
                'table_name' => 'timetable',
                'created_at' => '2019-08-11 15:48:57',
                'updated_at' => '2019-08-11 15:48:57',
            ),
            224 => 
            array (
                'id' => 235,
                'key' => 'browse_report_slide',
                'table_name' => 'report_slide',
                'created_at' => '2019-08-11 15:50:02',
                'updated_at' => '2019-08-11 15:50:02',
            ),
            225 => 
            array (
                'id' => 236,
                'key' => 'read_report_slide',
                'table_name' => 'report_slide',
                'created_at' => '2019-08-11 15:50:02',
                'updated_at' => '2019-08-11 15:50:02',
            ),
            226 => 
            array (
                'id' => 237,
                'key' => 'edit_report_slide',
                'table_name' => 'report_slide',
                'created_at' => '2019-08-11 15:50:02',
                'updated_at' => '2019-08-11 15:50:02',
            ),
            227 => 
            array (
                'id' => 238,
                'key' => 'add_report_slide',
                'table_name' => 'report_slide',
                'created_at' => '2019-08-11 15:50:02',
                'updated_at' => '2019-08-11 15:50:02',
            ),
            228 => 
            array (
                'id' => 239,
                'key' => 'delete_report_slide',
                'table_name' => 'report_slide',
                'created_at' => '2019-08-11 15:50:02',
                'updated_at' => '2019-08-11 15:50:02',
            ),
            229 => 
            array (
                'id' => 240,
                'key' => 'browse_gic_service',
                'table_name' => 'gic_service',
                'created_at' => '2019-08-12 13:26:58',
                'updated_at' => '2019-08-12 13:26:58',
            ),
            230 => 
            array (
                'id' => 241,
                'key' => 'read_gic_service',
                'table_name' => 'gic_service',
                'created_at' => '2019-08-12 13:26:58',
                'updated_at' => '2019-08-12 13:26:58',
            ),
            231 => 
            array (
                'id' => 242,
                'key' => 'edit_gic_service',
                'table_name' => 'gic_service',
                'created_at' => '2019-08-12 13:26:58',
                'updated_at' => '2019-08-12 13:26:58',
            ),
            232 => 
            array (
                'id' => 243,
                'key' => 'add_gic_service',
                'table_name' => 'gic_service',
                'created_at' => '2019-08-12 13:26:58',
                'updated_at' => '2019-08-12 13:26:58',
            ),
            233 => 
            array (
                'id' => 244,
                'key' => 'delete_gic_service',
                'table_name' => 'gic_service',
                'created_at' => '2019-08-12 13:26:58',
                'updated_at' => '2019-08-12 13:26:58',
            ),
            234 => 
            array (
                'id' => 245,
                'key' => 'browse_gic_service_counter',
                'table_name' => 'gic_service_counter',
                'created_at' => '2019-08-12 13:33:47',
                'updated_at' => '2019-08-12 13:33:47',
            ),
            235 => 
            array (
                'id' => 246,
                'key' => 'read_gic_service_counter',
                'table_name' => 'gic_service_counter',
                'created_at' => '2019-08-12 13:33:47',
                'updated_at' => '2019-08-12 13:33:47',
            ),
            236 => 
            array (
                'id' => 247,
                'key' => 'edit_gic_service_counter',
                'table_name' => 'gic_service_counter',
                'created_at' => '2019-08-12 13:33:47',
                'updated_at' => '2019-08-12 13:33:47',
            ),
            237 => 
            array (
                'id' => 248,
                'key' => 'add_gic_service_counter',
                'table_name' => 'gic_service_counter',
                'created_at' => '2019-08-12 13:33:47',
                'updated_at' => '2019-08-12 13:33:47',
            ),
            238 => 
            array (
                'id' => 249,
                'key' => 'delete_gic_service_counter',
                'table_name' => 'gic_service_counter',
                'created_at' => '2019-08-12 13:33:47',
                'updated_at' => '2019-08-12 13:33:47',
            ),
            239 => 
            array (
                'id' => 250,
                'key' => 'browse_promotion_years',
                'table_name' => 'promotion_years',
                'created_at' => '2019-08-28 14:53:59',
                'updated_at' => '2019-08-28 14:53:59',
            ),
            240 => 
            array (
                'id' => 251,
                'key' => 'read_promotion_years',
                'table_name' => 'promotion_years',
                'created_at' => '2019-08-28 14:53:59',
                'updated_at' => '2019-08-28 14:53:59',
            ),
            241 => 
            array (
                'id' => 252,
                'key' => 'edit_promotion_years',
                'table_name' => 'promotion_years',
                'created_at' => '2019-08-28 14:53:59',
                'updated_at' => '2019-08-28 14:53:59',
            ),
            242 => 
            array (
                'id' => 253,
                'key' => 'add_promotion_years',
                'table_name' => 'promotion_years',
                'created_at' => '2019-08-28 14:53:59',
                'updated_at' => '2019-08-28 14:53:59',
            ),
            243 => 
            array (
                'id' => 254,
                'key' => 'delete_promotion_years',
                'table_name' => 'promotion_years',
                'created_at' => '2019-08-28 14:53:59',
                'updated_at' => '2019-08-28 14:53:59',
            ),
            244 => 
            array (
                'id' => 255,
                'key' => 'browse_student_project_type',
                'table_name' => 'student_project_type',
                'created_at' => '2019-08-29 02:04:58',
                'updated_at' => '2019-08-29 02:04:58',
            ),
            245 => 
            array (
                'id' => 256,
                'key' => 'read_student_project_type',
                'table_name' => 'student_project_type',
                'created_at' => '2019-08-29 02:04:58',
                'updated_at' => '2019-08-29 02:04:58',
            ),
            246 => 
            array (
                'id' => 257,
                'key' => 'edit_student_project_type',
                'table_name' => 'student_project_type',
                'created_at' => '2019-08-29 02:04:58',
                'updated_at' => '2019-08-29 02:04:58',
            ),
            247 => 
            array (
                'id' => 258,
                'key' => 'add_student_project_type',
                'table_name' => 'student_project_type',
                'created_at' => '2019-08-29 02:04:58',
                'updated_at' => '2019-08-29 02:04:58',
            ),
            248 => 
            array (
                'id' => 259,
                'key' => 'delete_student_project_type',
                'table_name' => 'student_project_type',
                'created_at' => '2019-08-29 02:04:58',
                'updated_at' => '2019-08-29 02:04:58',
            ),
            249 => 
            array (
                'id' => 260,
                'key' => 'browse_student_project',
                'table_name' => 'student_project',
                'created_at' => '2019-08-29 02:06:01',
                'updated_at' => '2019-08-29 02:06:01',
            ),
            250 => 
            array (
                'id' => 261,
                'key' => 'read_student_project',
                'table_name' => 'student_project',
                'created_at' => '2019-08-29 02:06:01',
                'updated_at' => '2019-08-29 02:06:01',
            ),
            251 => 
            array (
                'id' => 262,
                'key' => 'edit_student_project',
                'table_name' => 'student_project',
                'created_at' => '2019-08-29 02:06:01',
                'updated_at' => '2019-08-29 02:06:01',
            ),
            252 => 
            array (
                'id' => 263,
                'key' => 'add_student_project',
                'table_name' => 'student_project',
                'created_at' => '2019-08-29 02:06:01',
                'updated_at' => '2019-08-29 02:06:01',
            ),
            253 => 
            array (
                'id' => 264,
                'key' => 'delete_student_project',
                'table_name' => 'student_project',
                'created_at' => '2019-08-29 02:06:01',
                'updated_at' => '2019-08-29 02:06:01',
            ),
            254 => 
            array (
                'id' => 265,
                'key' => 'browse_faq_parent_types',
                'table_name' => 'faq_parent_types',
                'created_at' => '2019-08-29 05:47:03',
                'updated_at' => '2019-08-29 05:47:03',
            ),
            255 => 
            array (
                'id' => 266,
                'key' => 'read_faq_parent_types',
                'table_name' => 'faq_parent_types',
                'created_at' => '2019-08-29 05:47:03',
                'updated_at' => '2019-08-29 05:47:03',
            ),
            256 => 
            array (
                'id' => 267,
                'key' => 'edit_faq_parent_types',
                'table_name' => 'faq_parent_types',
                'created_at' => '2019-08-29 05:47:03',
                'updated_at' => '2019-08-29 05:47:03',
            ),
            257 => 
            array (
                'id' => 268,
                'key' => 'add_faq_parent_types',
                'table_name' => 'faq_parent_types',
                'created_at' => '2019-08-29 05:47:03',
                'updated_at' => '2019-08-29 05:47:03',
            ),
            258 => 
            array (
                'id' => 269,
                'key' => 'delete_faq_parent_types',
                'table_name' => 'faq_parent_types',
                'created_at' => '2019-08-29 05:47:03',
                'updated_at' => '2019-08-29 05:47:03',
            ),
        ));
        
        
    }
}