<?php
    @include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['create'])){
        $name          = $_POST["name"];
        $salary        = $_POST["salary"];
        $department_id = $_POST["department_id"];

        $sql = "INSERT INTO employees(name, salary, department_id) VALUES('$name', $salary, $department_id)";

        $result = $conn->query($sql) or die("fail" . $result);
        $conn->close();

        header('location: http://localhost:8081/index.php');
    }

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete'])){
        $id = $_POST["e_id"];

        $sql = "DELETE FROM employees WHERE id = $id";

        $result = $conn->query($sql) or die("fail" . $result);
        $conn->close();

        header('location: http://localhost:8081/index.php');
    }

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])){
        $id            = $_POST['e_id'];
        $name          = $_POST["name"];
        $salary        = $_POST["salary"];
        $department_id = $_POST["department_id"];

        $sql = "UPDATE employees SET name = '$name', salary = $salary, department_id = $department_id WHERE id = $id";

        $result = $conn->query($sql) or die("fail" . $result);
        $conn->close();

        header('location: http://localhost:8081/index.php');
    }