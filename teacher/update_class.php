<?php
    include('connect_database/connect.php');
    include('sidebar.php');
?>
    <main>
        <!-- CODE PHP -->
        <?php
            if(isset($_GET['id_class']))
            {
                $id_class = $_GET['id_class'];
                $sql1 = "SELECT * FROM tb_class WHERE id_class = '$id_class'";
                $res1 = mysqli_query($conn, $sql1);
                $count = mysqli_num_rows($res1);
                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res1);
                    $name_class = $row['name_class'];
                }
            }
        ?>
        <form action="" method="POST" class="register">
            <div class="form-group first-span">
                <span>ID Class</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_class;?>">
            </div>
            <div class="form-group">
                <span>Name Class</span>
                <input type="text" class="form-control" name="class_name" value="<?php echo $name_class;?>">
            </div>
            <input type="submit" name="submit" value="Update class" class="btn btn-add btn-add-connect">
            <a href="class.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>      
<?php
    include('footer.php');
?>
<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['class_name'];
        if($name != "")
        {
            $sql2 = "UPDATE tb_class SET name_class = '$name' WHERE id_class= '$id_class'";
            $res2 = mysqli_query($conn, $sql2);
            if($res2 == TRUE)
            {
                header("Location:class.php");
            }
            else
            {
                header("Location:update_class.php");
            }
        }
    }
?>