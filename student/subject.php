<?php
include('dashboard.php');
?>
<div class="main-subject">
    <?php
    if (isset($_GET['id_subject'])) {
        $id = $_GET['id_subject'];
        $sql = "SELECT * FROM tb_subject WHERE id_subject=$id";
        $res = mysqli_query($conn, $sql);
    }
    ?>

    <h1 class="subject-name">subject name</h1>
    <div class="homework-name">
        <div class="body">
            <h2 id="title">title</h2>
            <div>
                <h3>Opened:</h3>
                <h3>date</h3>
            </div>
            <div>
                <h3>Due:</h3>
                <h3>date</h3>
            </div>
        </div>
        <a href="">Nộp bài</a>
    </div>
    <div class="homework-name">
        <div class="body">
            <h2 id="title">title</h2>
            <div>
                <h3>Opened: </h3>
                <h3>date</h3>
            </div>
            <div>
                <h3>Due: </h3>
                <h3>date</h3>
            </div>
        </div>
        <a href="">Nộp bài</a>
    </div>
</div>
<?php
include('footer.php');
?>