<?php
include_once("connectAll.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verification | Clinique Alkawtar</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/verify.css">
    </head>

    <body>
            <div class="flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen">
            <div class="max-w-xl p-8 text-center text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12">
                <h3 class="text-2xl">Vos informations sont dèja vérifées</h3>
                    <p>Il semble que vous ayez déjà vérifié votre compte, vous serez redirigé vers la page de connexion dans 5s</p>
                    <div class="sa">
  <div class="sa-warning">
  <div class="sa-warning-body"></div>
  <div class="sa-warning-dot"></div>
  </div>
  </div>


  <div class="mt-4">
                    <p class="mt-4 text-sm">Si vous n'êtes pas redirigé automatiquement, veuillez
                        <a href="login.php" class="text-blue-600">cliquer ici</a>
                    </p>
                </div>
            </div>
        </div>
        <script>
         setTimeout(function(){
            window.location.href = 'login.php';
         }, 5000);
      </script>
    </body>