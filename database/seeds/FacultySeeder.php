<?php

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('faculties')->truncate();
        DB::table('faculty_subjects')->truncate();

        $faculty = array(

            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1, 'dob' => '12/08/1850'],

            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2, 'dob' => '12/08/1850'],

            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3, 'dob' => '12/08/1850'],

        );
        DB::table('faculties')->insert($faculty);


        $faculty_subject_department = array(

            //#University 1
            ['faculty_id' => 1, 'subject_id' => 1, 'department_id' => 1],
            ['faculty_id' => 2, 'subject_id' => 2, 'department_id' => 1],
            ['faculty_id' => 3, 'subject_id' => 3, 'department_id' => 1],

            ['faculty_id' => 4, 'subject_id' => 4, 'department_id' => 2],
            ['faculty_id' => 5, 'subject_id' => 5, 'department_id' => 2],
            ['faculty_id' => 6, 'subject_id' => 6, 'department_id' => 2],

            ['faculty_id' => 7, 'subject_id' => 7, 'department_id' => 3],
            ['faculty_id' => 8, 'subject_id' => 8, 'department_id' => 3],
            ['faculty_id' => 9, 'subject_id' => 9, 'department_id' => 3],


            //#University 2
            ['faculty_id' => 10, 'subject_id' => 1, 'department_id' => 1],
            ['faculty_id' => 11, 'subject_id' => 2, 'department_id' => 1],
            ['faculty_id' => 12, 'subject_id' => 3, 'department_id' => 1],

            ['faculty_id' => 13, 'subject_id' => 4, 'department_id' => 2],
            ['faculty_id' => 14, 'subject_id' => 5, 'department_id' => 2],
            ['faculty_id' => 15, 'subject_id' => 6, 'department_id' => 2],

            ['faculty_id' => 16, 'subject_id' => 7, 'department_id' => 3],
            ['faculty_id' => 17, 'subject_id' => 8, 'department_id' => 3],
            ['faculty_id' => 18, 'subject_id' => 9, 'department_id' => 3],


            //#University 3
            ['faculty_id' => 19, 'subject_id' => 1, 'department_id' => 1],
            ['faculty_id' => 20, 'subject_id' => 2, 'department_id' => 1],
            ['faculty_id' => 21, 'subject_id' => 3, 'department_id' => 1],

            ['faculty_id' => 22, 'subject_id' => 4, 'department_id' => 2],
            ['faculty_id' => 23, 'subject_id' => 5, 'department_id' => 2],
            ['faculty_id' => 24, 'subject_id' => 6, 'department_id' => 2],

            ['faculty_id' => 25, 'subject_id' => 7, 'department_id' => 3],
            ['faculty_id' => 26, 'subject_id' => 8, 'department_id' => 3],
            ['faculty_id' => 27, 'subject_id' => 9, 'department_id' => 3],

        );

        DB::table('faculty_subjects')->insert($faculty_subject_department);


        foreach (Faculty::all() as $faculty) {

            //Adds Gender Based Profile Picture
            $gender = $faculty->gender == 'male' ? 'men' : 'women';
            $avatar = $this->random_img($gender);
            $faculty->update(['avatar' => $avatar]);
        }

    }
    

    private function random_img($gender)
    {
        $no = random_int(50, 90);
        return "https://randomuser.me/api/portraits/" . $gender . "/" . $no . ".jpg";
    }


}



