<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskService {

    public function getTasks(Request $request) {

        $name = $request->name;

        $sort = $request->sort;

        $order = $request->order;

        if ($name) {
            $task = Task::where('name', 'like', "%{$name}%")->orderBy($sort, $order)->get();
        }
        else {
            $task = Task::all();
        }

        return response()->json($task);
    }

    public function addTask(TaskRequest $request) {
        $validated = $request->validated();

        $task = Task::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'dueDate' => $validated['dueDate'],
            'isCompleted' => $validated['isCompleted'],
            'priority' => $validated['priority'],
            'category' => $validated['category'],
        ]);

        return response()->json([
            'status' => 'success',
            'task' => $task
        ]);
    }

    public function updateTask(TaskRequest $request, Task $task) {
        $validated = $request->validated();

        $task->update($validated);

        return response()->json([
            'status' => 'success',
            'task' => $task
        ]);
    }

    public function deleteTask(Task $task) {
        $task->delete();

        return response()->json([
            'status' => 'success',
            'task' => $task
        ]);
    }
}
