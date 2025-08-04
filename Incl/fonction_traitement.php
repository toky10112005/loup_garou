<?php
    require('connect.php');

    function role_choisi($id){
        $conn=dbconnect();
        $sql="SELECT * FROM role WHERE id='$id'";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            $row=mysqli_fetch_assoc($result);
            return $row;
        }
        else{
            error_log('Error:'.mysqli_error($conn));
        }
    }
?>