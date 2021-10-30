<?php
    include('sidebar.php');
    include('search.php');
?>
    <main>
        <form action="" method="POST" class="register">
            <div class="form-group first-span">
                <span>ID Class</span>
                <input type="text" class="form-control" name="class_id">
            </div>
            <div class="form-group">
                <span>Name Class</span>
                <input type="text" class="form-control" name="class_name">
            </div>
            <input type="submit" name="submit_add" value="Add class" class="btn btn-add btn-add-connect">
            <input type="submit" name="submit_cancel" value="Cancel" class="btn btn-add btn-add-connect">
        </form>      
<?php
    include('footer.php');
?>
<!-- CODE THÊM -->
<?php
    // btn add
    if(isset($_POST['submit_add'])){
        $id_class = $_POST['class_id'];
        $name_class = $_POST['class_name'];

        $sql = "INSERT INTO tb_class(id_class, name_class)
                VALUES('$id_class', '$name_class')";
        $result = mysqli_query($conn,$sql);
        if($res>0){
            header("Location:class.php");
        }
        else
        {
            header("Location:add_class.php");
        }
    }
?>