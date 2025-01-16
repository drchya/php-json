<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'TodoModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    $todo_model = new TodoModel();
    $todo_model->insertTask($task);

    echo json_encode(['status' => 'success']);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $todoModel = new TodoModel();
    $tasks = $todoModel->getTasks();
    echo json_encode($tasks);
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    if (isset($_DELETE['id'])) {
        $id = $_DELETE['id'];
        $todo_model = new TodoModel();
        $todo_model->deleteTask($id);

        echo json_encode(['status' => 'success']);
    }
}