<?php

use App\Student;
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
        $this->call(StudentSeeder::class);
        $this->call(AttendanceGroupSeeder::class);
        $this->call(SchoolSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
