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
                        <select class="form-control" name="name" id="member_id" required>
                            <?php
                            $members = mysqli_query($conn, "SELECT * FROM member");
                            while ($member = mysqli_fetch_assoc($members)) {
                                echo "<option value='{$member['id']}'>{$member['f_name']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Service Dropdown -->
                    <div class="mb-3">
                        <label for="service_id" class="form-label text-white">Service</label>
                        <select class="form-control" name="service" id="service_id" required>
                            <?php
                            $services = mysqli_query($conn, "SELECT * FROM services");
                            while ($service = mysqli_fetch_assoc($services)) {
                                echo "<option value='{$service['id']}'>{$service['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    

                    <!-- Submit Button -->
                    <button type="submit" name="submit" class="btn btn-primary">Assign Membership</button>

                </form>

 <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                   
                    $service = $_POST['service'];

                    $sql = mysqli_query($conn, "INSERT INTO `memberss` (`name`, `service`)
                                                VALUES ('$name', '$service')");

                    if ($sql) {
                        echo "<script>alert('Service added successfully'); window.location.href='assign_membership.php';</script>";
                    } else {
                        echo "<script>alert('Error adding service'); location.href='assign_membership.php';</script>";
                    }
                }
                ?>




            </div>
        </div>
    </div>
</div>
<?php include "common/footer.php"; ?>
