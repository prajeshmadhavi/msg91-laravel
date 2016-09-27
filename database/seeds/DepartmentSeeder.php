<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: jide
 * Date: 20/04/16
 * Time: 3:13 PM
 */
class DepartmentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('departments')->truncate();

        $departments = [
            ['name' => 'Business Management'],
            ['name' => 'Psychology'],
            ['name' => 'Mechanical Engineering'],
        ];

        DB::table('departments')->insert($departments);


    }
}