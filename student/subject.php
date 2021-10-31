<?php
include('dashboard.php');
?>
<div class="main-subject">
    <?php
    if (isset($_GET['id_subject'])) {
        $id_subject = $_GET['id_subject'];
        $sql = "SELECT * from tb_subject WHERE id_subject = '$id_subject'";
        $res = mysqli_query($conn, $sql);
        if ($res == TRUE) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);
                $name_subject = $row['name_subject'];
            }
        }
    }
    ?>
    <h1 class="subject-name"><?php echo $name_subject; ?></h1>

    <?php
    //bảng student
    $sql3="SELECT * from tb_student where user_id = 2";
    $res3=mysqli_query($conn,$sql3);
    if ($res3 == TRUE) {
        $count1 = mysqli_num_rows($res3);
        if ($count1 > 0) {
            $row3 = mysqli_fetch_assoc($res3);
            $id_student = $row3['id_student'];
        }
    }
    // bảng homework
    $sql2 = "SELECT * from tb_homework where id_subject = '$id_subject'";
    $res2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($res2) > 0) {
        while ($row2 = mysqli_fetch_assoc($res2)) {
            $id_homework = $row2['id_homework'];
            $name_homework = $row2['name_homework'];
            $start_date = $row2['start_date'];
            $end_date = $row2['end_date'];
    ?>
            <div class="homework-name">
                <div class="body">
                    <a href="<?php echo SITEURL;?>/mark.php?id_homework=<?php echo $id_homework;?>&id_subject=<?php echo $id_subject;?>&id_student=<?php echo $id_student;?>">
                        <h2 id="title"><?php echo $name_homework?></h2>
                    </a>
                    <div class="date">
                        <h3>Opened:</h3>
                        <h3><?php echo $start_date;?></h3>
                    </div>
                    <div class="date">
                        <h3>Due:</h3>
                        <h3><?php echo $end_date;?></h3>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>
<?php
include('footer.php');
?>