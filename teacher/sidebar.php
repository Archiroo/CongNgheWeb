<?php
    include('connect_database/connect.php');
    include('header.php');
?>
<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">        
            <span class="fas fa-user-graduate"></span>
            <span>Education</span>
        </h3>
        <label for="sidebar-toggle" class="ti-menu-alt"></label>
        <!--nút 3 ghạch-->
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="index.php">
                    <span class="fas fa-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="class.php">
                    <span class="fas fa-house-user"></span>
                    <span>Class</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <span class="fas fa-user"></span>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="student.php">
                    <span class="fas fa-user-friends"></span>
                    <span>Student</span>
                </a>
            </li>
            <li>
                <a href="subject.php">
                    <span class="fas fa-folder"></span>
                    <span>Subject</span>
                </a>
            </li>
            <li>
                <a href="homework.php">
                    <span class="fas fa-paste"></span>
                    <span>Homework</span>
                </a>
            </li>
            <li>
                <a href="mark.php">
                    <span class="fas fa-poll"></span>
                    <span>Mark</span>
                </a>
            </li>
            <li>
                <a href="contact.php">
                    <span class="fas fa-comments"></span>
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="../sign-out.php">
                    <span class="fas fa-power-off"></span>
                    <span>Log out</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- SEARCH -->
<div class="main-content">
    <header>
        <div class="search-wrapper">
            <span class="ti-search"></span>
            <input type="text" placeholder="Search">
        </div>
        <div class="social-icons">
            <div>
                <img src="../image/user_1.jpg" alt="">
            </div>
        </div>
    </header>

