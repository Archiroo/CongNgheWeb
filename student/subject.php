<?php
include('config.php');
include('dashboard.php');
?>
<div class="main-subject">
    <?php
    if (isset($_GET['id_subject'])) {
        $id = $_GET['id_subject'];
        $sql = "SELECT * from tb_subject where id_subject=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name_subject'];
    }
    ?>
    <h1><?php echo $name; ?></h1>
    <div class="homework-name">
        <div class="body">
            <h1>title</h1>
            <h2>Opened:</h2>
            <h2>Due:</h2>
        </div>
        <a href="">Nộp bài</a>
    </div>
    <div class="homework-name">
        <div class="body">
            <h1>title</h1>
            <h2>Opened:</h2>
            <h2>Due:</h2>
        </div>
        <a href="">Nộp bài</a>
    </div>
</div>
<?php
include('footer.php');
?>