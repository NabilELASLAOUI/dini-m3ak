<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>dini m3ak</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Forms -->
        <link href="css/jquery.idealforms.css" rel="stylesheet">
        <!-- Select  -->
        <link href="css/jquery.idealselect.css" rel="stylesheet">
        <!-- Slicknav  -->
        <link href="css/slicknav.css" rel="stylesheet">
        <!-- Main style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header class="header">

            <div class="top-menu">

                <section class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="user-log">

                                <a data-toggle="modal" data-target="#loginModal">
                                    Connexion
                                </a> /
                                <a data-toggle="modal" data-target="#regModal">
                                    Inscription
                                </a>

                            </div><!-- end .user-log -->
                        </div><!-- end .col-sm-4 -->

                        <div class="col-md-8 col-sm-8 col-xs-12">

                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- end .col-sm-8 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class="main-baner">

                <div class="fullscreen background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container">

                                <div class="row">

                                    <div class="main-header-container clearfix">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>dini m3ak</h1>
                                            </div><!-- end .logo -->
                                        </div><!-- end .col-sm-4 -->
                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
                                                        <a href="<?php echo Router::url(''); ?>">Accueil</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo Router::url('trajet'); ?>">Trajet</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo Router::url('trajets/ajouter'); ?>">Ajouter un trajet</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="events.html">Events</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post.html">Single post</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-article.html">Single article</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="contact-page.html">Contact</a>
                                                    </li>
                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="page-content">

                        <div class="services clearfix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>Services</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-car"></i>

                                    <h3>Share your ride</h3>
                                    <p>Are you getting sick of traveling alone and spent so much money on gas? Share your ride today,and forget about this problems.</p>


                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-users"></i>

                                    <h3>Find new friends</h3>
                                    <p>Finding new friends is easier than ever,nothing makes better friendship than spending few hours casually chatting with some interesting people.</p>

                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <article class="service">

                                    <i class="fa fa-map-marker"></i>

                                    <h3>Go to new places</h3>
                                    <p> Find some new favourite place to chill out,you have no longer got excuse for not travelling and discovering. </p>

                                </article><!-- end .service -->

                            </div><!-- end .col-md-4 -->

                        </div><!-- end .services -->

                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="background parallax" style="background-image:url('img/XWBIL5.jpg');" data-img-width="1600" data-img-height="1064">

                                <div class="main-parallax-content">

                                    <div class="second-parallax-content">

                                        <div class="parallax-content clearfix">

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">5,000</span>
                                                    <span>Happy users</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">7,000</span>
                                                    <span>Successful rides</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="site-stat">
                                                    <span class="counter">600,000</span>
                                                    <span>Miles traveled in a good company</span>
                                                </div>
                                            </div>

                                        </div><!-- end .parallax-content -->

                                    </div><!-- end .main-parallax-content -->

                                </div><!-- end .paralax -->

                            </div><!-- end .fullscreen .background .parallax -->

                        </div><!-- end .col-md-12 -->

                        <div class="clearfix"></div>

                        <div class="last-rides">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>Last rides</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Plovdiv to Sofia</a></h3>ride by <a href="#">Stefan Valkov</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 20, 2014 at 19:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                1
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Milano to Rome</a></h3>ride by <a href="#">Carlo Corti</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 18, 2014 at 06:00 AM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                4
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Lyon to Paris</a></h3>ride by <a href="#">Antoine Bonnet</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 15, 2014 at 20:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                3
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Barcelona to Madrid</a></h3>ride by <a href="#">Adriana Bello</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 10, 2014 at 09:00 AM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                2
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <article class="ride-box clearfix">

                                    <div class="ride-content">
                                        <h3><a href="#">From Munich to Berlin</a></h3>ride by <a href="#">Albert Becker</a>
                                    </div>

                                    <ul class="ride-meta">

                                        <li class="ride-date">
                                            <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">
                                                <i class="fa fa-calendar"></i>
                                                July 08, 2014 at 22:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class="ride-people">
                                            <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">
                                                <i class="fa fa-user"></i>
                                                1
                                            </a>
                                        </li><!-- end .ride-people -->

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file"></i>
                                                Read more
                                            </a>
                                        </li>

                                    </ul><!-- end .ride-meta -->

                                </article><!-- end .ride-box -->

                                <div class="clearfix"></div>

                                <div class="read-all pagination-margin">
                                    <a href="rides.html">Read all</a>
                                </div>

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                        </div><!-- end .last-rides -->

                        <div class="clearfix"></div>

                        <div class="events box-fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="page-sub-title textcenter">
                                    <h2>Events</h2>
                                    <div class="line"></div>
                                </div><!-- end .page-sub-title -->

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="event vertical vertical-two">
                                    <figure>
                                        <img src="img/events/event-1.jpg" alt="" >
                                    </figure>
                                    <div class="event-info">
                                        <div class="box event-name">
                                            <h3>Live concert</h3>
                                        </div>
                                        <div class="box event-ride">
                                            10 ride
                                        </div>
                                        <div class="box event-read">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="event horizontal-one">
                                    <figure>
                                        <img src="img/events/event-2.jpg" alt="" >
                                    </figure>
                                    <div class="event-info">
                                        <div class="box event-name">
                                            <h3>Live concert</h3>
                                        </div>
                                        <div class="box event-ride">
                                            200 ride
                                        </div>
                                        <div class="box event-read">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="event horizontal-one">
                                    <figure>
                                        <img src="img/events/event-3.jpg" alt="" >
                                    </figure>
                                    <div class="event-info">
                                        <div class="box event-name">
                                            <h3>Live concert</h3>
                                        </div>
                                        <div class="box event-ride">
                                            100 ride
                                        </div>
                                        <div class="box event-read">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="read-all pagination-margin">
                                    <a href="events.html">Show all events</a>
                                </div>

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                        </div><!-- end .events -->

                    </div><!-- end .page-content -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->

        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyright by My ride
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms login">

                            <div class="log-header">
                                <span class="log-in">Connexion</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Connexion</button>
                            </div>

                            <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>

                            <div class="clearfix"></div>

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="<?php echo Router::url('personne/ajouter'); ?>" method="post" novalidate autocomplete="off" class="idealforms reg">

                            <div class="log-header">
                                <span class="log-in">Inscription</span>
                            </div>
                           <div class="form-group" for="civilities">
                              <select name="SEXE" class="c-select">
                                  <option selected>Sexe</option>
                                  <option value="1">Homme</option>
                                  <option value="0">Femme</option>
                              </select>
                            </div>
                              
                              <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="NOM" id="first_name" class="form-control input-lg" placeholder="Nom" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="PRENOM" id="last_name" class="form-control input-lg" placeholder="Prénom" tabindex="2">
                                    </div>
                                </div>
                            </div>
  
                            <div class="field">
                                <input name="EMAIL" type="email"  placeholder="E-Mail" required="remplir">
                                <span class="error"></span>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="PASSWORD" id="password" class="form-control input-lg" placeholder="mot de passe" tabindex="5">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="PASSWORD_CONFIRM" id="password_confirmation" class="form-control input-lg" placeholder="Confirmez mot de passe" tabindex="6">
                                    </div>
                                </div>
                            </div>
                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Valider</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .reg -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="js/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

    </body>
</html>
