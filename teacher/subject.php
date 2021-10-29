<?php
include('sidebar.php');
include('search.php');
?>
    <main>
        <a href="" class="btn btn-add"><i class="fas fa-plus"></i> Add subject</a>
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
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Công nghệ web</td>
                                    <td>Thiết kế website</td>                                    
                                    <td>Thiết kế website abc</td>                                    
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
                                    <td>Công nghệ web</td>
                                    <td>Thiết kế website</td>                                    
                                    <td>Thiết kế website abc</td>                                    
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
                                    <td>Công nghệ web</td>
                                    <td>Thiết kế website</td>                                    
                                    <td>Thiết kế website abc</td>                                    
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