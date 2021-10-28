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
                                    <th>ID Teacher</th> <!--userlevel = 2-->
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Công nghệ web</td>
                                    <td>Thiết kế website</td>                                    
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
                                    <td>2</td>
                                    <td>Hệ quản trị cơ sở dữ liệu</td>
                                    <td></td>                                    
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
                                    <td>3</td>
                                    <td>Hệ điều hành</td>
                                    <td>Thông tin máy tính</td>                                    
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