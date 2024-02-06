<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Citymo</title>
        <meta name="description" content="un siteWeb immobilier">
        <meta name="author" content="CAP5">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate, bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <style>
            .footer-title-line {
                color: #5D8AFF; /* Remplacez #5D8AFF par la couleur de votre choix */
                background: #5D8AFF;
            }
            .footer-menu li {
                border-bottom: 1px solid #5D8AFF;
            }
            .slider-content h2 {
                font-size: 40px; 
                margin-bottom: 20px;
                text-transform: uppercase;
                color: #ffffff;
                font-weight: 570;
            } 
        </style>
    </head>  
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
      
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo3.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <ul class="main-nav nav navbar-nav navbar-right">


                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    <!-- DIMENSIOSN 1740*1000 -->
                    <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt=""></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-3.jpg" alt=""></div>

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Découvrez votre futur appartement avec nous</h2>

                    </div>
                </div>
            </div>
        </div>

        <!DOCTYPE html>
<html>
<head>
    <title>Formulaire de recherche</title>
</head>
<body>
    <div class="home-lager-shearch" style="padding-top: 25px; margin-top: -125px; padding-bottom: 60px; background-color: rgb(252, 252, 252);">
        <div class="container">
            <div class="col-md-12 large-search"> 
            <div class="search-form wow pulse">
                <form action="properties.php" method="post" class="form-inline">
                    <div class="col-md-12 clear">
                        <div class="col-md-6">
                            <label for="Arrondissement">Arrondissement :</label>
                            <input type="text" id="Arrondissement" name="arrondissement" class="form-control" placeholder="Arrondissement">
                        </div>

                        <div class="col-md-6">
                            <label for="price-range">Budget (€):</label>
                            <input type="text" id="price-range" class="span2" value="0,20000000" data-slider-min="0" 
                                data-slider-max="20000000" data-slider-step="10000" 
                                data-slider-value="[0,20000000]" name="prix">
                            <br />
                            <b class="pull-left color">0€</b> 
                            <b class="pull-right color">20,000,000€</b>
                        </div>
                    </div>

                    <div class="col-md-12 clear">
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>

                    <div class="center">
                        <input type="submit" value="" class="btn btn-default btn-lg-sheach">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>

        
        
        

        <!-- property area -->
        

        <script>
            $(function () {
                var slider = $("#price-range");
                slider.slider({
                    range: true,
                    min: 0,
                    max: 20000000,
                    step: 10000,
                    values: [0, 20000000],
                    slide: function (event, ui) {
                        var lowerValue = ui.values[0];
                        var upperValue = ui.values[1];
                        if (upperValue <= 1000000) {
                            $("#price-range .color").html('0$ - 1,000,000$');
                        } else {
                            var scaledValue = (upperValue - 1000000) / 19000000 * 1900000 + 1000000;
                            $("#price-range .color").html('1,000,000$ - 20,000,000$');
                        }
                    }
                });

                slider.slider("option", "slide")(null, { values: slider.slider("values") });
            });
        </script>

        <script>
            // Récupération de la référence vers l'élément compteur
            var compteurElement = document.getElementById("min-rooms");
            
            // Récupération de la référence vers les boutons
            var decrementButton = document.getElementById("decrement");
            var incrementButton = document.getElementById("increment");
            
            // Fonction pour décrémenter le compteur
            function decrement() {
                var currentValue = parseInt(compteurElement.value);
                var minValue = parseInt(compteurElement.min);
            
                if (!isNaN(currentValue) && currentValue > minValue) {
                    compteurElement.value = currentValue - 1;
                }
            }
            
            // Fonction pour incrémenter le compteur
            function increment() {
                var currentValue = parseInt(compteurElement.value);
                var maxValue = parseInt(compteurElement.max);
            
                if (!isNaN(currentValue) && currentValue < maxValue) {
                    compteurElement.value = currentValue + 1;
                }
            }
            
            // Associer les fonctions aux événements click des boutons
            decrementButton.addEventListener("click", decrement);
            incrementButton.addEventListener("click", increment);
            </script>
            



        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>   
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>
  <!-- Footer area-->
  <div class="footer-area">

<div class=" footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                <div class="single-footer">
                    <h4>About us </h4>
                    <div class="footer-title-line"></div>

                    <img src="assets/img/logo3.png" alt="" class="wow pulse" data-wow-delay="1s">
                    <p>Pour contacter Citymo</p>
                    <ul class="footer-adress">
                        <li><i class="pe-7s-map-marker strong"> </i> 9089 rue du Succès</li>
                        <li><i class="pe-7s-mail strong"> </i> email@Citymo.com</li>
                        <li><i class="pe-7s-call strong"> </i> +33 633333333</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                <div class="single-footer">
                    <h4>Quick links </h4>
                    <div class="footer-title-line"></div>
                    <ul class="footer-menu">
                        <li><a href="properties.php">Properties</a>  </li> 
                        <li><a href="index.php">Services</a>  </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </body>
</html>