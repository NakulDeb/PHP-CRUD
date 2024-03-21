<?php @include('ins/header.php') ?>
<?php @include('app/fetch_employee.php') ?>
    <div class="p-3 text-center bg-light">
        <?php if($employees->num_rows > 0) { ?>
        <table class="table table-bordered table-hover table-stripe">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($employee = $employees->fetch_assoc()) {?>
                <tr>
                    <td><?php echo $employee['e_id'] ?></td>
                    <td><?php echo $employee['e_name'] ?></td>
                    <td><?php echo $employee['e_salary'] ?></td>
                    <td><?php echo $employee['d_name'] ?></td>
                    <td>
                        <div class="row align-items-center">
                            <form action="edit.php" method="post" class="col-6">
                                <input type="hidden" name="e_id" value="<?php echo $employee['e_id'] ?>">
                                <input type="submit" value="edit" name="edit" class="btn btn-primary">
                            </form>
                            <form action="app/action.php" method="post" class="col-6">
                                <input type="hidden" name="e_id" value="<?php echo $employee['e_id'] ?>">
                                <input type="submit" value="delete" name="delete" class="btn btn-danger">
                            </form>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <?php } else {?>
            <div class="p-5 border rounded bg-white">
                <h2 class="text-center">Empty!</h2>
            </div>
        <?php } ?>
    </div>
    <div class="p-3 text-center bg-light">
        <a href="create.php" class="btn btn-success">Create</a>
    </div>
<?php @include('ins/footer.php') ?>
