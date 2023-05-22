<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        student::truncate();
        Schema::enableForeignKeyConstraints();
        $data = [
            ['name' => 'Dadang', 'gender' => 'L', 'nis' => '10234'],
            ['name' => 'Maman', 'gender' => 'L', 'nis' => '17834'],
            ['name' => 'Sunani', 'gender' => 'P', 'nis' => '34234'],
            ['name' => 'Pengki', 'gender' => 'L', 'nis' => '56234']


        ];
        foreach ($data as  $value) {

            student::insert([
                'name' => $value['name'],
                'gender' => $value['gender'],
                'nis' => $value['nis'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        // Student::factory()->count(10)->create();
    }
}
