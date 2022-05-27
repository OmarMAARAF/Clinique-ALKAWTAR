<?php
include('ConnectDB.php');
if(isset($_GET['token'])){
        $token = $_GET['token'];
        $_SESSION['token'] = $token;
        $verify_query = "SELECT token, verified FROM users WHERE token = '$token' LIMIT 1";
        $verify_query_run = mysqli_query($conn, $verify_query);
        if(mysqli_num_rows($verify_query_run) > 0){
            $row = mysqli_fetch_array($verify_query_run);
            if($row['verified'] == "0"){
                $clicked_token = $row['token'];
                $update_query = "UPDATE users SET verified = 1 WHERE token = '$clicked_token' LIMIT 1";
                $update_query_run = mysqli_query($conn,$update_query);
                if($update_query_run){
                    $_SESSION['verified'] = 1;
                    header('Location: verified.php');
                    exit(0);  
                }
                else{
                    header('Location: verif_error.php');
                    exit(0); 
                }
            }
            else{
                $_SESSION['message'] = "Email Already verified, please login";
            }

            
        }
        else{
            header('Location: verif_error.php');
            exit(0); 

        }
}
else{
    $_SESSION['message'] = "Not Allowed";
}

?>