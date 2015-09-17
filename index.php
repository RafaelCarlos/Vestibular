<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistemas de Informação - Faculdade Católica do Tocantins</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/agency.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript">
            /* Máscaras ER */
            function mascara(o, f) {
                v_obj = o
                v_fun = f
                setTimeout("execmascara()", 1)
            }
            function execmascara() {
                v_obj.value = v_fun(v_obj.value)
            }
            function mtel(v) {
                v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
                v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
                return v;
            }
            function id(el) {
                return document.getElementById(el);
            }
            window.onload = function () {
                id('phone').onkeyup = function () {
                    mascara(this, mtel);
                }
            }
        </script>
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Sistemas de Informação</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <!--                        <li>
                                                    <a class="page-scroll" href="#services">Services</a>
                                                </li>-->
                        <!--                        <li>
                                                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="#about">About</a>
                                                </li>-->
                        <li>
                            <a class="page-scroll" href="#contact">Contato</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Time</a>
                        </li>                        
                        <li>
                            <a class="page-scroll" href="#eu-indico">Eu Indico</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <!--        <header>
                    <div class="container">
                        <div class="intro-text">
                            <a href="#contact" class="page-scroll btn btn-xl">Seja Bem-Vindo</a>
                        </div>
                    </div>
                </header>-->


        <!-- Services Section -->
<!--        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Services</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Portfolio Grid Section -->
<!--        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Portfolio</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/rincon.png" class="img-responsive" alt="">
                                                         <object width="425" height="350">
                                                            <param name="movie" value="https://www.youtube.com/watch?v=o2pSLK4zjh8" />
                                                            <embed src="https://www.youtube.com/watch?v=o2pSLK4zjh8" type="application/x-shockwave-flash" width="425" height="350" />
                                                        </object>
                                                        <iframe allowfullscreen width="853" height="480" src="https://www.youtube.com/watch?v=o2pSLK4zjh8" frameborder="0" allowfullscreen></iframe>
                            <video src="https://www.youtube.com/watch?v=o2pSLK4zjh8" alt=""></video>
                        </a>
                        <div class="portfolio-caption">
                            <h4>Professor da Católica tem projeto tecnológico premiado</h4>
                            <p class="text-muted">Graphic Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Startup Framework</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Treehouse</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Golden</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Escape</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Dreams</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- About Section -->
<!--        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">About</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2009-2011</h4>
                                        <h4 class="subheading">Our Humble Beginnings</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>March 2011</h4>
                                        <h4 class="subheading">An Agency is Born</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>December 2012</h4>
                                        <h4 class="subheading">Transition to Full Service</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>July 2014</h4>
                                        <h4 class="subheading">Phase Two Expansion</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>Be Part
                                        <br>Of Our
                                        <br>Story!</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>-->



        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Entre em contato conosco</h2>
                        <h3 class="section-heading">Venha construir o seu futuro.</h3> 
                        <h4 class="section-heading">Faça Sistemas de Informação!</h4> <br/> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" method="POST" action="valida.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Seu Nome *" autofocus id="name" name="nome" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Seu Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Seu Telefone *" maxlength="15" id="phone" name="telefone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="texto-mensagem">
                                        <h5> Ao enviar este formulário, você estará concorrendo a uma inscrição para o Vestibular de Sistemas de Informação.</h5>
                                    </div>
                                    <!--                                    <div class="radio-editado">
                                                                            <h5><input   id="radiocond" type="radio" name="condicao" value="Sim">Sim </h5> 
                                                                            <h5> <input   id="radiocond" type="radio" name="condicao" value="Nao">Não</h5> 
                                                                            <p class="help-block text-danger"></p>
                                    
                                                                        </div> /.col-lg-6 -->
                                </div><!-- /.row -->
                            </div>
                            <!--                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <textarea class="form-control" placeholder="Your Message *" id="message" name="mensagem" required data-validation-required-message="Please enter a message."></textarea>
                                                                <p class="help-block text-danger"></p>
                                                            </div>
                                                        </div>-->
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button name="enviaEmail" type="submit" class="btn btn-xl">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--</div>-->
        </section>

        <section id="team" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Time Sistemas</h2>
                        <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/image1.jpg" class="img-responsive img-circle" alt="">
                            <h4>Rafael Carlos</h4>
                            <p class="text-muted">Desenvolvimento Web</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://twitter.com/rafaellcarloss"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/rafaellcarloss"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/profile/view?id=AAMAABY1EMcB14EvhlFLa2FSMKWr7qvavWdTjeo&trk=hp-identity-name"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/image2.jpg" class="img-responsive img-circle" alt="">
                            <h4>Professor Silvano Malfatti</h4>
                            <p class="text-muted">Gamer Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://twitter.com/MalfattiTO"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/silvano.malfatti"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/profile/view?id=AAMAABCze5MBsJLMIfvYavwQLUJIrVsInh98D7A&authType=name&authToken=EPnE&trk=hp-feed-member-photo"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/capistrano.png" class="img-responsive img-circle" alt="">
                            <h4>Carlos Henrique Capistrano</h4>
                            <p class="text-muted">Servidor Web</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/carloshenrique.costacapistrano.3"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/fernando.jpg" class="img-responsive img-circle" alt="">
                            <h4>Fernando Angelo</h4>
                            <p class="text-muted">Design</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://twitter.com/nandoangelo"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/nandoangelo"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/profile/view?id=ADEAAAbWjR0Bz7v8BAkxPVDQjl6Crrr74aGkrsM&authType=NAME_SEARCH&authToken=fvfO&locale=pt_BR&srchid=3725764551442375721065&srchindex=1&srchtotal=605&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3725764551442375721065%2CVSRPtargetId%3A114724125%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/jorge.jpg" class="img-responsive img-circle" alt="">
                            <h4>Jorge Lucas</h4>
                            <p class="text-muted">Desenvolvimento Web</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/jorgelucasl91"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/vinicio.jpg" class="img-responsive img-circle" alt="">
                            <h4>Vinicio Cerqueira</h4>
                            <p class="text-muted">Divulgação</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="https://twitter.com/viniciocm"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/vinicio.cerqueira"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/profile/view?id=AAkAAAk5OPkB_Wzze_mS8_AUBHIbpMHN1fYKDfc&authType=NAME_SEARCH&authToken=-jHv&locale=pt_BR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A154745081%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1442377126620%2Ctas%3AVinicio%20Cerque"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/junior.jpg" class="img-responsive img-circle" alt="">
                            <h4>Junior Alves</h4>
                            <p class="text-muted">Divulgação</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/junior.alves.5832"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted">Equipe de desenvolvimento do jogo e da página.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Sectio -->
        <section id="eu-indico">
            <div class="container">
                <div class="row">

                    <img alt=""  src="img/eu-indico.jpg" class="img-responsive" />
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; Sistemas de Informação - Faculdade Católica do Tocantins 2015</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/siCatolicaTocantins"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="http://www.catolica-to.edu.br">Católica do Tocantins</a>
                            </li>
                            <!--                        <li><a href="#">Terms of Use</a>
                                                    </li>-->
                        </ul>
                    </div>
                    <!-- CODIGO DO BOTÃO DE CURTIR DO FACEBOOK -->
                    <ul class="list-inline social-buttons">
                        <div style='width:205px;float:left;margin:1px 4px 2px 3px;height:20px;'>
        <!--                    <script type="text/javascript">
                        urlb = https://www.facebook.com/siCatolicaTocantins;
                            document.write("<iframe src='//www.facebook.com/plugins/like.php?href=" + urlb + "&amp;layout=button_count&amp;action=like&amp;font=arial' scrolling='no' frameborder='0' allowtransparency='true' style='width:90px;overflow:hidden;height:20px;'></iframe>");
                            </script>-->
        <!--                    <iframe src="http://www.facebook.com/plugins/like.php?href=https://www.facebook.com/siCatolicaTocantins&layout=standard&
                                    show_faces=false&width=380&action=like&colorscheme=light&height=25&locale=pt_BR" scrolling="no" frameborder="0" 
                                    style="border:none; overflow:hidden; width:250px; height:25px;" allowTransparency="true">
                                        
                            </iframe>-->

                            <!--             Facebook       <div id="fb-root"></div>
                                                <script>(function (d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id))
                                                            return;
                                                        js = d.createElement(s);
                                                        js.id = id;
                                                        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));</script>
                            
                                                <div class="fb-like" ></div>-->


                            <a name = "fb_share"></a>
                            <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script> 

                            <script src='//platform.twitter.com/widgets.js' type='text/javascript'>
                            </script>
                            <div style='float:left;width:110px;'>
                                <a class='twitter-share-button' data-via='meuusuario' href='//twitter.com/share' rel='nofollow' title='tweet'></a></div></div>
                    </ul>
                </div>
            </div>
        </footer>





        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/agency.js"></script>

    </body>

</html>
