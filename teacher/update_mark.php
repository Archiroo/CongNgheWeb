<?php
    include('header.php');
?>
    <main>
        <!-- CODE PHP -->
        <?php
            if(isset($_GET['id_home']))
            {
                $id_home = $_GET['id_home'];
                $id_std = $_GET['id_student'];
            }
            $sql = "SELECT tb_homework.id_homework, tb_student.id_student, 
                    name_student,id_subject, submit_homework, end_date, finish_date, mark, status
                    FROM tb_homework, tb_mark, tb_student
                    WHERE tb_homework.id_homework = tb_mark.id_homework 
                    AND tb_student.id_student = tb_mark.id_student and home_level = 0 
                    AND tb_homework.id_homework = '$id_home' and tb_student.id_student = '$id_std'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);
                $id_sub = $row['id_subject'];
                $name_std = $row['name_student'];
                $excer = $row['submit_homework'];
                $end_date = $row['end_date'];
                $finish = $row['finish_date'];
                $mark = $row['mark'];
                $status = $row['status'];
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
                    $sql3 = "UPDATE tb_mark SET status = 1 WHERE id_homework ='$id_home' AND id_student = '$id_std'";
                    $res3 = mysqli_query($conn, $sql3);
                }
                
            }
        ?>
            <div class="form-group first-span">
                <span>ID homework</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_home;?>">
            </div>
            <div class="form-group">
                <span>Name</span>
                <input type="text" class="form-control read" readonly value="<?php echo $name_std; ?>">
            </div>
            <div class="form-group">
                <span>Subject</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_sub; ?>">
            </div>
            <div class="form-group first-span">
                <span>End date</span>
                <input type="datetime-local" class="form-control read" readonly value="<?php echo $date = date("Y-m-d\TH:i:s", strtotime($end_date)); ?>">
            </div>
            <div class="form-group first-span">
                <span>Finish date</span>
                <input type="datetime-local" class="form-control read" readonly value="<?php echo $date = date("Y-m-d\TH:i:s", strtotime($finish)); ?>">
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