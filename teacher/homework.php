<?php
include('sidebar.php');
include('search.php');
?>
    <main>
        <a href="connect_database/add_homework.php" class="btn btn-add"><i class="fas fa-plus"></i> Add homework</a>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Class</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Level</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody><tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_homework";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_home = $row['id_homework'];
                                                $id_sub = $row['id_subject'];
                                                $id_class = $row['id_class'];
                                                $name = $row['name_homework'];
                                                $sdate = $row['start_date'];
                                                $edate = $row['end_date'];
                                                $home_level = $row['home_level'];
                                ?>
                                                <tr>
                                                    <td><?php echo $id_home; ?></td>                                
                                                    <td><?php echo $id_sub; ?></td>                                 
                                                    <td><?php echo $id_class; ?></td>                                 
                                                    <td><?php echo $name ?></td>                                 
                                                    <td><?php echo $sdate; ?></td>                                 
                                                    <td><?php echo $edate; ?></td>                                                                 
                                                    <td class="status"><?php echo $home_level; ?></td>                                                                 
                                                    <td>
                                                        <a href="connect_database/update_homework.php?id_home=<?php echo $id_home ?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="connect_database/delete_homework.php?id_home=<?php echo $id_home ?>" class="update-icon">
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