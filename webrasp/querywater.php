<?php
    include("config.php");
    // header('Content-Type: application/json');
    $sql ="SELECT * FROM table_water_table";
    $res = mysqli_query($conn,$sql);
    $array_thing = array();
    if($res){
        if($n_row = mysqli_num_rows($res) >0){
            // echo "succesful";
           
            while($obj = mysqli_fetch_assoc($res)){
                 array_push($array_thing,$obj); 
            }
            echo json_encode(array("data"=>$array_thing));
        }else{
            echo "failed";
        }
    }
    // $input ="py executor.py ".$input; 
    // $output = shell_exec($input);
    // echo $output;

    
    
?>