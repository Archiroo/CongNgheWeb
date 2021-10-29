<?php
include('sidebar.php');
include('search.php');
?>
    <main>
        <a href="connect_database/add_student.php" class="btn btn-add"><i class="fas fa-user-plus"></i> Add student</a>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Class</th>
                                    <th>User id</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th>Phone</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_student";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_student = $row['id_student'];
                                                $id_class = $row['id_class'];
                                                $user_id = $row['user_id'];
                                                $name_student = $row['name_student'];
                                                $gender = $row['gender'];
                                                $image = $row['image_student'];
                                                $phone = $row['phone'];
                                ?>
                                                <tr>
                                                    <td><?php echo $id_student;?></td>
                                                    <td><?php echo $id_class;?></td>
                                                    <td><?php echo $user_id; ?></td>
                                                    <td><?php echo $name_student; ?></td>
                                                    <td>
                                                        <?php 
                                                            if($gender == 1)
                                                            {
                                                                echo "Nam";
                                                            }
                                                            else
                                                            {
                                                                echo "Nữ";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td class="td-team">
                                                        <div class="img-1 img_alone">
                                                            <img src="../image/<?php echo $image?>" alt="">
                                                        </div>
                                                    </td>
                                                    <td><?php echo $phone;?></td>
                                                    <td>
                                                        <a href="connect_database/update_student.php?id_student=<?php echo $id_student;?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="connect_database/delete_student.php?id_student=<?php echo $id_student;?>" class="delete-icon">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                <?php
                                            }
                                        }
                                        else
                                        {

                                        }
                                    }
                                ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
include('footer.php');
?>