<?php
    include('connect_database/connect.php');
    include('header.php');
?>
    <main>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID student</th> <!--userlevel = 2-->
                                    <th>Excercise</th>
                                    <th>Finish date</th>
                                    <th>Team</th>
                                    <th>Mark</th>
                                    <th>Mark status</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_mark";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_home = $row['id_homework'];
                                                $id_std = $row['id_student'];
                                                $excercise = $row['excercise'];
                                                $finish = $row['finish_date'];
                                                $team = $row['team'];
                                                $mark = $row['mark'];
                                                $status = $row['mark_status'];
                                ?>
                                                <tr>
                                                    <td class="status"><?php echo  $id_home;?></td>                                
                                                    <td class="status"><?php echo $id_std; ?></td>                                 
                                                    <td><?php echo $excercise; ?></td>                                 
                                                    <td><?php echo $finish ?></td>                                 
                                                    <td class="td-team">
                                                        <div class="img-1 img_alone">
                                                            <img src="../image/<?php echo $team?>" alt="">
                                                        </div>
                                                    </td>                                
                                                    <td class="status"><?php echo $mark; ?></td>                                                                                               
                                                    <td>
                                                        <?php
                                                            if($status==1)
                                                            {
                                                                ?>
                                                                <span class="badge success">Success</span>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <span class="badge warning">Processing</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>                                                                                                                                 
                                                    <td>
                                                        <a href="update_mark.php?id_home=<?php echo $id_home ?>&&id_student=<?php echo $id_std; ?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="delete_mark.php?id_home=<?php echo $id_home ?>&&id_student=<?php echo $id_std;?>" class="update-icon">
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