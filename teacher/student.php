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
                                    <th>Gender</th>
                                    <th>Birthday</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Minh Đức</td>
                                    <td>Nam</td>
                                    <td>20 Sep, 2001</td>
                                    <td>096 5269082</td>                                
                                    <td>Ninh Bình</td>
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
                                <tr>
                                    <td>2</td>
                                    <td>Trịnh Hoàng Long</td>
                                    <td>Nam</td>
                                    <td>29 Oc, 2001</td>
                                    <td>096 1234567</td>                                
                                    <td>Hà Nội</td>
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
                                <tr>
                                    <td>3</td>
                                    <td>Hà Việt Dũng</td>
                                    <td>Nam</td>
                                    <td>10 Oct, 2001</td>
                                    <td>096 21424241</td>                                
                                    <td>Hà Tĩnh</td>
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