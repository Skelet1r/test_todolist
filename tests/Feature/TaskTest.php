<?php

use App\Models\Task;
use Illuminate\Support\Facades\DB;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('test_getTasks_is_successful', function () {
    $response = $this->get('/getTasks');

    $response->assertStatus(200);
});

test('test_addTasks_is_successful', function () {
    $data = [
        'name' => 'Задача по разработке',
        'description' => 'Описание задачи',
        'dueDate' => '2025-02-01 10:00:00',
        'isCompleted' => false,
        'priority' => 'Высокий',
        'category' => 'Разработка',
    ];

    $response = $this->postJson('/addTask', $data);

    $response->assertStatus(200);
});

test('test_updateTasks_is_successful', function () {

    $data = [
        'name' => 'Задача по разработке',
        'description' => 'Описание задачи',
        'dueDate' => '2025-02-01 10:00:00',
        'isCompleted' => false,
        'priority' => 'Высокий',
        'category' => 'Разработка',
    ];

    $response = $this->putJson('/updateTask/1', $data);

    $response->assertStatus(200);
});

test('test_deleteTasks_is_successful', function () {

    $response = $this->delete('/deleteTask/1');

    $response->assertStatus(200);
});
