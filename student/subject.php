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
    <h1 class="subject-name"><?php echo $name_subject;?></h1>
    
    <?php
        $sql2 
    ?>
    <div class="homework-name">
        <div class="body">
            <a href="">
                <h2 id="title">title</h2>
            </a>
            <div class="date">
                <h3>Opened:</h3>
                <h3>date</h3>
            </div>
            <div class="date">
                <h3>Due:</h3>
                <h3>date</h3>
            </div>
        </div>
    </div>
    <div class="homework-name">
        <div class="body">
            <a href="">
                <h2 id="title">title</h2>
            </a>
            <div class="date">
                <h3>Opened:</h3>
                <h3>date</h3>
            </div>
            <div class="date">
                <h3>Due:</h3>
                <h3>date</h3>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>