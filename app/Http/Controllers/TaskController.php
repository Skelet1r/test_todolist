<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Models\Task;

class TaskController extends Controller
{
    protected TaskService $taskService;

    public function __construct(TaskService $taskService) {
        $this->taskService = $taskService;
    }

    public function getTasks(Request $request) {
        return $this->taskService->getTasks($request);
    }

    public function addTask(TaskRequest $request) {
        return $this->taskService->addTask($request);
    }

    public function updateTask(TaskRequest $request, Task $task) {
        return $this->taskService->updateTask($request, $task);
    }

    public function deleteTask(Task $task) {
        return $this->taskService->deleteTask($task);
    }
}
