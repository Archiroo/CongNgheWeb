<?php
    include('connect_database/connect.php');
    if(isset($_GET['id_class'])){
        $id = $_GET['id_class'];
    }
    $sql = "DELETE From tb_class Where id_class = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res==true){
        // Nếu dúng thì xóa 
        header("Location:class.php");
    }
    else{
        // Không xóa được thì chịu
        header("Location:class.php");
    }
?>