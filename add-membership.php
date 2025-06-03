<?php include "common/header.php";?>



<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
               


                <div class="clearfix">
                    <span class="float-start">Add Membership</span>
                    <span> <a href="view-membershiplist.php" <button type="button"
                            class="btn btn-primary float-end mb-4"> Membership List</button></a></span>
                </div>


 

                <form method="POST" enctype="multipart/form-data">


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="m_name" id="floatingInput" placeholder="name@example.com"
                            name="membership-name">
                        <label for="floatingInput">Membership Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        
                        

<select class="form-control" id="category_id" name="m_category">
                                    <option selected disabled>Open this select Category</option>
                                    <?php
                                    $menu_sql = mysqli_query($conn, "SELECT * FROM category");
                                    while ($menu_row = mysqli_fetch_assoc($menu_sql)) {?>
                                  
                                    <option value="<?php echo  $menu_row['id']; ?>"> <?php echo  $menu_row['name']; ?></option>
                                   <?php }
                                    ?>
                                </select>
                <label for="floatingPassword">Membership Category</label>

                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="m_period" id="floatingPassword" placeholder="Password"
                            name="membership-period">
                        <label for="floatingPassword">Membership Period</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="m_amount" id="floatingPassword" placeholder="Password"
                            name="membership-amount">
                        <label for="floatingPassword">Membership Amount</label>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" name="description"
                             placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;"></textarea>
                        <label for="floatingTextarea">Membership description</label>
                    </div>


                    <div class="clearfix">

                        <button type="submit" name="submit" class="btn btn-primary float-end mt-3">Save</button>
                    </div>
                </form>



<?php

if(isset($_POST['submit'])){
    $m_name = $_POST['m_name'];
        $m_category = $_POST['m_category'];
       
         $m_period = $_POST['m_period'];
        $m_amount = $_POST['m_amount'];
         $m_description = $_POST['description'];
        
        $sql= mysqli_query ($conn, "INSERT INTO `membership`( `m_name`, `m_category`, `m_period`, `m_amount` , `m_description`)
         VALUES ('$m_name',' $m_category','$m_period','$m_amount' ,'$m_description')");

         
        if($sql){
            echo "<script>alert('Membership added successfully');location.href='view-membershiplist.php';</script>";
        }else{
            echo "<script>alert('error');location.href='view-membershiplist.php';</script>";
        }
 

}
?>





            </div>
        </div>

    </div>
</div>


<?php include "common/footer.php";?>