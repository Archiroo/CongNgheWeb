<?php
include('sidebar.php');
include('search.php');
?>
    <main>
        <a href="" class="btn btn-add"><i class="fas fa-user-plus"></i> Add student</a>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Class</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>61PM1</td>
                                    <td>Nguyễn Văn Tân</td>
                                    <td>Nam</td>
                                    <td></td>
                                    <td>nvtan@gmail.com</td>                                
                                    <td>012 2345678</td>
                                    <td>
                                        <a href="#" class="update-icon">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="delete-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>61PM1</td>
                                    <td>Nguyễn Văn Tân</td>
                                    <td>Nam</td>
                                    <td></td>
                                    <td>nvtan@gmail.com</td>                                
                                    <td>012 2345678</td>
                                    <td>
                                        <a href="#" class="update-icon">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="delete-icon">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>61PM1</td>
                                    <td>Nguyễn Văn Tân</td>
                                    <td>Nam</td>
                                    <td></td>
                                    <td>nvtan@gmail.com</td>                                
                                    <td>012 2345678</td>
                                    <td>
                                        <a href="#" class="update-icon">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="delete-icon">
                                            <i class="fas fa-trash-alt"></i>
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