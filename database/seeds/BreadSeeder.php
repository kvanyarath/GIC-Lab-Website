<?php

use Illuminate\Database\Seeder;

class BreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(FaqSeeder::class);
        // $this->call(StudentProjectSeeder::class);
        // $this->call(AboutUsSeeder::class);
        // $this->call(ContactUsSeeder::class);
        // $this->call(ScholarshipSeeder::class);
        // $this->call(ContactUsMessageSeeder::class);
        // $this->call(AboutUsLinkSeeder::class);
        // $this->call(PartnerTypeSeeder::class);
        // $this->call(Partner2Seeder::class);
        // $this->call(EventBreadSeeder::class);
        // $this->call(PhotoAlbumBreadSeeder::class);
        // $this->call(PhotoBreadSeeder::class);
        $this->call(NewsBreadSeeder::class);
        $this->call(AboutGicBreadSeeder::class);
        // $this->call(StudentMessageBreadSeeder::class);
        $this->call(AcademicBreadSeeder::class);  
        $this->call(GicProjectBreadSeeder::class);      
        $this->call(ProductBreadSeeder::class);      
        $this->call(PosterBreadSeeder::class);     
        $this->call(VideoBreadSeeder::class);     

        $this->call(PermissionRoleTableSeeder::class);


    }
}
