<?php
include_once("connectDB.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';
function sendMail($message,$email){
    $mail = new PHPMailer(TRUE);
    $mail->isSMTP();                        // Set mailer to use SMTP
    $mail->Host       = "smtp.mail.yahoo.com";    // Specify main SMTP server
    $mail->SMTPAuth   = true;               // Enable SMTP authentication
	$mail->SMTPSecure = 'ssl';
    $mail->Username   = 'clinique.alkawtar@yahoo.com';     // SMTP username
    $mail->Password = '+aUA+QmJjy=3.V/';   // SMTP password
    $mail->Port       = 465;                // TCP port to connect to
    $mail->setFrom('clinique.alkawtar@yahoo.com', 'Clinique Alkawtar');           // Set sender of the mail
    $mail->addAddress($email);           // Add a recipient
    $mail->Subject = 'Confirmer le Rendez-vous | Clinique Alkawtar';
    $mail->MsgHTML($message);
    $mail->IsHTML(true);
    if(!$mail->Send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;

	}
	else {
		echo 'Message has been sent';
	}
}

// LOGIN
if (isset($_POST['login-btn'])) {
	echo "in login gfield";
    if (empty($_POST['email'])) {
        $errors['username'] = 'Username or email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
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
                $_SESSION['message'] = 'You are logged in!';
                header('location: showuser.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}
						$errors = [];
						//Adding the new  user to DATABASE
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
	$oldPatient = $_POST['already_patient'];

	if( isset( $_POST['phone'] ) ) {
				$phone = $_POST ['phone'];
	}
	$age = "";
	if( isset( $_POST['age'] ) && $_POST['age']) {
		$age = $_POST['age'];
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
		echo "email 9dim";
		$errors['email'] = "Email déja enregistré";
	}

	if (count($errors) === 0) {
		echo "no errors";
		$userquery = "INSERT INTO users(username,email,verified,token,password,sexe,age,phone,oldPatient) 
			values('$username','$email','0','$token','$password','$sexe','$age','$phone','$oldPatient')";
		$rdvquery = "INSERT INTO rdv(date,Heure,problem,type,token) 
			values('$new_date','$time','$problem_medical','$typeRDV','$token')";
		//Replacing mail values 
		$message = str_replace('%%token%%', $token, $message);
		$message = str_replace('%%username%%', $username, $message);
		$message = str_replace('%%occupation%%', $problem_medical, $message);
		$message = str_replace('%%type%%', $typeRDV, $message);
		$message = str_replace('%%day%%', $day, $message);
		$message = str_replace('%%month%%', $month, $message);
		$message = str_replace('%%phone%%', $phone, $message);
		//execute the query
		$result_user = mysqli_query($conn, $userquery); 
		$result_rdv = mysqli_query($conn, $rdvquery);
		if ($result_user && $result_rdv) {
			//Using PHPMailer class to send verification email
			sendMail($message,$email);
			$_SESSION['token'] = $token;
			$_SESSION['firstname'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['verified'] = false;
			$_SESSION['message'] = 'Compte Crée, vérifier votre adresse email';
			$_SESSION['type'] = 'alert-success';
		} else {
			$_SESSION['message'] = 'Erreur de création du compte';
			
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
     header('location: showuser.php');
     exit(0);
}
?>

