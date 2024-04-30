<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     */
    public function run(): void
    {
        Course::create([
            "name" => "Visible Mending",
            "description" => "Learn how to artistically mend your own clothes",
            "price" => 98,
        ]);

        Course::factory(20)->create();
    }
}
