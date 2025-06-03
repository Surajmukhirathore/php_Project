<?php include "common/header.php";

$id= $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM `category` where `id`='$id'");
if(mysqli_num_rows($sql)>0){
while ($row = mysqli_fetch_assoc($sql)) {
    $name = $row['name'];
   
     $description=$row['description'];
   
  
  
}
 }
?>





<?php include "common/header.php";?>
  <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                         


   <div class="clearfix">
  <span class="float-start">Add Category</span>
  <span> <a href="view-category.php" <button type="button" class="btn btn-primary float-end mb-4"> Category List</button></a></span>
</div>
 
<form method="POST" enctype="multipart/form-data">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="name" value="<?php echo $name;?>">
                                <label for="floatingInput"> Name </label>
                            </div>
                            
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;" name="description"><?php echo $description;?></textarea>
                                <label for="floatingTextarea"> description</label>
                            </div>
                              <div class="clearfix">
  
  <span> <button type="submit" class="btn btn-primary float-end mt-3"> Save</button></a></span>
</div>


</form>

<?php

            if (isset($_POST['save'])) {
              $name = $_POST['name'];


              $description = $_POST['description'];

           $sql= mysqli_query($conn, "UPDATE `category` SET
        
         `name`='$name',
         
         `description`='$description'
          WHERE `id` = '$id'");


              if ($sql) {
                echo "<script>alert('Category added successfully');location.href='view-category.php';</script>";
              } else {
                echo "<script>alert('error');location.href='view-category.php';</script>";
              }
            }
            ?>




                        </div>


                             
              
                    </div>


               

      </div>



                    </div>  

<?php include "common/footer.php";?>