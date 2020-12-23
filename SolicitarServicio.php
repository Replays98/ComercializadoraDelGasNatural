<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Solicitar Servicio</title>

    <link rel="stylesheet" type="text/css" href="../Pagina/slide.css">
    <!-- Bootstrap core CSS -->
    <link href="../Pagina/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Pagina/css/business-frontpage.css" rel="stylesheet">
    <!-- CSS w3 Framework -->
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<!-- Header -->

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
        <div class="container">
            <img src="../LogoImagenNavBar.png" style="width:75px" height=75px>
            <a class="navbar-brand" href="Inicio.html">
                <FONT COLOR="#066FEE">Comercializadora DELGAS</FONT>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <li class="nav-item">
                        <a class="nav-link" href="SolicitarServicio.html">
                            <FONT COLOR="#066FEE">Solicitar Servicio
                                <span class="sr-only">(current)</span>
                            </FONT>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Inicio.html">
                            <FONT COLOR="#066FEE">Sobre Nosotros</FONT>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Servicios.html">
                            <FONT COLOR="#066FEE">Servicios</FONT>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Comentarios.html">
                            <FONT COLOR="#066FEE">Comentarios</FONT>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contacto.html">
                            <FONT COLOR="#066FEE">Ubicación de Oficinas</FONT>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-primary py-5   mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </header>

    <container>
       
            <div class="row" >
                 <center>
                    <div class="col-md-7 mb-6">
                        <h2>
                            <FONT FACE="impact" SIZE=6 COLOR="##020829"><b>¿Para que sirve este formulario?</b>
                        </h2>
                        </FONT>
                        <p style="text-align: justify;">
                            <FONT COLOR="#066FEE">Al rellenar este formulario, estarás enviando un correo electrónico las oficinas de la Comercializadora DELGAS de Reynosa o Tampico en Tamaulipas. Al momento de recibir tu correo, nos pondremos en contacto contigo para aclaración de dudas y para llevar a cabo el proceso de la petición de tu servicio. <b>NOTA IMPORTANTE: LAS OFICINAS DE REYNOSA Y TAMPICO SON LAS RESPONSABLES DE LAS SIGUIENTES CIUDADES:</b>                                       
                            </FONT>
                        </p>
                        <img src="../Copia de Reynosa_.png" style="width: 800px" height="600px">
                    </div>
                <div class="col-md-4 mb-4 w3-panel  w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border-blue">
                    <form method='POST' class="w3-container">
                        <label>
                            <FONT FACE="aria-label" SIZE=5 COLOR="#066FEE"><b>Nombre completo:</b></FONT>
                        </label>
                        <input class="w3-input w3-border w3-light-grey" name="NombreC" type="text">

                        <label>
                            <FONT FACE="aria-label" SIZE=5 COLOR="#066FEE"><b>Dirección del domicilio:</b></FONT>
                        </label>
                        <input class="w3-input w3-border w3-light-grey" name="Direccion" type="text">

                        <label>
                            <FONT FACE="aria-label" SIZE=5 COLOR="#066FEE"><b>Teléfono celular:</b></FONT>
                        </label>
                        <input class="w3-input w3-border w3-light-grey" name="TelCel" type="text"maxlength="10">

                        <label>
                            <FONT FACE="aria-label" SIZE=5 COLOR="#066FEE"><b>Teléfono de casa:</b></FONT>
                        </label>
                        <input class="w3-input w3-border w3-light-grey" name="TelHome" type="text" maxlength="10">

                        <label>
                            <FONT FACE="aria-label" SIZE=5 COLOR="#066FEE"><b>Correo electrónico:</b></FONT>
                        </label>
                        <input class="w3-input w3-border w3-light-grey" name="email" type="email">

                        <label>
                            <FONT FACE="aria-label" SIZE=5 COLOR="#066FEE"><b>Servicio a solicitar:</b></FONT>
                        </label>

                        <select name="Servicios" id="Servicios" class="w3-input w3-border w3-light-grey">
                            <option value="Instalaciones de aprovechamiento de Gas natural">Instalaciones de aprovechamiento de Gas natural</option>
                            <option value="Servicio de calibraciones">Servicio de calibraciones</option>
                            <option value="Pruebas de hermeticidad">Pruebas de hermeticidad</option>
                            <option value="Reubicación de instalación interna">Reubicación de instalación interna</option>
                            <option value="Conexión de aparatos para gas natural">Conexión de aparatos para gas natural</option>
                            <option value="Conversión de Gas Natural a Gas LP (boiler,estufa,secadora,horno)">Conversión de Gas Natural a Gas LP (boiler,estufa,secadora,horno)
                            </option>
                        </select>
                        <br>
                        <label>
                            <FONT FACE="aria-label" SIZE=5 COLOR="#066FEE"><b>Ciudad:</b></FONT>
                        </label>
                        <select name="Ciudad" id="Ciudad" class="w3-input w3-border w3-light-grey">
                            <option value="Reynosa Tamaulipas">Reynosa Tamaulipas</option>
                            <option value="Tampico Tamaulipas">Tampico Tamaulipas</option>
                        </select>
                        <br>
                        <button class="w3-btn" COLOR="#066FEE" type="submit" name="btnRegistrar">Enviar información</button>
                    </form>
                </div>
               
            </center>
            </div>
        
    </container>



    <!-- Page Content -->

    <!-- /.container -->

    <!-- Footer --> <br>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Comercializadora DELGAS &copy;</p>
            <a href="https://www.facebook.com/antonio.corral.9212"><img src="../Facebook.png" alt="facebook" style="float: right; width: 30px "></a>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
include '../pagina/conexion.php';
if(isset($_POST['btnRegistrar']))
{
    $NombreC= $_POST['NombreC'];
    $Direccion= $_POST['Direccion'];
    $TelCel= $_POST['TelCel'];
    $TelHome= $_POST['TelHome'];
    $email= $_POST['email'];
    $services1= $_POST['Servicios'];
    $services2= $_POST['Ciudad'];
    $queryinsertar = "INSERT INTO `clientes`(`Nombre_Completo`, `Domicilio`, `Telefono_Celular`, `Telefono_Casa`, `Email`, `Servicio_Solicitado`, `Ciudad`) VALUES ('$NombreC','$Direccion','$TelCel','$TelHome','$email','$services1','$services2')";
    $ConsultaIngresar = mysqli_query($con, $queryinsertar);
    if($ConsultaIngresar){
        echo "<script> alert ('Su peticion a sido enviada correctamente')</script>";
    } else {
        echo "<script> alert ('Hubo un error al enviar su peticion, intentelo nuevamente') </script>";
    }
}