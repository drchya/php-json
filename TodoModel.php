<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class TodoModel {
    private $connect;

    public function __construct() {
        $this->connect = new mysqli("localhost", "root", "", "todo_app");
        if ($this->connect->connect_error) {
            die("Connection failed: " . $this->connect->connect_error);
        }
    }

    public function insertTask($task) {
        $stmt = $this->connect->prepare("INSERT INTO todos (task) VALUES (?)");
        $stmt->bind_param("s", $task);
        $stmt->execute();
        $stmt->close();
    }

    public function getTasks() {
        $result = $this->connect->query("SELECT * FROM todos ORDER BY id DESC");
        $tasks = [];
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }

        return $tasks;
    }

    public function deleteTask($id) {
        $stmt = $this->connect->prepare("DELETE FROM todos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}