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
            <div class="date">
                <h3>Opened:</h3>
                <h3>date</h3>
            </div>
            <div class="date">
                <h3>Due:</h3>
                <h3>date</h3>
            </div>
        </div>
        <div class="edit">
            <button><a href="">Add</a></button>
            <button><a href="">Update</a></button>
            <button><a href="">Delete</a></button>
        </div>
    </div>
    <div class="homework-name">
        <div class="body">
            <h2 id="title">title</h2>
            <div class="date">
                <h3>Opened:</h3>
                <h3>date</h3>
            </div>
            <div class="date">
                <h3>Due:</h3>
                <h3>date</h3>
            </div>
        </div>
        <div class="edit">
            <button><a href="">Add</a></button>
            <button><a href="">Update</a></button>
            <button><a href="">Delete</a></button>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>