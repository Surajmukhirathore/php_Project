<?php include "common/header.php";?>


 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

     <div class="clearfix">
  <span class="float-start">Specialization List</span>
  <span> <a href="add-specialization.php" <button type="button" class="btn btn-primary float-end">Add New Specialization</button></a></span>
</div>
<div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Specialization Name</th>
                                        <th scope="col">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>


  <?php

 $sql = mysqli_query($conn, "SELECT * FROM `specialization` order by id desc");
                   while ($row = mysqli_fetch_assoc($sql)) {

                    
                  
                       echo "<tr>
                               <td>{$row['id']}</td>

                             <td>{$row['name']}</td>
                            
                              
                              
                               <td><a class='btn btn-sm btn-info' href='edit-specialization.php?id={$row['id']}'><i class='fa fa-edit'></i></a> 
                   <a class='btn btn-sm btn-danger' href='delete-specialization.php?id={$row['id']}'><i class='fa fa-trash'></i></a></td>
                             </tr>";
                   }
                   ?>


                               </tbody>
                            </table>
                        </div>
                    </div>
                
                    </div>
                </div>



<?php include "common/footer.php";?>