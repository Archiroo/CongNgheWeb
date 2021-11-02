<?php
include('dashboard.php')
?>

<?php
if (isset($_GET['id_subject']) && isset($_GET['id_student'])) {
    $id_subject = $_GET['id_subject'];
    $id_student = $_GET['id_student'];
}
?>
<div class="main-project">
    <div class="title">
        <h1>Đăng kí nhóm bài tập lớn</h1>
    </div>
    <form action="" method="POST">
    <div class="form-group">
        <label for="nameST2">Tên đề tài:</label>
        <input type="text" class="form-control" id="nameST2" placeholder="Enter name" name="name_project">
    </div>
    <div class="form-group">
        <label for="nameST1">Tên thành viên 1:</label>
        <input type="text" class="form-control" id="nameST1" placeholder="Enter name" name="nameST1">
    </div>

    <div class="form-group">
        <label for="nameST2">Tên thành viên 2:</label>
        <input type="text" class="form-control" id="nameST2" placeholder="Enter name" name="nameST2">
    </div>

    <div class="form-group">
        <label for="nameST3">Tên thành viên 3:</label>
        <input type="text" class="form-control" id="nameST3" placeholder="Enter name" name="nameST3">
    </div>
    <div class="form-group">
        <button type="submit" name="submit">Đăng ký</button>
        <button><a href="<?php echo SITEURL; ?>/subject.php?id_subject=<?php echo $id_subject ?>&id_student=<?php echo $id_student ?>">Quay lại</a></button>
    </div>
    </form>
</div>
<?php
    if(isset($_POST['submit'])){
        $name_project = $_POST['name_project'];
        $nameST1 = $_POST['nameST1'];
        $nameST2 = $_POST['nameST2'];
        $nameST3 = $_POST['nameST3'];

        $sql = "INSERT into tb_team (id_subject,id_student,name_project,name_student1,name_student2,name_student3)
        values ('$id_subject','$id_student','$name_project','$nameST1','$nameST2','$nameST3')
        ";
        $result= mysqli_query($conn, $sql);
        if($result==true){
            echo 'success';
        }
        else{
            echo 'faild';
        }
    }
?>
<?php
include('footer.php')
?>