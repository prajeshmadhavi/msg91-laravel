<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(StudentSeeder::class);

    }
}
