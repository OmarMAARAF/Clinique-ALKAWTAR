<?php
include_once("connectAll.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Message enregistré | Clinique Alkawtar</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/verify.css">
    </head>

    <body>
            <div class="flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen">
            <div class="max-w-xl p-8 text-center text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12">
                <h3 class="text-2xl">Merci, votre rendez message a bien été enregistré, vous serez redirigé dans 5 secondes</h3>
                <div class="sa">
                    <div class="sa-success">
                    <div class="sa-success-tip"></div>
                    <div class="sa-success-long"></div>
                    <div class="sa-success-placeholder"></div>
                    <div class="sa-success-fix"></div>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="mt-4 text-sm">Si vous n'êtes pas redirigé automatiquement, veuillez
                        <a href="dashboard/main/index-2.php" class="text-blue-600">cliquer ici</a>
                    </p>
                </div>
            </div>
        </div>
        <script>
         setTimeout(function(){
            window.location.href = 'index.html';
         }, 5000);
      </script>
    </body>