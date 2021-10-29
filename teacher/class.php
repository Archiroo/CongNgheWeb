<?php
include('sidebar.php');
include('search.php');
?>
    <main>
        <a href="" class="btn btn-add"><i class="fas fa-plus"></i> Add class</a>
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
                                <tr>
                                    <td>61PM1</td>
                                    <td>61 Công nghệ phần mềm 1</td>                                 
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
                                    <td>61PM2</td>
                                    <td>61 Hệ thống thông tin</td>                                 
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
                                    <td>61CNTT</td>
                                    <td>61 Công nghệ thông tin</td>                                 
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