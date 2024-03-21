<?php 
    @include('connection.php');

    $sql = "SELECT E.id AS e_id, E.name AS e_name, E.salary AS e_salary, E.created_at AS e_created_at, D.id AS d_id, D.name AS d_name FROM employees E JOIN departments D ON E.department_id = D.id ORDER BY e_created_at ASC";

    $employees = $conn->query($sql);
  

