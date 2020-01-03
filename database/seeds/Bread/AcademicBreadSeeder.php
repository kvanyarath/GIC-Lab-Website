<?php

use Illuminate\Database\Seeder;

class AcademicBreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(DegreeBreadSeeder::class);
        $this->call(ProgramYearBreadSeeder::class);
        $this->call(FieldStudyBreadSeeder::class);
        $this->call(CurriculumBreadSeeder::class);
    }
}
