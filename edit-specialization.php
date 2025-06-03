

<?php include "common/header.php";

$id= $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM `specialization` where `id`='$id'");
$row = mysqli_fetch_assoc($sql);
?>

  <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                         

   <div class="clearfix">
  <span class="float-start">Add Specialization</span>
  <span> <a href="view-specialization.php" <button type="button" class="btn btn-primary float-end mb-4"> Specialization List</button></a></span>
</div>
 

                <form method="POST" enctype="multipart/form-data">   


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="name" value="<?php echo $row['name'];?>">
                                <label for="floatingInput"> Name </label>
                            </div>
                            
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;" name="description"><?php echo $row['description'];?></textarea>
                                <label for="floatingTextarea"> Description</label>
                            </div>
                              <div class="clearfix">
  
  <span> <button type="submit" name="submit" class="btn btn-primary float-end mt-3"> Save</button></a></span>
</div>


</form>

 <?php

        if (isset($_POST['submit'])) {




          $name = $_POST['name'];

          $description = $_POST['description'];

           $sql= mysqli_query($conn, "UPDATE `specialization` SET
        
         `name`='$name',
         
         `description`='$description'
          WHERE `id` = '$id'");


          if ($sql) {
            echo "<script>alert('Specialization added successfully');location.href='view-specialization.php';</script>";
          } else {
            echo "<script>alert('error');location.href='view-specialization.php';</script>";
          }
        }
        ?>







                        </div>


                             
              
                    </div>


               

      </div>



                    </div>  

<?php include "common/footer.php";?>