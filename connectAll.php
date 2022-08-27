<?php
include_once("connectDB.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';


function send_email($message, $email){
	$mail = new PHPMailer(TRUE);
    $mail->isSMTP();                        // Set mailer to use SMTP
    $mail->Host       = "smtp.gmail.com";    // Specify main SMTP server
    $mail->SMTPAuth   = true;               // Enable SMTP authentication
    $mail->Username   = '';     // SMTP username
    $mail->Password = '';   // SMTP password
    $mail->Port       = 587;                // TCP port to connect to
    $mail->setFrom('clinic.alkawtar@gmail.com', 'Clinique Alkawtar');           // Set sender of the mail
    $mail->addAddress($email);           // Add a recipient
    $mail->Subject = 'Confirmer le Rendez-vous | Clinique Alkawtar';
    $mail->MsgHTML($message);
    $mail->IsHTML(true);
    $mail->send();
	if( $retval == true ) {
		header("Location: login.php");
	}else {
	}
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['email'])) {
        $errors['username'] = 'Username or email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

 
        $query = "SELECT * FROM users WHERE email=? OR password=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['token'] = $user['token'];
				if($user['usertype'] == 'user' && $user['verified'] == 1){
					header('Location: dashboard/main/index-2.php');
				}
				else{
					header('Location: dashboard/main/index2.php');
					exit(0);
				}
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }

//Adding the new user to DATABASE
if (isset($_POST['register'])) {
	if (empty($_POST['firstname'])) {
		$errors['firstname'] = 'Prenom nécessaire';
	}
	if (empty($_POST['email'])) {
		$errors['email'] = 'Email nécessaire';
		}

	if (empty($_POST['password'])) {
		$errors['password'] = 'Mot de passe obligatoire';
		}							
	if (empty($_POST['phone'])) {
		$errors['phone'] = 'telephone obligatoire';
	}
	$message = file_get_contents('email.html');
	$prenom = $_POST['firstname'];
	$nom = $_POST['lastname'];
	$username = $prenom . ' ' . $nom;
	$email = $_POST['email'];
	$token = bin2hex(random_bytes(50)); // generate unique token
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
	$reservation_date = $_POST['dateRDV'];
	$reservation_hour = $_POST['HeureRDV'];
	$problem_medical = $_POST['additional_message_2'];
	$typeRDV  = $_POST['typeRDV'];
	$specialite = $_POST['specialite'];
	$oldPatient = $_POST['already_patient'];
	if(isset($_POST['adresse'])){
		$adresse = $_POST['adresse'];
	}
	else{
		$adresse = "";
	}

	if( isset( $_POST['phone'] ) ) {
				$phone = $_POST ['phone'];
	}
	$age = "";
	if(isset($_POST['age'])) {
		$age = $_POST['age'];
	
		if($_POST['age'] >0 && $_POST['age'] <= 3){
			$_SESSION['genre'] = 'bébé';
		}
		else if($_POST['age'] >=4 && $_POST['age'] < 13){
			$_SESSION['genre'] = 'enfant';
		}
		else if($_POST['age'] >=13 && $_POST['age'] < 18){
			$_SESSION['genre'] = 'adolescent';
		}
		else if($_POST['age'] >=18){
			$_SESSION['genre'] = 'adulte';
		}
		$genre = $_SESSION['genre'];
	}
	$sexe = $_POST['sexe'];
	$date = strtotime($_POST['dateRDV']);
	$day = "";
	$month = "";
	if($date){
		$new_date = date('Y-m-d',$date);
		$day = date('d',$date);
		$month = date('m',$date);
		$year = date('Y',$date);
	}
	$time = strtotime($_POST['HeureRDV']);
	$time = date('H:i',$time);
	 
	// Check if email already exists
	$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		header('location: email_already.php');
		exit(0);
	}

	if (count($errors) === 0) {
		echo "no errors";
		$userquery = "INSERT INTO users(username,email,verified,token,password,sexe,age,phone,oldPatient,adresse,created_at) 
			values('$username','$email','0','$token','$password','$sexe','$age','$phone','$oldPatient','$adresse',NOW())";
		$rdvquery = "INSERT INTO rdv(date,heure,problem,type,token,specialite) 
			values('$new_date','$time','$problem_medical','$typeRDV','$token','$specialite')";
		$costumerquery = "INSERT INTO costumer(nom, prenom, doctor, date, sex, email, heur, etat, genre, phone, `type de service`)
		VALUES('$nom', '$prenom', 'omar','$new_date', '$time', '$sexe', '$email', '$time', '', '$genre, '$phone', '$typeRDV')";

		//Replacing mail values 
		$upper_string = ucwords($username);
		$message = str_replace('%%token%%', $token, $message);
		$message = str_replace('%%username%%', $username, $message);
		$message = str_replace('%%occupation%%', $problem_medical, $message);
		$message = str_replace('%%type%%',  $typeRDV, $message);
		$message = str_replace('%%day%%', ucwords($day), $message);
		$message = str_replace('%%month%%', $month, $message);
		$message = str_replace('%%phone%%', $phone, $message);
		$message = str_replace('%%time%%', $time, $message);

		//execute the query
		$result_user = mysqli_query($conn, $userquery); 
		$result_rdv = mysqli_query($conn, $rdvquery);

		if ($result_user && $result_rdv) {
			
			send_email($message,$email);
			$_SESSION['token'] = $token;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['verified'] = false;
			$_SESSION['type'] = 'alert-success';
			header('location: not_verified.php');
			exit(0);
		} else {
			header('Location: smtp-error.php');
			$_SESSION['message'] = 'Erreur de création du compte';
			exit(0);
			
		}
	}
		//header('location: login.php');
		//exit(0);
}




if(isset($_POST['resend'])){
    $message = file_get_contents('resend_email.html');
    $message = str_replace('%%token%%', $_SESSION['token'], $message);
    $message = str_replace('%%username%%', $_SESSION['username'], $message);
    sendMail($message,$_SESSION['email']);
}
if(isset($_POST['refresh'])){
     header('location: dashboard/main/index-2.php');
     exit(0);
}

if(isset($_POST['send'])){
	$name = $_POST["contact-name"];
	$email = $_POST["contact-email"];
	$phone =  $_POST["contact-phone"];
	$subject = $_POST["contact-sujet"];
	$message = $_POST["contact-message"];
	//insert into contact table
	$contactquery = "INSERT INTO contact(name,email,phone,subject,message) 
		values('$name','$email','$phone','$subject','$message')";
	$result = mysqli_query($conn, $contactquery);
	if ($result) {
		header('location: contact_success.php');
		exit(0);
	} else {
		header('location: smtp-error.php');
		exit(0);
	}

}
?>
