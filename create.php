<?php @include('ins/header.php') ?>
<?php @include('app/fetch_department.php') ?>
    <div class="p-3 bg-light">
        <form action="app/action.php" method="post" class="px-5">
            <div class="p-2">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="p-2">
                <label for="salary">Salary</label>
                <input type="number" name="salary" id="salary" class="form-control" required>
            </div>
            <div class="p-2">
                <label for="department_id">Department</label>
                <select class="form-select" name="department_id" aria-label="Default select example" required>
                    <option disabled selected value="">Select Department</option> 
                    <?php while($department = $departments->fetch_assoc()) { ?>
                        <option value="<?php echo $department['id'] ?>"><?php echo $department['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="p-2">
                <input type="submit" name="create" id="create" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="p-3 text-center bg-light">
        <a href="index.php" class="btn btn-dark">Back</a>
    </div>
<?php @include('ins/footer.php') ?>
