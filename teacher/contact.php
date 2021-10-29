<?php
include('sidebar.php');
include('search.php');
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
                                    <th>Class</th> <!--userlevel = 2-->
                                    <th>Student</th>
                                    <th>Finish date</th>
                                    <th>Team</th>
                                    <th>Mark</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>61PM1</td>
                                    <td>Nguyễn Minh Đức</td>                          
                                    <td>29, Oc 2021</td>
                                    <td class="td-team">
                                        <div class="img-1">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>9</td>
                                    <td>
                                        <span class="badge success">Success</span>
                                    </td>                                                                                               
                                    <td>
                                        <a href="#">
                                            Sửa
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
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