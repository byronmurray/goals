<?php

use App\Goal;
use App\Task;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Goal::truncate();

        factory(User::class, 5)->create();
        factory(Task::class, 5)->create();
        factory(Goal::class, 10)->create();
    }
}
