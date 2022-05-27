<?php
include_once("connectAll.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rendez-vous enregistré | Clinique Alkawtar</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/verify.css">
    </head>

    <body>
            <div class="flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen">
            <div class="max-w-xl p-8 text-center text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12">
                <h3 class="text-2xl">Oups, une erreur s'est produite lors de la vérification de votre compte, veuillez réessayer plus tard</h3>
                    <p>il se peut que le lien que vous utilisez ne corresponde pas à votre compte, veuillez vérifier le lien envoyé à votre adresse e-mail</p>
                <div class="sa">
                <div class="sa-error">
                <div class="sa-error-x">
                <div class="sa-error-left"></div>
                <div class="sa-error-right"></div>
                </div>
                <div class="sa-error-placeholder"></div>
                <div class="sa-error-fix"></div>
                </div>
                </div>

                <div class="mt-6">
                    <p class="mt-6 text-sm">Si le problème persiste,
                        <a href="contact-us.html" class="text-blue-600">contactez-nous d'ici</a>
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