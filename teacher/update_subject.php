<?php
    include('connect_database/connect.php');
    include('header.php');
?>
    <main>
        <?php
            if(isset($_GET['id_subject']))
            {
                $id_sub = $_GET['id_subject'];
                $sql = "SELECT * FROM tb_subject WHERE id_subject = '$id_sub'";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $name_sub = $row['name_subject'];
                    $des_sub = $row['desription'];
                    $image = $row['img_subject'];
                }
            }
        ?>
        <!-- CODE SỬA -->
        <?php
            if(isset($_POST['submit']))
            {
                $name1 = $_POST['name'];
                $des1 = $_POST['des'];
                $sql1 = "UPDATE tb_subject SET name_subject = '$name1', desription = '$des1'
                            WHERE id_subject = '$id_sub'";
                $res1 = mysqli_query($conn, $sql1);
                if($res1 == TRUE)
                {
                    header("Location:subject.php");
                }
                else
                {
                    header("Location:update_subject.php");
                }
            }
        ?>


        <form action="" method="POST" class="register">
            <div class="form-group first-span">
                <span>ID Subject</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_sub ?>">
            </div>
            <div class="form-group">
                <span>Name subject</span>
                <input type="text" class="form-control" name="name" value="<?php echo $name_sub;?>">
            </div>
            <div class="form-group">
                <span>Description</span>
                <input type="text" class="form-control" name="des" value="<?php echo $des_sub;?>">
            </div>
            <div class="gender">
                <span>Image</span>
                <br>
                <input type="file" name="image" class="file" value="<?php echo $image; ?>">
            </div>        
            <input type="submit" name="submit" value="Update student" class="btn btn-add btn-add-connect">
            <a href="subject.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>
<?php
    include('footer.php');
?>
