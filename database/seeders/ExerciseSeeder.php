<?php

namespace Database\Seeders;

use App\Models\Excercise;
use App\Models\Exercise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Exercise::insert([
            [
                'language' => 'c',
                'number' => '1',
                'description' => '1999-01-09',
                ],
            [
                'language' => 'c',
                'number' => '2',
                'description' => '1999-01-09',
                ],
            [
                'language' => 'c',
                'number' => '3',
                'description' => '1999-01-09',
                ],
            [
                'language' => 'python',
                'number' => '1',
                'description' => '1999-01-09',
            ],
            [
                'language' => 'python',
                'number' => '2',
                'description' => '1999-01-09',],
            [
                'language' => 'python',
                'number' => '3',
                'description' => '1999-01-09',
            ]
        ]);
    }
}
