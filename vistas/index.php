<?php session_start();
if(!isset($_SESSION['inicio'])){


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SpaceLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="../assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="login-container">

        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">

                           Inicio de sesion
                        </h3>      
                    </div>
                    <div class="panel-body">
                       <p>Ingrese los datos para acceder a su cuenta</p>
                        <form class="form-horizontal" role="form" action="../controladores/controllerlogin.php?accion=inicio" method="post">
                            <div class="form-group">
                                <?php if(!empty($_GET['respuesta'])){ ?>
                                    <?php if ($_GET['respuesta'] == "error"){ ?>
                                        <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>el usuario o la contraseña son incorrectos.</div>
                                    <?php }else {?>

                                    <?php } ?>
                                <?php } ?>
                                    <label class="col-sm-10 ">Tipo de usuario</label>
                                    <div class="col-sm-12">
                                        <label class="radio-inline">
                                            <input class="icheck" type="radio" checked="" value="profesor" name="tipo">Profesor</label>
                                        <label class="radio-inline">
                                            <input class="icheck" type="radio" value="estudiante" name="tipo">Estudiante</label>
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="usuario">

                                </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="contraseña">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-block" value="ingresar">
                                    <hr />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Global JS-->
    <script src="../assets/js/jquery-1.10.2.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="../assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="../assets/js/application.js"></script>
           <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46627904-1', 'authenticgoods.co');
        ga('send', 'pageview');

</script>
</body>

</html>
<?php  }
else{
    header("location:history.back()");

} ?>