<?php
    include('header.php');
    if(isset($_GET['id_subject'])){
        $id = $_GET['id_subject'];
    }
?>
    <main>
        <a href="add_homework.php?id_subject=<?php echo $id;?>" class="btn btn-add"><i class="fas fa-plus"></i> Add homework</a>
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
                                    <th>Name</th>
                                    <th>Excercise</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Level</th>
                                    <th>Back</th>
                                </tr>
                            </thead>
                            <tbody><tbody>
                                <!-- CODE PHP -->
                                <?php
                                    $sql = "SELECT * FROM tb_homework WHERE id_subject = '$id'";
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
                                                $name = $row['name_homework'];
                                                $excer= $row['excercise'];
                                                $sdate = $row['start_date'];
                                                $edate = $row['end_date'];
                                                $home_level = $row['home_level'];
                                ?>
                                                <tr>
                                                    <td><?php echo $id_home; ?></td>                                
                                                    <td><?php echo $id_sub; ?></td>                                                                
                                                    <td><?php echo $name ?></td>                                 
                                                    <td>
                                                        <a href="dowload_excercise.php?file=<?php echo $row['excercise'] ?>">
                                                            <?php echo $excer;?>
                                                        </a>
                                                    </td>                                 
                                                    <td><?php echo $sdate; ?></td>                                 
                                                    <td><?php echo $edate; ?></td>                                                                                                                              
                                                    <td class="status"><?php echo $home_level; ?></td>                                                                                                                              
                                                    <td>
                                                        <a href="contact.php" class="delete-icon">
                                                            <i class="fas fa-arrow-right"></i>
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