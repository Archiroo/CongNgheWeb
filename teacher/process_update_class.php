<?php
    
    if(isset($_POST['submit']))
    {
        $name = $_POST['class_name'];
        if($name != "")
        {
            $sql2 = "UPDATE tb_class SET name_class = '$name' WHERE id_class= '$id_class'";
            $res2 = mysqli_query($conn, $sql2);
            if($res2 > 0)
            {
                header("Location:class.php");
            }
            else
            {
                header("Location:update_class.php");
            }
        }
    }
?>