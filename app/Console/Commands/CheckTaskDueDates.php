<?php

namespace App\Console\Commands;

use App\Models\Task;
use Illuminate\Console\Command;

class CheckTaskDueDates extends Command
{
    protected $signature = 'tasks:check-due-dates';
    protected $description = 'Check tasks that are due today and send notifications.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $tasks = Task::whereDate('due_date', now()->toDateString())->get();

        foreach ($tasks as $task) {
            $task->checkDueDate();
        }
    }
}
