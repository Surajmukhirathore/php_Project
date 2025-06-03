<?php include "common/header.php"; ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">


                <div class="clearfix">
                    <span class="float-start"> Member Attendance</span>

                </div>



                <form method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <label for="group_id">Group</label>
                        <div class="form-floating mb-3 col-md-5">

                            <select class="form-control" id="group_id" name="m_group">
                                <option selected disabled>Open this select group</option>
                                <?php
                                $menu_sql = mysqli_query($conn, "SELECT * FROM `group`");
                                while ($menu_row = mysqli_fetch_assoc($menu_sql)) {
                                ?>
                                    <option value="<?php echo $menu_row['id']; ?>"> <?php echo $menu_row['name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>

                        <div class="form-floating mb-3 col-md-5">

                             <input type="submit" name="save" class="btn btn-info float-right p-3"  value="Take/View Attendance">


                        </div>



                    </div>









                </form>





            </div>
        </div>
         <?php
    if (isset($_POST['save'])) {
    ?>

        <div class="clearfix">
  <span class="float-start"> Member List</span>
 
</div>
<div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Member Photo</th>
                                        <th scope="col">Member Name</th>
                                      
                                         <th scope="col">Action</th>
                                    </tr>
                                </thead>

 <?php
            $m_group = $_POST['m_group'];
            $query = "select * from `member` WHERE m_group='{$m_group}'";
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
                      <td class="text-center"><a href="m_attendance.php?id=<?php echo $member_id?>" class="save-att btn btn-dark mt-2">Attendance</a></td>
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


    </div>
</div>

<?php
    } else {
    }
?>

<?php include "common/footer.php"; ?>