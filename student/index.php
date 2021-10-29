<?php
include('config.php');
include('dashboard.php');
?>
<div class="main-content">
    <header>
        <div class="search-wrapper">
            <span class="ti-search"></span>
            <input type="text" placeholder="Search">
        </div>
        <div class="social-icons">
            <div>
                <img src="../image/user.png" alt="" width="100px">
            </div>
        </div>
    </header>
    <main>
        <h2>Overview</h2>
        <?php
        $sql = "SELECT * from tb_subject";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name_sub'];
        ?>
                <div class="dash-cards">
                    <div class="card-subject">
                        <div class="card-body">
                            <img src="../image/cnweb.jpg" alt="">
                            <h3><?php echo $name ?></h3>
                        </div>
                        <div class="card-footer">
                            <a href="">View all</a>
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