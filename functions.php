<?php
function check_login($con){
//CHECKS IF THE USER HAS ALREADY LOGIN
    if(isset($_SESSION['uid'])){

        $id = $_SESSION['uid'];
        $query = "select * from user_info where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);

        if($result && mysqli_num_rows($result)>0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //REDIRECT TO HOMEPAGE
    
    //echo "<script>window.location.href='myprofile.php'; </script>";
    die;
}

//GENERATE RANDOM NUMBERS TO BECOME A USER_ID
function random_num($length){

    $text = "";
    if ($length < 5){
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++) { 
        $text .= rand(0,9); 
    }
    return $text;

}