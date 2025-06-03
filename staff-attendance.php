
<?php include "common/header.php";?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">

 <span class="float-start">Staff Member Attendance</span>
                 <div class="clearfix">
  
 
</div>
<div class="col-sm-12">
    <span class="float-start mx-4">Staff Member List</span>
                        <div class="bg-secondary rounded h-100 p-4">
                            
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col"> Photo</th></th>
                                        <th scope="col"> Staff Member Name</th>
                                      
                                         <th scope="col">Action</th>
                                    </tr>
                                </thead>

 <?php
         
            $query = "select * from `staff_member`";
            $fire = mysqli_query($conn, $query);
            if (mysqli_num_rows($fire) > 0) {
              $i=0;
              while ($row = mysqli_fetch_assoc($fire)) {
                $member_id = $row['id'];
                $member_img = $row['photo'];
                $member_fname = $row['f_name'];
                $member_lname = $row['l_name'];
                $i++;

            ?>
                <tbody>
                  <tr>
                      <td class="text-center">
                       <?php echo $i; ?>
                      </td>
          
                      <td class="text-center"><img src="<?php echo $member_img; ?>" height="120px" width="130px"></td>
                      <td class="text-center"><?php echo $member_fname . ' ' . $member_lname; ?></td>
                      <td class="text-center"><a href="s-attendance?id=<?php echo $member_id?>" class="save-att btn btn-dark mt-2">Attendance</a></td>




                      
                    </form>


                  </tr>
                  
                </tbody>
            <?php
              }
            }
            ?>


                            
                              
                            </table>
                        </div>
                    </div>

<div class="clearfix">

            <span> <button type="submit" name="submit" class="btn btn-primary float-end mt-3"> Save</button></a></span>
          </div>
    </div>
</div>




<?php include "common/footer.php";?>








