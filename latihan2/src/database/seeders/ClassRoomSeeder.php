<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\classRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();
        $data = [
            ['name' => '2B'],
            ['name' => '3B'],
            ['name' => '1A'],
            ['name' => '2A'],
        ];
        foreach ($data as  $value) {

            ClassRoom::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
