<?php

namespace Database\Seeders;

use App\Models\Task as ModelsTask;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = new ModelsTask();
        $task->title = 'Task 1';
        $task->description = 'Esta es la tarea número 1';
        $task->user_id = User::find(1)->id;
        $task->save();
    }
}
