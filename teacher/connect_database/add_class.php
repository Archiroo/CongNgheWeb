<?php
    include('sidebar_database.php');
    include('search_database.php');
?>
    <main>
        <form action="" method="POST" class="register">
            <div class="form-group first-span">
                <span>ID Class</span>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <span>Name Class</span>
                <input type="text" class="form-control" name="position">
            </div>
            <input type="submit" name="submit_add" value="Add class" class="btn btn-add btn-add-connect">
            <input type="submit" name="submit_cancel" value="Cancel" class="btn btn-add btn-add-connect">
        </form>      
<?php
    include('footer_database.php');
?>