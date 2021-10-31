<?php
    include('connect_database/connect.php');
    if(isset($_GET['id_student'])){
        $id = $_GET['id_student'];
    }
    $sql = "DELETE From tb_student Where id_student = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res==true){
        // Nếu dúng thì xóa 
        header("Location:student.php");
    }
    else{
        // Không xóa được thì chịu
        header("Location:student.php");
    }
?>