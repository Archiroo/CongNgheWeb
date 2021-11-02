<?php
    include('header.php');
?>
    <main>
        <h2 class="dash-title">Overiew</h2>
        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-user-graduate"></span>
                    <div>
                        <?php
                            $sql = "SELECT * FROM tb_student";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                        ?>
                        <h5>Student</h5>
                        <h4><?php echo $count; ?></h4>
                        <a href="student.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-book-open"></span>
                    <div>
                        <?php
                            $sql1 = "SELECT * FROM tb_subject";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                        ?>
                        <h5>Subject</h5>
                        <h4><?php echo $count1; ?></h4>
                        <a href="subject.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-user-tie"></span>
                    <div>
                        <h5>Homework</h5>
                        <?php
                            $sql2 = "SELECT * FROM tb_homework where home_level=0";
                            $res2 = mysqli_query($conn, $sql2);
                            $count2 = mysqli_num_rows($res2);
                        ?>
                        <h4><?php echo $count2;?></h4>
                        <a href="homework.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-folder"></span>
                    <div>
                        <?php
                            $sql3 = "SELECT * FROM tb_homework where home_level=1";
                            $res3 = mysqli_query($conn, $sql2);
                            $count3 = mysqli_num_rows($res3);
                        ?>
                        <h5>Projects</h5>
                        <h4><?php echo $count3;?></h4>
                        <a href="project.php">
                            View all
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Team</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>App Development</td>
                                    <td>15 Aug, 2020</td>
                                    <td>22 Aug, 2020</td>
                                    <td class="td-team">
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge success">Success</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>App Development</td>
                                    <td>15 Aug, 2020</td>
                                    <td>22 Aug, 2020</td>
                                    <td class="td-team">
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge success">Success</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Logo Design</td>
                                    <td>15 Aug, 2020</td>
                                    <td>22 Aug, 2020</td>
                                    <td class="td-team">
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge warning">Processing</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

<?php
    include('footer.php');
?>