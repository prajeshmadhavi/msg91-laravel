<?php

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('students')->truncate();
        DB::table('student_subject')->truncate();

        $student = array(
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
            ['name' => $faker->name, 'gender' => gender(), 'email' => $faker->email, 'password' => bcrypt('social@university'), 'department_id' => $faker->numberBetween($min = 1, $max = 3), 'university_id' => $faker->numberBetween($min = 1, $max = 3), 'registration_id' => $faker->numberBetween($min = 10000000, $max = 190000000), 'dob' => date('d/m/Y'), 'batch_year' => date('Y'), 'phone' => $faker->e164PhoneNumber],
        );

        DB::table('students')->insert($student);


        foreach (Student::all() as $student) {

            //Adds Gender Based Profile Picture
            $gender = $student->gender == 'male' ? 'men' : 'women';
            $avatar = $this->random_img($gender);
            $student->update(['avatar' => $avatar]);

            $department = $student->department;

            foreach ($department->subjects()->wherePivot('university_id', $student->university->id)->get() as $subject) {

                $student->subjects()->save($subject,
                    [
                        'faculty_id' => $subject->faculty($student->university->id)->id,
                        'department_id' => $department->id,
                        'university_id' => $student->university->id
                    ]
                );

            }
        }


    }


    private function random_img($gender)
    {
        $no = random_int(1, 50);
        return "https://randomuser.me/api/portraits/" . $gender . "/" . $no . ".jpg";
    }

}
