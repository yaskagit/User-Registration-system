<div class="card">
                <div class="card-header text-center">
                    <h3>users info</h3>
                </div>
                <div class="card-body">
                <table class="display table  table-striped table-responsive-md " id="users">
                        <thead class="bg-dark text-light">
                        <tr>
                            <th>Familyname</th>
                            <th>Firstname</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>DOB</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            require('config.php');
                            $query = mysqli_query($conn,"SELECT * FROM users");
                            while($fetchData  = mysqli_fetch_assoc($query)){
                            
                            ?>
                            <tr>
                                <td><?php echo $fetchData['Familyname']; ?></td>
                                <td><?php echo $fetchData['firstname']; ?></td>
                                <td><?php echo $fetchData['gender']; ?></td>
                                <td><?php echo $fetchData['phone']; ?></td>
                                <td><?php echo $fetchData['city']; ?></td>
                                <td><?php echo $fetchData['dob']; ?></td>
                                <td><a href="?user_id=<?php echo $fetchData['user_id']?>&page=updateform" class="btn btn-info">Update</button></td>
                                <td>
                                    <?php 
                                        if(isset($_SESSION['role']) and $_SESSION['role'] == 'Admin'){
                                            ?>
                                            <a href="includes/functions.php?user_id=<?php echo $fetchData['user_id']?>" class="btn btn-danger">Delete</a>
                                            <?php 

                                        }
                                        else{
                                            ?>
                                            <a hidden href="includes/functions.php?user_id=<?php echo $fetchData['user_id']?>" class="btn btn-danger">Delete</a>
                                            <?php 
                                        }
                                    ?>
                                </td>                          
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
               </div>
               

               