<?php
    include('sidebar.php');
?>
    <main>
        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <div class="form-group first-span">
                <span>Class</span>
                <input type="text" class="form-control" name="class">
            </div>
            <div class="form-group">
                <span>User ID</span>
                <input type="text" class="form-control" name="user_id">
            </div>
            <div class="form-group">
                <span>Name</span>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <span>Phone</span>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="gender">
                <span>Gender</span>
                <br>
                <div>
                    <input type="radio" name = "gender" value="1"><span>Nam</span>
                    <input type="radio" name = "gender" value="0"><span>Nữ</span>
                </div>
            </div>
            <div class="gender">
                <span>Image</span>
                <br>
                <input type="file" name="image" class="file">
            </div>
            <input type="submit" name="submit" value="Add class" class="btn btn-add btn-add-connect">
            <a href="class.php" class="btn btn-add btn-cancel">Cancel</a>
            <div style="margin-bottom: 5rem;">

            </div>
        </form>      
<?php
    include('footer.php');
?>
<!-- CODE THÊM -->
<?php
    // CODE PHP
    if(isset($_POST['submit'])){
        $class_id = $_POST['class_id'];
        $class_name = $_POST['class_name'];
        if($class_id != "" && $class_name != "")
        {
            $sql = "INSERT INTO tb_class(id_class, name_class)
                    VALUES('$class_id', '$class_name')";
    
            $res = mysqli_query($conn, $sql);    
            if($res >0){
                header("Location:class.php");
            }
            else{
                header("Location:add_class.php");
            }
            mysqli_close($conn);
        }
        else{
            header("Location:add_class.php");
        }


    }
?>