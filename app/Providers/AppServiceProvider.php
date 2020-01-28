<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        $mapUrl = 'https://goo.gl/maps/NdFyL9qvsNB9UDhv8';

        $socials = [
            ["name" => __("Twitter"), "icon"=>"fa-twitter", "url"=>"#"],
            ["name" => __("Facebook"), "icon"=>"fa-facebook", "url"=>"https://www.facebook.com/dept.dice.itc"],
            ["name" => __("Instagram"), "icon"=>"fa-instagram", "url"=>"#"],
            ["name" => __("Youtube"), "icon"=>"fa-youtube", "url"=>"https://www.youtube.com/channel/UCojYsgDYb92lQoV0lpz-jvQ"],
            ["name" => __("Linkdin"), "icon"=>"fa-linkedin", "url"=>"#"],
        ];

        $menus = [
            ["label" => 'Home', 'url_name' => 'frontend.homepage'],
            ["label" => "about_gic", "url_name"=> 'frontend.aboutUs', 'submenu' => [
                ["label" => "who_we_are", "url_name"=> 'frontend.whoWeAre'],
                ["label" => "missions", "url_name"=> 'frontend.mission'],
                ["label" => "visions", "url_name"=> 'frontend.vision'],
                ["label" => "Our Service", "url_name"=> '', 'url' => '/gic-service'],
            ]],

            ["label" => "programs", "url_name"=> 'frontend.program','submenu' => $this->getProgramSubmenu()
            ],
            ["label" => "research", "url_name"=> 'frontend.research', 'submenu' => [
                ["label" => "Laboratory", "url_name"=> 'frontend.who_we_are', 'submenu' => [
                    ["label" => "Khmer NLP Lab", "url_name"=> 'frontend.who_we_are', 'url' => '/site-content/lab_khmer_nlp'],
                    ["label" => "Data Analysis and Data Security Lab", "url_name"=> 'frontend.missions', 'url' => '/site-content/lab_dads'],
                ]],
                ["label" => "Publications", "url_name"=> 'frontend.missions', "url" => '/site-content/publications'],
                ["label" => "Software & Tools", "url_name"=> 'frontend.visions', "url" => '/site-content/software_and_tools'],
                // ["label" => "Researchers", "url_name"=> 'frontend.visions'],
            ]],
            ["label" => "project", "submenu" => [
                ["label" => "Incubation Center", "url_name"=> 'frontend.incubator', 'url' =>'/site-content/incubation'],
                ["label" => 'Others', "url_name"=> 'frontend.project'],
            ]],
            // ["label" => "incubator", "url_name"=> 'frontend.incubator', '/site-content/incubation'],
            ["label" => "calendar", "submenu" => [
                ["label" => "academic_calendar", "url_name"=> '', 'url' => '/calendar'],
                ["label" => "seminar_event", "url_name"=> 'frontend.seminar'],
                ["label" => "timetable", "url_name"=> '', 'url' => 'timetable'],
            ]],
            ["label" => "faculty_stuff", "submenu" => [
                ["label" => "staff", "url" => "/gic-staff", "url_name" => ""],
                ["label" => "staff_mobility", "url" => "/staffMobility", "url_name" => ""],
                ["label" => "guest_lecturer_researcher", "url" => "/invited-professors", "url_name" => ""],
            ]],
        ];
        // FAQ -> Contact US -> Sing in -> Search
        $topmenus = [
            ["label" => "faq", "url_name"=> 'frontend.faq', 'icon' => 'fa fa-question'],
            ["label" => "contact Us", "url_name"=> 'frontend.contactUs', 'icon' => 'fa fa-address-card mr-1'],
        ];

        $footer_menus = [
            // ["label" => "Faculty & Staff", "url_name"=> '/gic-staff'],
            // ["label" => "Staff's mobility", "url_name"=> '/staffMobility'],
            // ["label" => "invited_professor", "url_name"=> '/invited-professors'],
            // ["label" => "Our prodcuts", "url_name"=> ''],
            // ["label" => "Our services", "url_name"=> ''],
            // ["label" => __('notable_works'), "url_name"=> ''],
            // ["label" => "Projects", "url_name"=> 'gic-projects'],
            // ["label" => "Timetable", "url_name"=> '/timetable'],
            // ["label" => "Academic Calendar", "url_name"=> '/calendar'],
            ["label" => "GIC's Reports", "url_name"=> '/gic-report'],
            // ["label" => "Students & Alumni", "url_name"=> '/alumni-list'],

            // ["label" => "Students", "url_name"=> ''],
            // ["label" => "Students' Notable Works", "url_name"=> '/student-project'],
            // ["label" => "What alumni say about GIC?", "url_name"=> '/studentMessage'],
            // ["label" => "Awardees", "url_name"=> '/awardee'],
            // ["label" => "Scholarships", "url_name"=> '/scholarships'],


            ["label" => __('partner_type.University'), "url_name"=> '/partners/University'],
            ["label" => __('partner_type.Company'), "url_name"=> '/partners/Company'],
            // ["label" => "Video gallery", "url_name"=> '/gallery/videos'],
            // ["label" => "Photo gallery", "url_name"=> '/gallery/photos'],
            // ["label" => "What others say about us?", "url_name"=> ''],
            // ["label" => "News", "url_name"=> '/news'],
            // ["label" => "Seminars", "url_name"=> '/events'],
            // ["label" => "Posters", "url_name"=> '/posters'],
            ["label" => "FAQs", "url_name"=> '/faqs'],
            ["label" => "GIC Service", "url_name"=> '/gic-service'],
            // ["label" => "Others", "url_name"=> '/importantLink'],

        ];

        View::share('socials', $socials);
        View::share('topmenus', $topmenus);
        View::share('footer_menus', $footer_menus);
        View::share('menus', $menus);
        View::share('mapUrl', $mapUrl);

    }

    private function getProgramSubmenu() {
        try {
            $fieldStudy = \App\Degree::orderBy('created_at')->select('degree_en', 'degree_kh', 'id')->get();

            $menu = [
            ];
            foreach($fieldStudy as $f) {
                if ($f->degree_en == 'PhD' || $f->degree_en == 'Technical Degree') {
                    continue;
                }
                array_push($menu, [
                    "label" => $f->degree,
                    "url_name" => "",
                    "submenu" => [
                        ["label" => "about_the_program", "url_name"=> '', "url" => "/degree/$f->id/text_detail"],
                        ["label" => "curriculum", "url_name"=> '', "url" => "/degree/$f->id/curriculum"],
                        ["label" => "entrance_selection", "url_name"=> '', "url" => "/degree/$f->id/entrance_selection"],
                    ]
                ]);
            }
            return $menu;
        } catch(\Throwable $e) {
            return [];
        }

        // return [
        //     [
        //         "label" => __('Technical Program'),
        //         "url_name" => "",
        //         "submenu" => [
        //             ["label" => "about_the_program", "url_name"=> '', "url" => "/degree/technical/text_detail"],
        //             ["label" => "curriculum", "url_name"=> '', "url" => "/degree/technical/curriculum"],
        //             ["label" => "entrance_selection", "url_name"=> '', "url" => "/degree/technical/entrance_selection"],
        //         ]
        //         ],
        //         [
        //             "label" => __('Engineering Program'),
        //             "url_name" => "",
        //             "submenu" => [
        //                 ["label" => "about_the_program", "url_name"=> '', "url" => "/degree/engineering/text_detail"],
        //                 ["label" => "curriculum", "url_name"=> '', "url" => "/degree/engineering/curriculum"],
        //                 ["label" => "entrance_selection", "url_name"=> '', "url" => "/degree/engineering/entrance_selection"],
        //             ]
        //         ],
        //         [
        //             "label" => __('Master Program'),
        //             "url_name" => "",
        //             "submenu" => [
        //                 ["label" => "about_the_program", "url_name"=> '', "url" => "/degree/master/text_detail"],
        //                 ["label" => "curriculum", "url_name"=> '', "url" => "/degree/master/curriculum"],
        //                 ["label" => "entrance_selection", "url_name"=> '', "url" => "/degree/master/entrance_selection"],
        //             ]
        //         ],
        //         [
        //             "label" => __('PhD Program'),
        //             "url_name" => "",
        //             "submenu" => [
        //                 ["label" => "about_the_program", "url_name"=> '', "url" => "/degree/phd/text_detail"],
        //                 ["label" => "curriculum", "url_name"=> '', "url" => "/degree/phd/curriculum"],
        //                 ["label" => "entrance_selection", "url_name"=> '', "url" => "/degree/phd/entrance_selection"],
        //             ]
        //         ]

        // ];
    }
}
