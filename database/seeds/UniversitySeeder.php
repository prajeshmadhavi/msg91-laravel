<?php

use App\Models\University;
use App\Models\UniversityAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('universities')->truncate();
        DB::table('university_admins')->truncate();
        DB::table('university_departments')->truncate();

        $universities = [

            ['name' =>  'Manipal University', 'email' => 'manipal@gmail.com', 'logo' => 'https://pbs.twimg.com/media/CirhMdyUgAAC7y0.jpg',  'address' => 'Manipal, Karnataka, India', 'phone' => '8892027447'],
            ['name' =>  'Bangalore University', 'email' => 'bangalore@gmail.com', 'logo' => 'http://image3.mouthshut.com/images/imagesp/925083099s.jpg', 'address' => 'Bengaluru, Karnataka, India', 'phone' => '8892027447'],
            ['name' =>  'University Of Mysore', 'email' => 'mysore@gmail.com', 'logo' => 'http://47image.lawctopus.com/wp-content/uploads/2016/02/download-52.jpg', 'address' => 'Mysuru, Karnataka, India', 'phone' => '8892027447'],
       
        ];
        //DB::table('universities')->insert($universities);

        foreach ($universities as $university)
        {
            University::create($university);
        }

        $admin = [

            ['name' =>  $faker->name, 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 1],
            ['name' =>  $faker->name, 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 2],
            ['name' =>  $faker->name, 'email' => $faker->email, 'password' => bcrypt('social@university'), 'university_id' => 3],

        ];

        DB::table('university_admins')->insert($admin);

        $admin = [

            //University 1
            [ 'department_id' =>  1, 'university_id' => 1],
            [ 'department_id' =>  2, 'university_id' => 1],
            [ 'department_id' =>  3, 'university_id' => 1],

            //University 2
            [ 'department_id' =>  1, 'university_id' => 2],
            [ 'department_id' =>  2, 'university_id' => 2],
            [ 'department_id' =>  3, 'university_id' => 2],

            //University 3
            [ 'department_id' =>  1, 'university_id' => 3],
            [ 'department_id' =>  2, 'university_id' => 3],
            [ 'department_id' =>  3, 'university_id' => 3],
          
        ];

        DB::table('university_departments')->insert($admin);

        foreach (UniversityAdmin::all() as $admin) {

            //Adds Gender Based Profile Picture
            $avatar = $this->random_img();
            $admin->update(['avatar' => $avatar]);
        }

    }


    private function random_img()
    {
        $no =  random_int(90, 99);
        return "https://randomuser.me/api/portraits/men/". $no . ".jpg";
    }
}
