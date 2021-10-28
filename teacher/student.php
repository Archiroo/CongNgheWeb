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
                                    <th>Name</th>
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
    </div>

<?php
include('footer.php');
?>