<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Title -->
        <title>Umberto Zollo Photography</title>

        <!-- Favicons -->
        <link href="./img/favicon.png" rel="shortcut icon">
        <link href="./img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Template Main CSS File -->
        <link href="./css/style.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="./css/responsive.css" rel="stylesheet">
        <!-- Animation CSS 
        <link href="./css/animation.css" rel="stylesheet">
        -->
    </head>

    <body>       
<!--        <script src="./js/cookiechoices.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function (event) {
                cookieChoices.showCookieConsentBar('Questo sito utilizza i cookie per migliorare servizi e esperienza dei lettori. Se decidi di continuare la navigazione consideriamo che accetti il loro uso.',
                        'Chiudi il banner', '', '');
            });
        </script>-->

        <!-- Header Area Start -->
        <header class="header-area header-area-background">

            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">

                    <a class="navbar-brand logo-image" href="./index.php"><img src="./img/logo.png" alt="Logo"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="./index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item page-scroll" href="./entra.php">Nude-Art</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item page-scroll" href="./gallerySports.php">Sports</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item page-scroll" href="./galleryOthers.php">Others</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="./contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="./login.php">Login</a>
                            </li>
                        </ul>

                        <span class="nav-item social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/UmbertoZolloPhoto" target="_blank" title="Facebook">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://twitter.com/UmbertoZollo" target="_blank" title="Twitter">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://www.instagram.com/umbertozollophoto" target="_blank" title="Instagram">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://500px.com/p/umbertozollophoto" target="_blank" title="500px">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-500px fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://t.me/umbertozollo_photo" target="_blank" title="Telegram">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-telegram fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>

                    </div>
                </div>
            </nav>

        </header>
        <!-- Header Area End -->


        <section class="gallery_area clearfix">
            <div class="container-fluid clearfix">
                
                <div class="gallery-menu">
                    <button class="active btn" type="button" data-filter="*">All</button>
                    <button class="btn" type="button" data-filter=".cycling">Cycling</button>
                    <button class="btn" type="button" data-filter=".others">Others</button>
                </div>
                
                <div class="row gallery-column">

<?php
                    $dir = './img/gallery/sports';
                    $files = array_diff(scandir($dir, SCANDIR_SORT_DESCENDING), array('.', '..'));
                    foreach ($files as $value) {
                        $filename_without_ext = substr($value, 0, strrpos($value, "."));
                        $filters = explode("-", $filename_without_ext);

                        $nomePage = $filters[0];
                        $nome = $filters[1];
                        $nomeStr = str_replace("_", " ", $nome);
                        $imagePath = $dir . "/" . $value;

                        $filterStr = "";
                        for ($i = 2; $i < count($filters); $i++) {
                            $filterStr = $filterStr . " " . $filters[$i];
                        }

                        echo "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item " . trim($filterStr) . " \">";
                        echo "<img src=\"" . $imagePath . "\" alt=\"\">";
                        echo "</div>";
                    }
?>
                    </div>

                </div>

            </div>
        </section>

        <!-- Footer Area Start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">    
                        <p class="p-small">Copyright &copy;2018-<?php echo date("Y"); ?> Umberto Zollo | Tutti i diritti riservati | Vietata la riproduzione del testo e delle immagini</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright &copy;2018-<?php echo date("Y"); ?> Umberto Zollo | All rights reserved | Unauthorized reproduction of texts and pictures is forbidden</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- JS -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="./js/jquery-3.7.0.min.js"></script>
        <!-- Bootstrap js -->
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script type="text/javascript" src="./js/plugins.js"></script>
        <!-- custom js -->   
        <script type="text/javascript" src="./js/custom.js"></script>

        <!-- Popper js 
        <script src="js/popper.min.js"></script>
        -->

    </body>  
</html>