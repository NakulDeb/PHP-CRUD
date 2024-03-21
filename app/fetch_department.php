<?php 
    @include('connection.php');

    $sql = "SELECT * FROM departments";

    $departments = $conn->query($sql);
  

