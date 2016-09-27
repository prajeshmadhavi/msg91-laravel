<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: jide
 * Date: 20/04/16
 * Time: 3:13 PM
 */
class SubjectSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('subjects')->truncate();
        DB::table('university_department_subjects')->truncate();

        $subjects = [

            ['name' => 'E-Commerce'],
            ['name' => 'Business Law'],
            ['name' => 'Marketing'],

            ['name' => 'Personality Theories'],
            ['name' => 'Temperament Management'],
            ['name' => 'Basic Cognitive Processes '],

            ['name' => 'Numerical Analysis'],
            ['name' => 'Physics'],
            ['name' => 'Microsystems Analysis'],
        ];

        DB::table('subjects')->insert($subjects);

        $subjects_department = [

            ['subject_id' => 1, 'department_id' => 1, 'university_id' => 1],
            ['subject_id' => 2, 'department_id' => 1, 'university_id' => 1],
            ['subject_id' => 3, 'department_id' => 1, 'university_id' => 1],

            ['subject_id' => 4, 'department_id' => 2, 'university_id' => 1],
            ['subject_id' => 5, 'department_id' => 2, 'university_id' => 1],
            ['subject_id' => 6, 'department_id' => 2, 'university_id' => 1],

            ['subject_id' => 7, 'department_id' => 3, 'university_id' => 1],
            ['subject_id' => 8, 'department_id' => 3, 'university_id' => 1],
            ['subject_id' => 9, 'department_id' => 3, 'university_id' => 1],

            ['subject_id' => 1, 'department_id' => 1, 'university_id' => 2],
            ['subject_id' => 2, 'department_id' => 1, 'university_id' => 2],
            ['subject_id' => 3, 'department_id' => 1, 'university_id' => 2],

            ['subject_id' => 4, 'department_id' => 2, 'university_id' => 2],
            ['subject_id' => 5, 'department_id' => 2, 'university_id' => 2],
            ['subject_id' => 6, 'department_id' => 2, 'university_id' => 2],

            ['subject_id' => 7, 'department_id' => 3, 'university_id' => 2],
            ['subject_id' => 8, 'department_id' => 3, 'university_id' => 2],
            ['subject_id' => 9, 'department_id' => 3, 'university_id' => 2],


            ['subject_id' => 1, 'department_id' => 1, 'university_id' => 3],
            ['subject_id' => 2, 'department_id' => 1, 'university_id' => 3],
            ['subject_id' => 3, 'department_id' => 1, 'university_id' => 3],

            ['subject_id' => 4, 'department_id' => 2, 'university_id' => 3],
            ['subject_id' => 5, 'department_id' => 2, 'university_id' => 3],
            ['subject_id' => 6, 'department_id' => 2, 'university_id' => 3],

            ['subject_id' => 7, 'department_id' => 3, 'university_id' => 3],
            ['subject_id' => 8, 'department_id' => 3, 'university_id' => 3],
            ['subject_id' => 9, 'department_id' => 3, 'university_id' => 3],

        ];

        DB::table('university_department_subjects')->insert($subjects_department);
    }
}