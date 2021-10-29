<?php
include('sidebar.php');
include('search.php');
?>
    <main>
        <a href="" class="btn btn-add"><i class="fas fa-plus"></i> Add homework</a>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Recent activity</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Subject</th> <!--userlevel = 2-->
                                    <th>Class</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Home level</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>61PM1</td>
                                    <td>Thiết kế giao diện</td>                                    
                                    <td>29, Oc 2021</td>                                    
                                    <td>29, Oc 2021</td>                                    
                                    <td>1</td>                                    
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
                                    <td>1</td>
                                    <td>61PM1</td>
                                    <td>Thiết kế giao diện</td>                                    
                                    <td>29, Oc 2021</td>                                    
                                    <td>29, Oc 2021</td>                                    
                                    <td>1</td>                                    
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
                                    <td>1</td>
                                    <td>61PM1</td>
                                    <td>Thiết kế giao diện</td>                                    
                                    <td>29, Oc 2021</td>                                    
                                    <td>29, Oc 2021</td>                                    
                                    <td>1</td>                                    
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