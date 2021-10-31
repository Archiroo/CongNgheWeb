<?php
    include('config.php')
?>
<?php
if (isset($_GET['id_homework']) && isset($_GET['id_subject']) && isset($_GET['id_student'])) {
    $id_homework = $_GET['id_homework'];
    $id_subject = $_GET['id_subject'];
    $id_student = $_GET['id_student'];
}
?>
<?php
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "document/".$fileName;
    $sql3="DELETE from tb_mark where id_homework='$id_homework'
    and id_student = '$id_student'";
    $res3 = mysqli_query($conn, $sql3);
    if($res3==true){
        header('http://localhost/CongNgheWeb/student/mark.php?id_homework='.$id_homework.'&id_subject='.$id_subject.'&id_student='.$id_student.'');
    }
?>