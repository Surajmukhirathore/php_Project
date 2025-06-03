

<?php include "common/header.php";

$id= $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM `services` where `id`='$id'");
$row = mysqli_fetch_assoc($sql);
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                


                <div class="clearfix">
                    <span class="float-start">Add Services</span>
                    <span> <a href="view_services.php" <button type="button" class="btn btn-primary float-end mb-4">Staff Member List</button></a></span>
                </div>


                <form method="POST" enctype="multipart/form-data">



                    

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="name@example.com" name="name" value="<?php echo $row['name']; ?>">
                        <label for="floatingInput"> Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="description" value="<?php echo $row['description']; ?>">
                        <label for="floatingPassword">Description</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="price" value="<?php echo $row['price']; ?>">
                        <label for="floatingPassword">price</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingPassword"
                            placeholder="Password" name="created_at" value="<?php echo $row['created_at']; ?>">
                        <label for="floatingPassword">Created_At</label>
                    </div>



                    
                                                          <div class="clearfix">

                        <span> <button type="submit" name="submit" class="btn btn-primary float-end">Save</button></span>
                    </div>

                </form>


                <?php

                if (isset($_POST['submit'])) {


                    
                    
                    $name = $_POST['name'];
                    $description = $_POST['description'];

                    $price = $_POST['price'];
                    $created_at = $_POST['created_at'];


                    $sql = mysqli_query($conn, "UPDATE `services` SET
        
         
          
          `name`='$name',
          `description`='$description',
          `price`='$price',
          `created_at`='$created_at'
          
          WHERE `id` = '$id'");


                    if ($sql) {
                        echo "<script>alert('Services added successfully');location.href='view_services.php';</script>";
                    } else {
                        echo "<script>alert('error');location.href='view_services.php';</script>";
                    }
                }
                ?>


            </div>
        </div>

    </div>
</div>


<?php include "common/footer.php"; ?>

<script>
    document.getElementById('image-upload').addEventListener('change', function(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            var imgElement = document.getElementById('image-preview');
            imgElement.src = reader.result;
        };

        reader.readAsDataURL(input.files[0]);
    });
</script>