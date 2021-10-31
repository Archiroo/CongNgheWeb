<?php
    include('connect_database/connect.php');
    include('header.php');
?>
<!-- CODE THÊM -->
    <main>
        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <?php
                if(isset($_POST['submit'])){
                    $sub_id = $_POST['id_sub'];
                    $name_sub = $_POST['name_sub'];
                    if(isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name'];
                        if($image_name!="")
                        {
                            $source_path = $_FILES['image']['tmp_name'];

                            $dess_path = "../image/image_database/".$image_name;

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
                    $des_sub = $_POST['des_sub'];
                    $sql = "INSERT INTO tb_subject(id_subject, name_subject, desription, img_subject)
                            VALUES ('$sub_id', '$name_sub', '$des_sub', '$image_name')";
                    $res = mysqli_query($conn, $sql);
                    if($res==TRUE)
                    {
                        header("Location:subject.php");
                    }
                    else
                    {
                        header("Location:add_subject.php");
                    }
            
            
                }
            ?>
            <div class="form-group first-span">
                <span>ID subject</span>
                <input type="text" class="form-control" name="id_sub">
            </div>
            <div class="form-group">
                <span>Name subject</span>
                <input type="text" class="form-control" name="name_sub">
            </div>
            <div class="form-group">
                <span>Description</span>
                <input type="text" class="form-control" name="des_sub">
            </div>
            <div class="gender">
                <span>Image subject</span>
                <br>
                <input type="file" name="image" class="file">
            </div>
            <input type="submit" name="submit" value="Add class" class="btn btn-add btn-add-connect">
            <a href="subject.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>      
<?php
    include('footer.php');
?>