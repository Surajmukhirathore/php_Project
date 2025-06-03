<?php include "common/header.php"; ?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded p-4">
                <h2 class="mb-4 text-white">Assign Membership to Member</h2>

                <form method="POST" enctype="multipart/form-data">

                    <!-- Member Dropdown -->
                    <div class="mb-3">
                        <label for="member_id" class="form-label text-white">Member</label>
                        <select class="form-control" name="member_id" id="member_id" required>
                            <?php
                            $members = mysqli_query($conn, "SELECT * FROM member");
                            while ($member = mysqli_fetch_assoc($members)) {
                                echo "<option value='{$member['id']}'>{$member['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Service Dropdown -->
                    <div class="mb-3">
                        <label for="service_id" class="form-label text-white">Service</label>
                        <select class="form-control" name="service_id" id="service_id" required>
                            <?php
                            $services = mysqli_query($conn, "SELECT * FROM services");
                            while ($service = mysqli_fetch_assoc($services)) {
                                echo "<option value='{$service['id']}'>{$service['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Start Date -->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                        <label for="start_date">Start Date</label>
                    </div>

                    <!-- End Date -->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                        <label for="end_date">End Date</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" name="submit" class="btn btn-primary">Assign Membership</button>

                </form>


<?php

                if (isset($_POST['submit'])) {


                  

                    $member_id= $_POST['member_id'];
                    $service_id= $_POST['service_id'];

                    $start_date = $_POST['start_date'];
                    $end_date = $_POST['end_date'];



                    $sql = mysqli_query($conn, "INSERT INTO `member`(`member_id`, `service_id`, `start_date`, `end_date`)
 VALUES ('$member_id','$service_id','$start_date','$end_date')");


                    if ($sql) {
                        echo "<script>alert('Staff member added successfully');location.href='services.php';</script>";
                    } else {
                        echo "<script>alert('error');location.href='services.php';</script>";
                    }
                }
                ?>









            </div>
        </div>
    </div>
</div>
<?php include "common/footer.php"; ?>
