<?php
    include('connect_database/connect.php');
    if(isset($_GET['id_home'])){
        $id = $_GET['id_home'];
        $id_std = $_GET['id_student'];
    }
    $sql = "UPDATE tb_mark SET mark = 0 WHERE id_homework ='$id' AND id_student = '$id_std'";
    $res = mysqli_query($conn, $sql);
    if($res==true){
        // Nếu dúng thì xóa 
        header("Location:mark.php");
    }
    else{
        // Không xóa được thì chịu
        header("Location:mark.php");
    }
?>