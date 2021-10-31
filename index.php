<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Education website</title>
</head>

<body>
    <!-- CSS cùng với sinh viên -->
    <div class="home">
        <h1>Education Support</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum neque aliquid similique error velit placeat vitae accusantium est nam magnam?</p>
        <a href="#" id="login-btn">
            <button class="btn btn-index">Get Started</button>
        </a>
    </div>
    <div class="login-form-container login">
        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="" method="POST">
            <h3>sign in</h3>
            <span>User name</span>
            <input type="text" name="username" class="box" placeholder="Enter your username" id="">
            <span>Pass word</span>
            <input type="password" name="userpass" class="box" placeholder="Enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" class="remember-me">
                <label for="remember-me">Remember-me</label>
            </div>
            <input type="submit" value="Sign in" class="btn btn-sign-in">
            <p>For get password ? <a href="#">Click Here</a></p>
            <p>Don't have an account ? <a href="sign-up.php">Create One</a></p>
        </form>
    </div>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- BOOSTRAP -->
    <!-- SCRIPT -->
    <script src="js/myscript.js"></script>
</body>

</html>
<?php
    include('teacher/connect_database/connect.php');
    if(isset($_POST['submit']))
    {
        $user = $_POST['username'];
        $pass = $_POST['userpass'];
        $sql = "SELECT * FROM tb_user WHERE user_name='$user'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            $row = mysqli_fetch_assoc($res);
            $user_level = $row['user_level'];
            if($user_level == 1)
            {
                header("Location:");
            }
            else
            {
                echo "Sinh viên";
            }
        }
        else{
            echo "Lỗi";
        }
    }

?>