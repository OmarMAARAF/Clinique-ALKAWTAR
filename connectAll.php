<?php
include_once("connectDB.php");

function send_email($message, $email)
{
	$to = $email;
	$subject = "Bienvenue sur Alkawtar";
	$header = "From:abc@somedomain.com \r\n";
	$header .= "Cc:afgh@somedomain.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$retval = mail($to, $subject, $message, $header);

	if ($retval == true) {
		header("Location: login.php");
	} else {
		header('Location: smtp-error.php');
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
				if ($user['usertype'] == 'user' && $user['verified'] == 1) {
					header('Location: dashboard/main/index-2.php');
				} else {
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
}

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

	if (isset($_POST['phone'])) {
		$phone = $_POST['phone'];
	}
	$age = "";
	if (isset($_POST['age']) && $_POST['age']) {
		$age = $_POST['age'];
	}
	$sexe = $_POST['sexe'];
	$date = strtotime($_POST['dateRDV']);
	$day = "";
	$month = "";
	if ($date) {
		$new_date = date('Y-m-d', $date);
		$day = date('d', $date);
		$month = date('m', $date);
		$year = date('Y', $date);
	}
	$time = strtotime($_POST['HeureRDV']);
	$time = date('H:i', $time);

	// Check if email already exists
	$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		header('location: email_already.php');
		exit(0);
	}

	if (count($errors) === 0) {
		echo "no errors";
		$userquery = "INSERT INTO users(username,email,verified,token,password,sexe,age,phone,oldPatient) 
			values('$username','$email','0','$token','$password','$sexe','$age','$phone','$oldPatient')";
		$rdvquery = "INSERT INTO rdv(date,Heure,problem,type,token) 
			values('$new_date','$time','$problem_medical','$typeRDV','$token')";

		$costumerquery1 = "INSERT INTO costumer(date,Heure,problem,type de service,token) 
			values('$new_date','$time','$problem_medical','$typeRDV','$token')";


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
		//	$result_costumerquery1 = mysqli_query($conn, $costumerquery1);
		if ($result_user && $result_rdv) {
			send_email($message, $email);
			$_SESSION['token'] = $token;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['verified'] = false;
			$_SESSION['type'] = 'alert-success';
		} else {
			$_SESSION['message'] = 'Erreur de création du compte';
		}
	}
	header('location: login.php');
	exit(0);
}

if (isset($_POST['resend'])) {
	$message = file_get_contents('resend_email.html');
	$message = str_replace('%%token%%', $_SESSION['token'], $message);
	$message = str_replace('%%username%%', $_SESSION['username'], $message);
	send_email($message, $_SESSION['email']);
}
if (isset($_POST['refresh'])) {
	header('location: showuser.php');
	exit(0);
}