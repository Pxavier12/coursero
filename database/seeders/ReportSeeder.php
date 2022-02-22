<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Report::insert([
            'user_id'=> "1",
            'language'=>"pyhton",
            'exercise'=> "1",
            'answer'=> "print ('hello world')",
            'status'=>'pending',
            'result'=>'pending',
        ]);
    }
}
