<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            DB::table('tasks')->insert([
                'folder_id' => 1,
                'title' => 'task'.($i+1),
                'status' => rand(1, 3),
                'due_date' => Carbon::now()->addDay($i),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
