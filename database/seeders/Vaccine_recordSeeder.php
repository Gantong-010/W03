<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Vaccine_recordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine_records')->insert([
            [
                "std_id" => 1,
                "vac_id" => 1,
                "vaccined_date" => "2023-05-15"
            ],
              [
                "std_id" => 2,
                "vac_id" => 2,
                "vaccined_date" => "2023-06-02"
              ],
              [
                "std_id" => 3,
                "vac_id" => 3,
                "vaccined_date" => "2023-04-18"
              ],
              [
                "std_id" => 4,
                "vac_id" => 4,
                "vaccined_date" => "2023-07-10"
              ],
              [
                "std_id" => 4,
                "vac_id" => 5,
                "vaccined_date" => "2023-05-25"
              ],
              [
                "std_id" => 5,
                "vac_id" => 6,
                "vaccined_date" => "2023-06-30"
              ],
              [
                "std_id" => 7,
                "vac_id" => 7,
                "vaccined_date" => "2023-06-18"
              ],
              [
                "std_id" => 8,
                "vac_id" => 8,
                "vaccined_date" => "2023-07-05"
              ],
              [
                "std_id" => 9,
                "vac_id" => 9,
                "vaccined_date" => "2023-07-20"
              ],
              [
                "std_id" => 10,
                "vac_id" => 10,
                "vaccined_date" => "2023-05-10"
              ]
        ]);
    }
}
