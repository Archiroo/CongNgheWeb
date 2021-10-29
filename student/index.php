<?php
include('config.php');
include('dashboard.php');
?>

<main>
    <h2>Overview</h2>
    <?php
    $sql = "SELECT * from tb_subject";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id_sub'];
            $name = $row['name_sub'];
            $img = $row['img_sub']
    ?>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <img src="../image/<?php echo $img?>" alt="">
                        <h3><?php echo $name ?></h3>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo SITEURL; ?>./subject.php?id_sub=<?php echo $id?>">View all</a>
                    </div>
                </div>
        <?php
        }
    }
        ?>
</main>
</div>
<?php
include('footer.php');
?>