<?php
    include('connect_database/connect.php');
    include('header.php');
?>
    <main>
    <form action="" method="POST" class="register">
        <?php
            // CODE PHP
            if(isset($_POST['submit'])){
                $id_sub = $_POST['subject'];
                $id_class = $_POST['class'];
                $name_home = $_POST['name_homework'];
                $endate= $_POST['end_date'];
                $level = $_POST['level'];

                $sql3 = "INSERT INTO tb_homework(id_subject, id_class, name_homework, end_date, home_level) 
                VALUES ('$id_sub', '$id_class', '$name_home','$endate', '$level')";
                $res3 = mysqli_query($conn, $sql3);
                if($res3 > 0)
                {
                    header("Location:homework.php");
                }
                else
                {
                    header("Location:add_homework.php");   
                }
            }
        ?>
            <div class="form-group first-span">
                <span>ID subject</span>
                <select name="subject" style="display:block;">
                    <?php
                    $sql = "SELECT * FROM tb_subject";
                    $res = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($res)) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<option value="' . $row['id_subject'] . '">' . $row['id_subject'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>           
            <div class="form-group first-span">
                <span>ID class</span>
                <select name="class" style="display:block;">
                    <?php
                    $sql1 = "SELECT * FROM tb_class";
                    $res2 = mysqli_query($conn, $sql1);

                    if (mysqli_num_rows($res2)) {
                        while ($row = mysqli_fetch_assoc($res2)) {
                            echo '<option value="' . $row['id_class'] . '">' . $row['id_class'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>           
            <div class="form-group">
                <span>Name</span>
                <input type="text" class="form-control" name="name_homework">
            </div>
            <div class="form-group">
                <span>End date</span>
                <input type="datetime-local" class="form-control" name="end_date">
            </div>
            <div class="form-group first-span">
                <span>Level homework</span>
                <select name="level" style="display:block;">
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>    
            <input type="submit" name="submit" value="Add homework" class="btn btn-add btn-add-connect">
            <a href="homework.php" class="btn btn-add btn-cancel">Cancel</a>            
        </form>    
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
