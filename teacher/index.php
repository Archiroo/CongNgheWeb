<?php
include('sidebar.php');
include('search.php');
?>
    <main>
        <h2 class="dash-title">Overiew</h2>
        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-user-graduate"></span>
                    <div>
                        <h5>Student</h5>
                        <h4>10</h4>
                        <a href="">View all</a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-book-open"></span>
                    <div>
                        <h5>Subject</h5>
                        <h4>5</h4>
                        <a href="">View all</a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-user-tie"></span>
                    <div>
                        <h5>Teacher</h5>
                        <h4>3</h4>
                        <a href="">View all</a>
                    </div>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="fas fa-folder"></span>
                    <div>
                        <h5>Projects</h5>
                        <h4>3</h4>
                        <a href="">View all</a>
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
                                        <div class="img-2">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-3">
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
                                        <div class="img-2">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-3">
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
                                        <div class="img-2">
                                            <img src="../image/user_1.jpg" alt="">
                                        </div>
                                        <div class="img-3">
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
    </main>

<?php
    include('footer.php');
?>