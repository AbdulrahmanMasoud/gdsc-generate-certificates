<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\Track;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Track::factory(11)->create();
        Course::factory(30)->create();
        Student::factory(100)->create();
    }
}
