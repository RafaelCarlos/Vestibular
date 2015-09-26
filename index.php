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
                        <li>
                            <a class="page-scroll" href="#contact">Contato</a>
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
                        <form name="sentMessage" id="contactForm" method="POST" >
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



        <!--Sectio -->
        <section id="eu-indico">
            <div class="container">
                <div class="row">

                    <img alt=""  src="img/eu-indico-compressor.jpg" class="img-responsive" />
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
                                <a class='twitter-share-button' href='//twitter.com/share' rel='nofollow' title='tweet'></a></div></div>
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
