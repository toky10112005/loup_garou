<?php
    require('connect.php');


    function aff_role(){
        $conn=dbconnect();
        $sql="SELECT * FROM role";
        $result=mysqli_query($conn,$sql);
        $valiny=array();
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $valiny[]=$row;
            }
            mysqli_close($conn);
            return $valiny;
        }
        else{
            error_log('Erroe:',mysqli_error($conn));
        }
    }
?>