<?php
include('./dashboard.php')
?>
<?php
if (isset($_GET['id_homework']) && isset($_GET['id_subject'])) {
    $id_homework = $_GET['id_homework'];
    $id_subject = $_GET['id_subject'];
    $sql = "SELECT * from tb_homework WHERE id_homework = '$id_homework'
    and id_subject = '$id_subject'";
    $res = mysqli_query($conn, $sql);
    if ($res == TRUE) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            $row = mysqli_fetch_assoc($res);
            $name_homework = $row['name_homework'];
            $start_date = $row['start_date'];
            $end_date = $row['end_date'];
        }
    }
}
?>
<div class="main-mark">
    <h1><?php echo $name_homework?></h1>
    <div class="box1">
        <div class="date-mark">
            <h3>Opened:</h3>
            <h3 class="date"><?php echo $start_date;?></h3>
        </div>
        <div class="date-mark">
            <h3>Due:</h3>
            <h3 class="date"><?php echo $end_date;?></h3>
        </div>
    </div>
    <?php

    ?>
    <table class="table-mark">
        <tr>
            <th>Tên sinh viên</th>
            <td>Hồ Hồng Quân</td>
        </tr>
        <tr>
            <th>Bài nộp</th>
            <td>Hồ Hồng Quân</td>
        </tr>
        <tr>
            <th>Trạng thái nộp bài</th>
            <td>Hồ Hồng Quân</td>
        </tr>
        <tr>
            <th>Ngày nộp</th>
            <td>Hồ Hồng Quân</td>
        </tr>
        <tr>
            <th>Điểm</th>
            <td>Hồ Hồng Quân</td>
        </tr>
    </table>
    <button><a href="">Nộp bài</a></button>
    <button><a href="">Sửa bài</a></button>
    <button><a href="">Xóa bài</a></button>
</div>

<?php
include('./footer.php');
?>