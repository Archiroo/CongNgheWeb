<?php
    include('connect_database/connect.php');
    include('sidebar.php');
?>
    <main>
        <!-- CODE PHP -->
        <?php
            if(isset($_GET['id_home']))
            {
                $id_home = $_GET['id_home'];
                $id_std = $_GET['id_student'];
                $sql1 = "SELECT * FROM tb_mark WHERE id_homework = '$id_home' AND id_student = '$id_std'";
                $res1 = mysqli_query($conn, $sql1);
                $count = mysqli_num_rows($res1);
                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res1);
                    $finish_date = $row['finish_date'];
                    $mark = $row['mark'];
                }
            }
        ?>
        <form action="" method="POST" class="register">
        <?php
            if(isset($_POST['submit']))
            {
                $mark1 = $_POST['mark'];
                $sql2 = "UPDATE tb_mark SET mark = '$mark1' WHERE id_homework ='$id_home' AND id_student = '$id_std'";
                $res2 = mysqli_query($conn, $sql2);
                if($res2 == TRUE)
                {
                    header("Location:mark.php");
                    $sql3 = "UPDATE tb_mark SET mark_status = 1 WHERE id_homework ='$id_home' AND id_student = '$id_std'";
                    $res3 = mysqli_query($conn, $sql3);
                }
                
            }
        ?>
            <div class="form-group first-span">
                <span>ID homework</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_home;?>">
            </div>
            <div class="form-group">
                <span>ID student</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_std; ?>">
            </div>
            <div class="form-group first-span">
                <span>Finish date</span>
                <input type="datetime-local" class="form-control read" readonly value="<?php echo $date = date("Y-m-d\TH:i:s", strtotime($finish_date)); ?>">
            </div>
            <div class="form-group first-span">
                <span>Mark</span>
                <input type="text" class="form-control read" name="mark" value="<?php echo $mark;?>">
            </div>
            <input type="submit" name="submit" value="Update class" class="btn btn-add btn-add-connect">
            <a href="mark.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>
<?php
    include('footer.php');
?>