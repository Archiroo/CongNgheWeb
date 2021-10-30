<?php
    include('sidebar.php');
?>
    <main>
        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <div class="form-group first-span">
                <span>Class</span>
                <select name="class" style="display:block;">
                    <!-- Lấy dữ liệu từ bảng office -->
                    <?php
                    $sql = "SELECT * FROM tb_class";
                    $res = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($res)) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<option value="' . $row['id_class'] . '">' . $row['id_class'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <span>User ID</span>
                <select name="user" style="display:block;">
                    <!-- Lấy dữ liệu từ bảng office -->
                    <?php
                    $sql1 = "SELECT * FROM tb_user";
                    $res1 = mysqli_query($conn, $sql1);

                    if (mysqli_num_rows($res1)) {
                        while ($row1 = mysqli_fetch_assoc($res1)) {
                            echo '<option value="' . $row1['user_id'] . '">' . $row1['user_id'] . '</option>';
                        }
                    }
                    ?>
                </select>
                
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
            <input type="submit" name="submit" value="Add student" class="btn btn-add btn-add-connect">
            <a href="student.php" class="btn btn-add btn-cancel">Cancel</a>
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
        $class = $_POST['class'];
        $user_id = $_POST['user'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        else{
            $gender = "0";
        }
        if(isset($_FILES['image']['name']))
        {
            $image_name = $_FILES['image']['name'];
            if($image_name!="")
            {
                $source_path = $_FILES['image']['tmp_name'];

                $dess_path = "../image".$image_name;

                $upload = move_uploaded_file($source_path, $dess_path);
                if($upload== FALSE)
                {
                    die();
                }
            }
        }
        else
        {
            $image_name = "user_default.jpg";
        }
         
        $sql2 = "INSERT INTO tb_student(id_class, user_id, name_student, gender, image_student, phone) 
        VALUES ('$class', '$user_id','$name', '$gender', '$image_name', '$phone')";
        $res2 = mysqli_query($conn, $sql2);
        if($res2 > 0)
        {
            header("Location:class.php");
        }
        else
        {
            header("Location:add_student.php");   
        }
    }
?>