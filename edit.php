<?php @include('ins/header.php') ?>
<?php @include('app/fetch_department.php') ?>
<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit']) && isset($_POST['e_id'])){

        @include('connection.php');
        $e_id = $_POST['e_id'];
        $sql = "SELECT * FROM employees WHERE id = $e_id";
        $employee = $conn->query($sql)->fetch_assoc();
        $conn->close();
    }
?>
    <div class="p-3 bg-light">
        <?php 
            
        ?>
        <form action="app/action.php" method="post" class="px-5">
            <input type="hidden" name="e_id" value="<?php echo $employee['id'] ?>">
            <div class="p-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $employee['name'] ?>" class="form-control" required>
            </div>
            <div class="p-2">
                <label for="salary">Salary</label>
                <input type="number" name="salary" id="salary" value="<?php echo $employee['salary'] ?>" class="form-control" required>
            </div>
            <div class="p-2">
                <label for="department_id">Department</label>
                <select class="form-select" name="department_id" aria-label="Default select example"  required>    
                    <?php while($department = $departments->fetch_assoc()) { ?>
                        <option <?php if($department['id'] == $employee['department_id']) echo 'selected' ?> value="<?php echo $department['id'] ?>"><?php echo $department['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="p-2">
                <input type="submit" value="Update" name="update" id="update" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="p-3 text-center bg-light">
        <a href="index.php" class="btn btn-dark">Back</a>
    </div>
<?php @include('ins/footer.php') ?>
