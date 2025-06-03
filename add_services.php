<?php include "common/header.php"; ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">

                <div class="clearfix">
                    <span class="float-start text-white">Add Service</span>
                    <a href="view_services.php" class="btn btn-primary float-end mb-4">Service List</a>

                </div>

                <form method="POST" enctype="multipart/form-data">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="serviceName" placeholder="Service Name" name="name" required>
                        <label for="serviceName">Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="serviceDescription" placeholder="Description" name="description" required>
                        <label for="serviceDescription">Description</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="servicePrice" placeholder="Price" name="price" required>
                        <label for="servicePrice">Price</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="createdAt" placeholder="Created At" name="created_at" required>
                        <label for="createdAt">Created At</label>
                    </div>

                    <div class="clearfix">
                        <button type="submit" name="submit" class="btn btn-primary float-end">Save</button>
                    </div>

                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $created_at = $_POST['created_at'];

                    $sql = mysqli_query($conn, "INSERT INTO `services` (`name`, `description`, `price`, `created_at`)
                                                VALUES ('$name', '$description', '$price', '$created_at')");

                    if ($sql) {
                        echo "<script>alert('Service added successfully'); window.location.href='view_services.php';</script>";
                    } else {
                        echo "<script>alert('Error adding service'); location.href='view_services.php';</script>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php include "common/footer.php"; ?>
