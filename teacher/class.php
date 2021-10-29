<?php
    include('sidebar.php');
    include('search.php');
?>
    <main>
        <a href="connect_database/add_class.php" class="btn btn-add"><i class="fas fa-plus"></i> Add class</a>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_class";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE)
                                    {
                                        $count = mysqli_num_rows($res);
                                        if($count>0)
                                        {
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                $id_class = $row['id_class'];
                                                $name_class = $row['name_class'];
                                ?>
                                                <tr>
                                                    <td><?php echo $id_class; ?></td>
                                                    <td><?php echo $name_class; ?></td>                                 
                                                    <td>
                                                        <a href="connect_database/update_class.php?id_class=<?php echo $id_class; ?>" class="update-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="connect_database/delete_class.php?id_class=<?php echo $id_class; ?>" class="delete-icon">
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