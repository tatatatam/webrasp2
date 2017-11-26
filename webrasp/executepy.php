<?php
    include("config.php");

    // $input = $_POST["data"];
    // $input ="py executor.py"; 
    // $output = shell_exec($input);
    // echo $output."hees";
    // echo 
    $input1 = "2";
    $input2 = "3";
    $sql ="INSERT INTO table_water_table  (water,timecontrol) VALUE ('".$input1."','".$input2."')";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    if($res){
        // if($n_row = mysqli_num_rows($res) >0){
            echo "succesful";
        // }else{
            // echo "failed";
        // }
    }else{
        echo mysqli_error($conn);
    }
    // $input ="py executor.py ".$input; 
    // $output = shell_exec($input);
    // echo $output;

    
    
?>