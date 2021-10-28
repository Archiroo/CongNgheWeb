<?php
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
        <div class="dash-cards">
            <div class="card-subject">
                <div class="card-body">
                    <img src="../image/cnweb.jpg" alt="">
                    <h3>Công nghệ web</h3>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
            <div class="card-subject">
                <div class="card-body">
                    <img src="../image/cnweb.jpg" alt="">
                    <h3>Hệ quản trị CSDL</h3>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
            <div class="card-subject">
                <div class="card-body">
                    <img src="../image/cnweb.jpg" alt="">
                    <h3>Trí tuệ nhân tạo</h3>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
        </div>
    </main>
</div>
<?php
include('footer.php');
?>