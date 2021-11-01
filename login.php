<?php
    $con=mysqli_connect('localhost', 'root', '', 'db_congheweb');
    if(!$con){
        die('không thể kết nối');
    }

    if(isset($_POST['login']))
    {
        $user = $_POST['user_name'];
        $pass = $_POST['user_pass'];
        $sql = "SELECT * FROM tb_user WHERE user_name='$user' and user_pass = '$pass'";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);
        if($count > 0)
        {
            $row = mysqli_fetch_assoc($res);
            $user_id = $row['user_id'];
            $user_level = $row['user_level'];
            if($user_level == true)
            {
                header("Location: teacher/index.php");
            }
            else
            {
                header('location: student/index.php?user_id='.$user_id);
            }
        }
        else{
            echo "Lỗi";
        }
    }
?>