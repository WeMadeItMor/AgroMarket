@extends('layout.main')


  <body>

    <!-- Main Navigation 
    ================================================== -->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="{{ asset('asset/img/logo.png') }}" alt="..."></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="scroll">Accueil</a></li>
                <li><a href="#tf-services" class="scroll">Services</a></li>
                <li><a href="#tf-about" class="scroll">A PROPOS</a></li>
                <li><a href="#tf-works" class="scroll">PRODUIT</a></li>
                <li><a href="#tf-process" class="scroll">PROCEDURE</a></li>
                <li><a href="#tf-pricing" class="scroll">PLAN</a></li>
                <li><a href="#tf-blog" class="scroll">Blog</a></li>
                <li><a href="{{ route('web') }}" class="scroll">ACCEDER</a></li>
                <li><a href="#tf-contact" class="scroll">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Section
    ================================================== -->
    <div id="tf-home" class="slider">
        <div class="overlay"> <!-- Overlay Color -->
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('asset/img/bg/slider01.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <h1>Marché africain numérique</h1>
                                <p class="lead">Nous facilitons l’échange entre acheteur et vendeurs dans un marché Agro-pastorale numérique.</p>
                                <a href="#tf-works" class="scroll goto-btn text-uppercase">Decouvrir</a> <!-- Link to your portfolio section -->
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('asset/img/bg/slider02.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <h1>Agriculuture , Pêche , Elevage</h1>
                                <p class="lead">Nous mettons en relation les differents acteurs du secteur primaire et les acheteurs potentiels.</p>
                                <a href="#tf-contact" class="scroll goto-btn text-uppercase">Decouvrir</a> <!-- Link to your portfolio section -->
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('asset/img/bg/slider03.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <h1>Plateforme Sécurisée et Fiables .</h1>
                                <p class="lead">Ne vous souciez plus du mode de payement ou de la livraison de vos produits</p>
                                <a href="#tf-about" class="scroll goto-btn text-uppercase">Decouvrir</a> <!-- Link to your portfolio section -->
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>
                  </div>
            </div>
        </div><!-- End Overlay Color -->
    </div>

    <!-- Intro Section
    ================================================== -->
    <div id="tf-intro" class="slider">
        <div class="container"> <!-- container -->
            <div class="row"> <!-- row -->

                <div class="col-md-8 col-md-offset-2"> 
                    <img src="{{ asset('asset/img/logo-w.png') }}" class="intro-logo img-responsive" alt="free-template"> <!-- Your company logo in white -->
                    <p>AgroMarket est une plateforme web et Mobile qui met en relation les différents acteurs du secteur primaire: agriculteurs, élèveurs et pêcheurs et les différents acheteurs potentiels :restaurants, hotêls, industries agro-alimentaires, super-marché etc...</p>
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <!-- Service Section
    ================================================== -->
    <div id="tf-services">
        <div class="container"> <!-- container -->

            <div class="section-header">
                <h2>Nos différents<span class="highlight"><strong> Services</strong></span></h2>
                <h5><em>Nous valorisons vos échanges en toutes transparence</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>

            <div class="row"> <!-- row -->
                
                <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                    <div class="media service"> <!-- Service #1 -->
                        <div class="media-body">
                            <h4 class="media-heading">Produits Agricoles</h4>
                            <p>Vous retrouverez tous les produits locaux cultivés au Sénegal ou dans la sous-région en grande quantité.</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-leaf"></i>
                        </div>
                    </div><!-- End Service #1 -->

                    <div class="media service"> <!-- Service #2 -->
                        <div class="media-body">
                            <h4 class="media-heading">Produits Maritimes</h4>
                            <p>Toutes les gammes de produits maritimes sont disponible à travers la plateformes.</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-ship"></i>
                        </div>
                    </div><!-- End Service #2 -->

                    <div class="media service"> <!-- Service #3 -->
                        <div class="media-body">
                            <h4 class="media-heading">Produits Pastoraux</h4>
                            <p>Besoin de betail ou de volailes en grandes quantité ? AgroMarket vous met en relation avec les meilleurs élèveurs du pays.</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-pied-piper-alt"></i>
                        </div>
                    </div> <!-- End Service #3 -->
                </div> <!-- End Left Content Col 6 -->

                <div class="col-md-6"> <!-- Right Content Col 6 -->
                    <div class="media service"> <!-- Service #4 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Livraison Sécurisée</h4>
                            <p>Nous vous assurons un transport et une livraison sécurisée de vos produits achetés grace à nos partenaires de livraison.</p>
                        </div>
                    </div><!-- end Service #4 -->

                    <div class="media service"> <!-- Service #5 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Call Center</h4>
                            <p>Pour profiter des service d'AgroMarket vous pouvez juste joindre le service clients au +221332002020</p>
                        </div>
                    </div> <!-- end Service #5 -->

                    <div class="media service"> <!-- Service #6 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Payements Fiables</h4>
                            <p>Payez par carte bancaire en liquide apres livraison ou par nos services partenaires.</p>
                        </div>
                    </div> <!-- end Service #6 -->
                </div><!-- end Right Content Col 6 -->
                
            </div><!-- end row -->

        </div><!-- end container -->
    </div>

    <!-- About Us Section
    ================================================== -->
    <div id="tf-about">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>A PROPOS d' <span class="highlight"><strong>AGROMARKET</strong></span></h2>
                <h5><em>Problème et solution</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>
        </div><!-- end container -->

        <div class="gray-bg"> <!-- fullwidth gray background -->

            <div class="container"><!-- container -->
                <div class="row"> <!-- row -->

                    <div class="col-md-6"> <!-- left content col 6 -->
                        <div class="about-left-content text-center">
                            <div class="img-wrap"> <!-- profile image wrap -->
                                <div class="profile-img"> <!-- company profile details -->
                                    <img src="{{ asset('asset/img/agromarket.png') }}" class="img-responsive" alt="Image"> <!-- change link to your image for your company profile -->
                                    <ul class="list-inline social"> 
                                        <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                        <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                        <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                                    </ul>
                                </div>
                            </div><!-- end profile image wrap -->
                            <h2><span class="small">Premier</span> Marché <br><span class="small">AgroPastorale Africain.</span></h2>
                        </div>
                    </div><!-- end left content col 6 -->

                    <div class="col-md-6"><!-- right content col 6 -->
                        <div class="about-right-content"> <!-- right content wrapper -->

                            <h4><strong>Problèmatique</strong></h4>
                            <p>L’autosuffisance alimentaire ? Une solution qu’aimerait atteindre tout pays africain dans un monde où la population mondiale s’estimerait a 9 milliards en 2050, des continents comme l’Afrique pourront il s’en sortir et atteindre l’autosuffisance alimentaire ? Cependant nous sommes toujours victimes de l’importation et de la dépendance des autres continent ,80% de ce que nous consommons ne proviennent pas de nos ressources. Cela est dû à quoi ? .</p>
                            
                            <div class="skills"> <!-- skills progress bar -->
                                <div class="skillset"> <!-- skill #1 -->
                                    <p>Les Producteurs locaux ont beaucoup de mal a écoulé leurs produits et trouvé des clients.</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">90% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #1 -->

                                <div class="skillset"> <!-- skill #2 -->
                                    <p>Les acheteurs aussi (restaurants, supermarché, hôtels et place de marché) ont du mal à avoir accès au produits locaux.</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #2 -->

                                <div class="skillset"> <!-- skill #3 -->
                                    <p>Le transport est couteux et perilleux</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                            <span class="sr-only">99% Complete</span>
                                        </div>
                                    </div>
                                </div> <!-- end skill #3 -->

                                {{-- <div class="skillset"> <!-- skill #4 -->
                                    <p>Graphic Design</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div> --}} <!-- end skill #4 -->

                                {{-- <div class="skillset"> <!-- skill #5 -->
                                    <p>Marketing</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div> --}}<!-- end skill #4 -->
                            </div> <!-- end skills progress bar -->

                        </div><!-- end right content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div><!-- end container -->

           {{--  <div id="tf-counter" class="text-center">
                <div class="container">
                    <div class="row"> <!-- Row -->

                        <div class="counter"> 

                          <div class="col-xs-6 col-sm-4 col-md-2 col-md-2 col-md-offset-1 facts"><!-- counter #1 -->
                            <div class="count-box"> 
                                <i class="fa fa-thumbs-up"></i>
                                <h4 class="count">720</h4>
                                <p class="small">Happy Customers</p>
                            </div> 
                          </div><!-- end counter #1 -->

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"><!-- counter #2 -->
                            <div class="count-box">
                              <i class="fa fa-user"></i>
                              <h4 class="count">480</h4>
                              <p class="small">People Donated</p>
                            </div>
                          </div>

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #3 -->
                            <div class="count-box">
                              <i class="fa fa-desktop"></i>
                              <h4 class="count">1253</h4>
                              <p class="small">People Participated</p>
                            </div>
                          </div>

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #4 -->
                            <div class="count-box">
                              <i class="fa fa-dollar"></i>
                              <h4 class="count">4580</h4>
                              <p class="small">Donation Collected</p>
                            </div>
                          </div>

                          <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #5 -->
                            <div class="count-box last">
                              <i class="fa fa-line-chart"></i>
                              <h4 class="count">12853</h4>
                              <p class="small">Total Hits</p>
                            </div>
                          </div>

                        </div>

                      </div> <!-- End Row -->
                </div>
            </div>
 --}}
        </div> <!-- end fullwidth gray background -->
    </div>

    <!-- Team Section
    ================================================== -->
    {{-- <div id="tf-team">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Awesome People Behind <span class="highlight"><strong>ethanol</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>

             <div id="team" class="owl-carousel owl-theme text-center"> <!-- team carousel wrapper -->

                <div class="item"><!-- Team #1 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>
                        </div><!-- End Hover Description -->
                        <img src="{{ asset('asset/img/team/01.jpg') }}" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Maria Shara</h3>
                            <p class="text-uppercase">Founder / CEO</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div><!-- End Team Wrapper -->
                </div><!-- End Team #1 -->

                <div class="item"> <!-- Team #2 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. Aliquet rutrum dui a varius. Mauris ornare tortor.</p>
                        </div> <!-- End Hover Description -->
                        <img src="{{ asset('asset/img/team/02.jpg') }}" alt="..." class="img-responsive"><!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Jenn Pereira</h3>
                            <p class="text-uppercase">Senior Creative Director</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div> <!-- End Team Wrapper -->
                </div><!-- End Team #2 -->

                <div class="item"> <!-- Team #3 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nec bibendum erat volutpat ultricies. Aliquet rutrum dui a varius. Mauris ornare tortor. </p>
                        </div> <!-- End Hover Description -->
                        <img src="{{ asset('asset/img/team/01.jpg') }}" alt="..." class="img-responsive"><!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Serena William</h3>
                            <p class="text-uppercase">Senior Designer</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div><!-- End Team Wrapper -->
                </div><!-- End Team #3 -->

                <div class="item"><!-- Team #4 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>
                        </div> <!-- End Hover Description -->
                        <img src="{{ asset('asset/img/team/01.jpg') }}" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Maria Shara</h3>
                            <p class="text-uppercase">Founder / CEO</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div> <!-- End Team Wrapper -->
                </div><!-- End Team #4 -->

                <div class="item"><!-- Team #5 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Praesent eget bibendum purus, quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies. Aliquet rutrum dui a varius. Mauris ornare tortor.</p>
                        </div> <!-- End Hover Description -->
                        <img src="{{ asset('asset/img/team/02.jpg') }}" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>Jenn Pereira</h3>
                            <p class="text-uppercase">Senior Creative Director</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div> <!-- End Team Wrapper -->
                </div><!-- End Team #5 -->

            </div> <!-- end team carousel wrapper -->

        </div> <!-- container -->
    </div>
 --}}
    <!-- Why Us/Features Section
    ================================================== -->
    <div id="tf-features">

        <div class="container">
            <div class="section-header">
                <h2>La Solution  <span class="highlight"><strong>AgroMarket</strong></span></h2>
                <h5><em>Relation client-producteur</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>
        </div>

        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"> <!-- container -->
                <div class="row" role="tabpanel"> <!-- row -->
                    <div class="col-md-4 col-md-offset-1"> <!-- tab menu col 4 -->

                        <ul class="features nav nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class="active">  <!-- feature tab menu #1 -->
                                <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
                                    <span class="fa fa-desktop"></span>
                                    Plateforme Web<br><small>Made in Africa</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #2 -->
                                <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
                                    <span class="fa fa-mobile"></span>
                                   Plateforme Mobile<br><small>Made in Africa</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #3 -->
                                <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
                                    <span class="fa fa-phone"></span>
                                    Call Center<br><small>Made in Africa</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #4 -->
                                <a href="#f4" aria-controls="f4" role="tab" data-toggle="tab">
                                    <span class="fa fa-envelope"></span>
                                    SMS<br><small>Made in Africa</small>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #5 -->
                                <a href="#f5" aria-controls="f5" role="tab" data-toggle="tab">
                                    <span class="fa fa-tty"></span>
                                    Assistance et Conseil<br><small>Made in Africa</small>
                                </a>
                            </li>
                        </ul>

                    </div><!-- end tab menu col 4 -->

                    <div class="col-md-6"> <!-- right content col 6 -->
                        <!-- Tab panes -->
                        <div class="tab-content features-content"> <!-- tab content wrapper -->
                            <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
                                <h4>Plateforme Web </h4>
                                <p>Vous pouvez commander tous vos produits depuis le confort de votre ordinateur</p>
                                <img src="{{ asset('asset/img/tab01.jpg') }}" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f2"> <!-- feature #2 content -->
                                <h4>Plateforme Mobile</h4>
                                <p>Vous êtes en déplacement et vous souhaiterez commander des produits , AgroMarket est disponible sur le Playstore et l'AppleStore</p>
                                <img src="{{ asset('asset/img/tab02.jpg') }}" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f3"> <!-- feature #3 content -->
                                <h4>Call Center</h4>
                                <p>Vous êtes producteurs et vous ne disposez ni de smartphone pour accéder à la plateforme ni d'ordinateur, sachez que vous pouvez quand même mettre vos produits en ligne en nous appelant aux +221332002020</p>
                                <img src="{{ asset('asset/img/tab03.jpg') }}" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f4"> <!-- feature #4 content -->
                                <h4>SMS</h4>
                                <p>Votre zone géographique ne dispose pas d'internet utilisez le service de messagerie d'AgroMarket pour mettre vos produits en ligne.</p>
                                <img src="{{ asset('asset/img/tab04.jpg') }}" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f5"> <!-- feature #5 content -->
                                <h4>Assistance et Conseil</h4>
                                <p>AgroMarket vous assiste de la commande jusqu'à la livraison de vos produits.</p>
                                <img src="{{ asset('asset/img/tab05.png') }}" class="img-responsive" alt="...">
                            </div>
                        </div> <!-- end tab content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div><!-- end fullwidth gray background -->
    </div>

    <!-- Works Section
    ================================================== -->
    <div id="tf-works">
        <div class="container">
            <div class="section-header">
                <h2>Les différents <span class="highlight"><strong>Produits</strong></span></h2>
                <h5><em>Commandez en toute simplicité</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>

            <div class="text-center">
                <ul class="list-inline cat"> <!-- Portfolio Filter Categories -->
                    <li><a href="#" data-filter="*" class="active">Tout</a></li>
                    <li><a href="#" data-filter=".web">Agriculture</a></li>
                    <li><a href="#" data-filter=".brand">Elevage</a></li>
                    <li><a href="#" data-filter=".app">Pêche</a></li>
                    <li><a href="#" data-filter=".others">Autres</a></li>
                </ul><!-- End Portfolio Filter Categories -->
            </div>

        </div><!-- End Container -->

        <div class="container-fluid"> <!-- fluid container -->
             <div id="itemsWork" class="row text-center"> <!-- Portfolio Wrapper Row -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding brand others"> <!-- Works #1 col 3 -->
                    <div class="box"> 
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Logo Identity Design" href="{{ asset('asset/img/portfolio/01@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/01@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a> <!-- change # with your url to link it to another page -->
                            </div> 
                            <img src="{{ asset('asset/img/portfolio/01.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #1 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding apps"> <!-- Works #2 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Mobile Application" href="{{ asset('asset/img/portfolio/02@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/02@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="{{ asset('asset/img/portfolio/02.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #2 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding others brand"><!-- Works #3 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="{{ asset('asset/img/portfolio/03@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/03@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="{{ asset('asset/img/portfolio/03.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #3 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding  web"> <!-- Works #4 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="{{ asset('asset/img/portfolio/04@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/04@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="{{ asset('asset/img/portfolio/04.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div> <!-- end Works #4 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding web "> <!-- Works #5 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="{{ asset('asset/img/portfolio/05@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/05@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="{{ asset('asset/img/portfolio/05.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div> <!-- end Works #5 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding app">  <!-- Works #6 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="{{ asset('asset/img/portfolio/06@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/06@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="{{ asset('asset/img/portfolio/06.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #6 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding web "><!-- Works #7 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="{{ asset('asset/img/portfolio/07@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/07@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="{{ asset('asset/img/portfolio/07.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #7 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding app"> <!-- Works #8 col 3 -->
                    <div class="box"> 
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="{{ asset('asset/img/portfolio/08@2x.jpg') }}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{ asset('asset/img/portfolio/08@2x.jpg') }}">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="{{ asset('asset/img/portfolio/08.jpg') }}" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div> 
                    </div>
                </div> <!-- end Works #8 col 3 -->
                
            </div> <!-- End Row -->

        </div> <!-- End Container-Fluid -->
    </div>

    <!-- Process Section
    ================================================== -->
    <div id="tf-process">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Procédure <span class="highlight"><strong>AgroMarket</strong></span></h2>
                <h5><em>Facilité et fluidité au rendez-vous</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>
        </div><!-- end container -->

        <div class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->
                <div class="vline"></div> <!--  Vertical Line -->
                <div id="process" class="row"> <!-- row -->

                    <div class="col-md-10 col-md-offset-1">

                        <div class="media process"> <!-- Process #1 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-search-plus"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Vous disposez de produit en grande ou moyenne quantité</h4>
                                <p>Vous êtes agriculteur, pêcheur ou élèveur et vous souhaiteriez obtenir une plage de client plus large .</p>
                            </div>
                        </div><!-- Process #1 -->

                        <div class="media process"> <!-- Process #2 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-edit"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mettez votre produit en ligne</h4>
                                <p>Connectez vous à travers la plateforme soit par le service web ou mobile ou appeler nos agents et joignez votre produit avec des photos et une description complète.</p>
                            </div>
                        </div><!-- Process #2 -->

                        <div class="media process"> <!-- Process #3 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Recevez une notification avec toutes les informations concernants la vente</h4>
                                <p>Des qu'un acheteur est intéressé par votre produit et qu'il passe une commande vous recevez via sms une notification concernant la procédure de vente.</p>
                            </div>
                        </div><!-- Process #3 -->

                        <div class="media process"> <!-- Process #4 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Livraison et Paiement</h4>
                                <p>Le service de livraison recupére le produit et vous terminer la transaction en recevant votre argent par wari,joni joni, orange money ou par virement bancaire</p>
                            </div>
                        </div><!-- Process #4 -->
                        
                    </div>

                </div> <!-- end row -->
            </div><!-- end container -->
        </div>  <!-- end fullwidth gray background -->
    </div>

    <!--  Pricing Section
    ================================================== -->
    <div id="tf-pricing">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Bon Plan <span class="highlight"><strong>Market</strong></span></h2>
                <h5><em>Profitez des différents Abonnements</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>

            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <div class="col-md-4 nopadding"><!-- Price table #1 -->
                            <div class="panel panel-default price"> <!-- pricing table wrapper -->
                                <div class="panel-heading">Pêche</div>
                                <div class="panel-body">
                                    <h1><sup>CFA</sup>250<small>/mois</small></h1> <!-- Plan Price -->
                                </div>

                                <!-- Plan Feature Lists -->
                                <ul class="list-unstyled">
                                    <li>Notifs sur le secteur</li>
                                    <li>Coupons de reduction</li>
                                    <li>1 Laivraison gratuites</li>
                                    
                                    <li>
                                        <button type="button" class="btn btn-primary btn-block tf-btn">Souscrire</button>
                                        <small class="text-uppercase"></small>
                                    </li>
                                </ul><!-- end Plan Feature Lists -->
                            </div><!-- end pricing table wrapper -->
                        </div><!-- end Price table #1 -->

                        <div class="col-md-4 nopadding"><!-- Price table #2 -->
                            <div class="panel panel-default price featured"><!-- pricing table wrapper -->
                                <div class="panel-heading">Agriculture</div>
                                <div class="panel-body">
                                    <h1><sup>CFA</sup>250<small>/mois</small></h1> <!-- Plan Price -->
                                </div>

                                <!-- Plan Feature Lists -->
                                <ul class="list-unstyled">
                                    <li>Notifs sur le secteur</li>
                                    <li>Coupons de reduction</li>
                                    <li>1 Laivraison gratuites</li>
                                    
                                    <li>
                                        <button type="button" class="btn btn-primary btn-block tf-btn">Souscrire</button>
                                        <small class="text-uppercase"></small>
                                    </li>
                                </ul><!-- end Plan Feature Lists -->
                            </div><!-- end pricing table wrapper -->
                        </div><!-- end Price table #2 -->

                        <div class="col-md-4 nopadding"> <!-- Price table #3 -->
                            <div class="panel panel-default price"> <!-- pricing table wrapper -->
                               <div class="panel-heading">Elevage</div>
                                <div class="panel-body">
                                    <h1><sup>CFA</sup>250<small>/mois</small></h1> <!-- Plan Price -->
                                </div>

                                <!-- Plan Feature Lists -->
                                <ul class="list-unstyled">
                                    <li>Notifs sur le secteur</li>
                                    <li>Coupons de reduction</li>
                                    <li>1 Laivraison gratuites</li>
                                    
                                    <li>
                                        <button type="button" class="btn btn-primary btn-block tf-btn">Souscrire</button>
                                        <small class="text-uppercase"></small>
                                    </li>
                                </ul><!-- end Plan Feature Lists -->
                            </div><!-- end pricing table wrapper -->
                        </div><!-- end Price table #3 -->

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div> <!-- end outer row -->
        </div><!-- end container -->
    </div>

    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Dernières <span class="highlight"><strong>News</strong></span></h2>
                <h5><em>Restez au courant de ce qui se passe dans votre secteur</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>
        </div>

        <div id="blog-post" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->
                    <div class="col-md-6"> <!-- Left content col 6 -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="#"> <!-- link to your post single page -->
                                      <img class="media-object" src="{{ asset('asset/img/blog/ag.png') }}" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small">January 14, 2015</p>
                                    <a href="#">
                                        <h5 class="media-heading"><strong>Préparation du Recensement National de l'Agriculture et de l'Elevage (RNAE)</strong></h5>
                                    </a>
                                    <p>La réalisation du Recensement National de l’Agriculture et de l’Elevage (RNAE) constitue un point de passage obligatoire pour renouveler les données de structure du secteur agricole, la production de données de référence et des bases de sondage pour des enquêtes périodiques et thématiques au cours de la décennie à venir.s</p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="#">par samba</a></li> <!-- meta author -->
                                    <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                    <li><a href="#">Plus</a></li> <!-- Plus link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="#"> <!-- link to your post single page -->
                                      <img class="media-object" src="{{ asset('asset/img/blog/ag.png') }}" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small">January 14, 2015</p>
                                    <a href="#">
                                        <h5 class="media-heading"><strong>Préparation du Recensement National de l'Agriculture et de l'Elevage (RNAE)</strong></h5>
                                    </a>
                                    <p>La réalisation du Recensement National de l’Agriculture et de l’Elevage (RNAE) constitue un point de passage obligatoire pour renouveler les données de structure du secteur agricole, la production de données de référence et des bases de sondage pour des enquêtes périodiques et thématiques au cours de la décennie à venir.s</p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="#">par samba</a></li> <!-- meta author -->
                                    <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                    <li><a href="#">Plus</a></li> <!-- Plus link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="#"> <!-- link to your post single page -->
                                      <img class="media-object" src="{{ asset('asset/img/blog/ag.png') }}" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small">January 14, 2015</p>
                                    <a href="#">
                                        <h5 class="media-heading"><strong>Préparation du Recensement National de l'Agriculture et de l'Elevage (RNAE)</strong></h5>
                                    </a>
                                    <p>La réalisation du Recensement National de l’Agriculture et de l’Elevage (RNAE) constitue un point de passage obligatoire pour renouveler les données de structure du secteur agricole, la production de données de référence et des bases de sondage pour des enquêtes périodiques et thématiques au cours de la décennie à venir.s</p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="#">par samba</a></li> <!-- meta author -->
                                    <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                    <li><a href="#">Plus</a></li> <!-- Plus link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->

                    </div> <!-- end Left content col 6 -->

                    <div class="col-md-6"> <!-- right content col 6 -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="#"> <!-- link to your post single page -->
                                      <img class="media-object" src="{{ asset('asset/img/blog/ag.png') }}" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small">January 14, 2015</p>
                                    <a href="#">
                                        <h5 class="media-heading"><strong>Préparation du Recensement National de l'Agriculture et de l'Elevage (RNAE)</strong></h5>
                                    </a>
                                    <p>La réalisation du Recensement National de l’Agriculture et de l’Elevage (RNAE) constitue un point de passage obligatoire pour renouveler les données de structure du secteur agricole, la production de données de référence et des bases de sondage pour des enquêtes périodiques et thématiques au cours de la décennie à venir.s</p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="#">par samba</a></li> <!-- meta author -->
                                    <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                    <li><a href="#">Plus</a></li> <!-- Plus link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="#"> <!-- link to your post single page -->
                                      <img class="media-object" src="{{ asset('asset/img/blog/ag.png') }}" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small">January 14, 2015</p>
                                    <a href="#">
                                        <h5 class="media-heading"><strong>Préparation du Recensement National de l'Agriculture et de l'Elevage (RNAE)</strong></h5>
                                    </a>
                                    <p>La réalisation du Recensement National de l’Agriculture et de l’Elevage (RNAE) constitue un point de passage obligatoire pour renouveler les données de structure du secteur agricole, la production de données de référence et des bases de sondage pour des enquêtes périodiques et thématiques au cours de la décennie à venir.s</p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="#">par samba</a></li> <!-- meta author -->
                                    <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                    <li><a href="#">Plus</a></li> <!-- Plus link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="#"> <!-- link to your post single page -->
                                      <img class="media-object" src="{{ asset('asset/img/blog/ag.png') }}" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small">January 14, 2015</p>
                                    <a href="#">
                                        <h5 class="media-heading"><strong>Préparation du Recensement National de l'Agriculture et de l'Elevage (RNAE)</strong></h5>
                                    </a>
                                    <p>La réalisation du Recensement National de l’Agriculture et de l’Elevage (RNAE) constitue un point de passage obligatoire pour renouveler les données de structure du secteur agricole, la production de données de référence et des bases de sondage pour des enquêtes périodiques et thématiques au cours de la décennie à venir.s</p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="#">par samba</a></li> <!-- meta author -->
                                    <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                    <li><a href="#">Plus</a></li> <!-- Plus link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->

                    </div><!-- end right content col 6 -->
                </div><!-- end row -->

                <div class="text-center">
                    <a href="#" class="btn btn-primary tf-btn color">En voir d'autres</a>
                </div>                
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div>

    <!-- Contact Section
    ================================================== -->
    <div id="tf-contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Vous Pouvez  <span class="highlight"><strong>Nous Joindre</strong></span></h2>
                <h5><em>Agromarket</em></h5>
                <div class="fancy"><span><img src="{{ asset('asset/img/apple-touch-icon.png') }}" alt="..."></span></div>
            </div>
        </div><!-- end container -->

        {{-- <div id="map">
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es"></script>
            <div style='overflow:hidden;height:440px;width:732px;'><div id='gmap_canvas' style='height:440px;width:732px;'></div><div><small><a href="http://googlemapsgenerator.com/fr/">Incluez une carte Google sur votre site</a></small></div><div><small><a href="https://sitederencontrebelge.be/">inscription 100% gratuite</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(14.6877953,-17.46182269999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.6877953,-17.46182269999997)});infowindow = new google.maps.InfoWindow({content:'<strong>AgroMarket</strong><br>Dakar Université Cheikh Anta Diop de Dakar,Corniche Ouest BP : 5085 Dakar-Fann<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div> --}}  <!-- google map -->

        <div class="container"><!-- container -->
            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <h4>Dakar Université Cheikh Anta Diop de Dakar,Corniche Ouest BP : 5085 Dakar-Fann</h4> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <h4>agromarket@gmail.com</h4><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <h4>+221 0000 0000</h4> <!-- phone no. -->
                            </div>
                        </div>

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->

            <div class="row text-center"> <!-- contact form outer row with centered text-->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->

                        <div class="row"> <!-- nested inner row -->

                            <!-- Input your name -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Votre Nom *" id="name" required data-validation-required-message="Svp votre nom.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your email -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Votre Email *" id="email" required data-validation-required-message="Svp votre email .">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your Phone no. -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                        </div><!-- end nested inner row -->

                        <!-- Message Text area -->
                        <div class="form-group"> <!-- Your email input -->
                            <textarea class="form-control" rows="7" placeholder="Message..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                        </div>
                        <button type="submit" class="btn btn-primary tf-btn color">Envoyé</button> <!-- Send button -->

                    </form><!-- end form wrapper -->
                </div><!-- end col 10 with offset 1 to centered -->
            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </div>

    <!-- Footer 
    ================================================== -->
    <div id="tf-footer">
        <div class="container"><!-- container -->
            <p class="pull-left">© 2017 agromarket. All rights reserved.</p> <!-- copyright text here-->
            <ul class="list-inline social pull-right">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li> <!-- Change # With your FB Link -->
                <li><a href="#"><i class="fa fa-twitter"></i></a></li> <!-- Change # With your Twitter Link -->
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li> <!-- Change # With your Google Plus Link -->
                {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> <!-- Change # With your Dribbble Link -->
                <li><a href="#"><i class="fa fa-behance"></i></a></li> <!-- Change # With your Behance Link --> --}}
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> <!-- Change # With your LinkedIn Link -->
                <li><a href="#"><i class="fa fa-youtube"></i></a></li> <!-- Change # With your Youtube Link -->
{{--                 <li><a href="#"><i class="fa fa-pinterest"></i></a></li> <!-- Change # With your Pinterest Link -->
 --}}            </ul>
        </div><!-- end container -->
    </div>
    


   