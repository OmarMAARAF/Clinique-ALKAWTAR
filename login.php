<?php include_once("connectAll.php");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alkawtar | Se connecter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/login-style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout23" data-bg-image="assets/images/login/figure/bg23-l.jpg">
        <div class="fxt-bg-overlay" data-bg-image="assets/images/login/elements/overlay.png">
            <div class="fxt-content">
                <div class="fxt-header">
                    <a href="index.html" class="fxt-logo"><img src="assets/images/logo.png" alt="Logo"></a>
                </div>
                <div class="fxt-form">
                    <p>Se connecter à votre compte</p>
                    
                    <?php if (count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach ($errors as $error): ?>
                        <li>
                            <?php echo $error; ?>
                        </li>
                        <?php endforeach;?>
                    </div>
                    <?php endif;?>
                    <form method="POST" action ="connectAll.php">
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Adresse Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                                <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-3">
                                <div class="fxt-checkbox-area">
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">Rester Connecté</label>
                                    </div>
                                    <a href="forgot-password-23.html" class="switcher-text">Mot de passe oublié</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-4">
                                <button type="submit" class="fxt-btn-fill" name="login-btn">Se connecter</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="fxt-style-line">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                        <h3>Ou se connecter par </h3>
                    </div>
                </div>
                <ul class="fxt-socials">
                    <li class="fxt-google">
                        <div class="fxt-transformY-50 fxt-transition-delay-6">
                            <a href="#" title="google"><i class="fab fa-google-plus-g"></i><span>Google +</span></a>
                        </div>
                    </li>
                    <li class="fxt-twitter">
                        <div class="fxt-transformY-50 fxt-transition-delay-7">
                            <a href="#" title="twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                        </div>
                    </li>
                    <li class="fxt-facebook">
                        <div class="fxt-transformY-50 fxt-transition-delay-8">
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                        </div>
                    </li>
                </ul>
                <div class="fxt-footer">
                    <div class="fxt-transformY-50 fxt-transition-delay-9">
                        <p>Vous ne possédez pas un compte?<a href="index.html#rendezvous" class="switcher-text2 inline-text">Prendre un rendez-vous</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="assets/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/login_main.js"></script>

</body>

</html>