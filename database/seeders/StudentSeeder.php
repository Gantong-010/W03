<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            
            [
                "sid" => 641442201,
                "fname" => "John",
                "lname" => "Doe",
                "std_prg_id" => 1
              ],
              [
                "sid" => 641442202,
                "fname" => "Jane",
                "lname" => "Smith",
                "std_prg_id" => 2
              ],
              [
                "sid" => 641442203,
                "fname" => "Michael",
                "lname" => "Johnson",
                "std_prg_id" => 3
              ],
              [
                "sid" => 641442204,
                "fname" => "Emily",
                "lname" => "Brown",
                "std_prg_id" => 4
              ],
              [
                "sid" => 641442205,
                "fname" => "David",
                "lname" => "Williams",
                "std_prg_id" => 4
              ],
              [
                "sid" => 641442206,
                "fname" => "Sarah",
                "lname" => "Miller",
                "std_prg_id" => 5
              ],
              [
                "sid" => 641442207,
                "fname" => "Matthew",
                "lname" => "Wilson",
                "std_prg_id" => 6
              ],
              [
                "sid" => 641442208,
                "fname" => "Olivia",
                "lname" => "Moore",
                "std_prg_id" => 7
              ],
              [
                "sid" => 641442209,
                "fname" => "Daniel",
                "lname" => "Taylor",
                "std_prg_id" => 9
              ],
              [
                "sid" => 641442210,
                "fname" => "Sophia",
                "lname" => "Anderson",
                "std_prg_id" => 10
              ]

        ]); 
    }
}
