<?php include "common/header.php"; ?>
<?php
$id = $_GET['id'];
$query = "select * from `staff_member` where id='$id'";
$fire = mysqli_query($conn, $query);
if (mysqli_num_rows($fire) > 0) {
    while ($row = mysqli_fetch_assoc($fire)) {
        $photo = $row['photo'];
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $gender = $row['gender'];
        $date = $row['date'];
        $a_role = $row['a_role'];
        $address = $row['address'];
        $city = $row['city'];
        $state = $row['state'];
        $phone = $row['phone'];
        $email = $row['email'];
       
    }
}
?>

<div class="row">
    <div class="col-md-6 mx-auto mb-4">
        <div class="card-header bg-info">
            <h5 class="d-inline text-white">Staff Member Information</h5>
        </div>


        <div class="border p-3">

            <img src="<?php echo $photo; ?>" style="margin-bottom:20px;" width="100%" height="300px" alt="">
            <tr>
                <form method="post">
                    <td class="text-center">
                        <div class="form-group">
                            <label class="mr-2 mb-0">Attendance :-</label>
                            <label for="" class="mb-0 mr-2">
                                <input type="hidden" class="mr-1" name="sid" value="<?php echo $id; ?>">
                                <input type="radio" class="mr-1" name="att_status" value="1">
                                Present
                            </label>
                            <label for="" class="mb-0">
                                <input type="radio" class="mr-1" name="att_status" value="0">
                                Absent
                            </label>
                            <label for="" class="mb-0">
                                <input type="submit" class="ml-5 btn btn-sm btn-primary" name="submit">
                            </label>
                        </div>
                    </td>
                </form>
            </tr>
            <table width="100%" class="view-member">
                <tbody>
                    <tr>
                        <td class="label">Photo :</td>
                        <td><?php echo $photo; ?></td>
                    </tr>
                    <tr>
                        <td class="label">First Name :</td>
                        <td><?php echo $f_name . ' ' . $l_name; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Last Name :</td>
                        <td><?php echo $l_name; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Gender :</td>
                        <td><?php echo $gender; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Date :</td>
                        <td><?php echo date('j F,Y', strtotime($date)); ?></td>
                    </tr>
                    <tr>
                    <tr>
                        <td class="label">Assign Role :</td>
                        <td><?php echo $a_role; ?></td>
                    </tr>
                    <tr></tr>
                    <td class="label">Address :</td>
                    <td><?php echo $address; ?></td>
                    </tr>
                    <tr>
                        <td class="label">City :</td>
                        <td><?php echo $city; ?></td>
                    </tr>
                    <tr>
                        <td class="label">State :</td>
                        <td><?php echo $state; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Phone :</td>
                        <td><?php echo $phone; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Email :</td>
                        <td><?php echo $email; ?></td>
                    </tr>

                    
                    </tr>


                    </tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
if (isset($_POST['submit'])) {
    $att_status = $_POST['att_status'];
    $att_id = $_POST['sid'];
    $date = date('Y-m-d');

    $query = "INSERT INTO `staff_attendance`(`att_status`,`att_date`,`att_id`) VALUES ('$att_status','$date','$att_id')";
    $fire = mysqli_query($conn, $query);
    if ($fire) {
        echo "<script>alert('Attendance Submitted');</script>";
    } else {
        mysqli_error($conn);
    }
}
?>
<?php include "common/footer.php"; ?>