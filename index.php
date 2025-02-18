<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inicio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');    .cuerpos{
        float: left;
        margin-top: 20px;
        margin-left: 10px;
        text-align: center;
        font-family: 'Gluten', cursive;
    }
    a{
        font-family: 'Gluten', cursive;
    }
    .informacion{
        margin-top: 22pc;
        width: 100%;
        height: 400px;
        background-image:url("images/fondo.png");
    }
    .redes, .contacto, .horario{
        width: 24%;;
        height: 300px;
        float: left;
        margin-top: 50px;
        margin-left: 7%;
        font-family: 'Gluten', cursive;
        color: white;
        text-align: center;
    }
    </style>
</head>
<body style="background:#FAE5D3">
    <div id="contenedor" >
        <div id="banner">
            <img src="images/banner.png" style="width:100%; height: 250px">
        </div>
        <div class="BarraNavegacion">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <a href="inicio.html" style="margin-left: 400px;">
                    <img src="images/home.png" width="50px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="inicio.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeria.html">Nuestra empresa</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="nuestraempresa.html" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Servicios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="rostro.html">Panaderia</a>
                                <a class="dropdown-item" href="ojos.html">Pasteleria</a>
                                <a class="dropdown-item" href="labios.html">Postres</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeria.html">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion.html">Inicie Sección</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="carrusel" style="margin-top: 20px; margin-left: 10%; margin-right: 10%">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="2000">
                        <img src="images/pandequeso.jpg " class="d-block w-100" width="80%" height="300px">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="images/pastel.jpg" class="d-block w-100" width="80%" height="300px">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="images/dulce.jpg" class="d-block w-100" width="80%" height="300px">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div id="bannerbienvenido" style="margin-left:10%; margin-right:10%;margin-top:20px">
            <img src="images/bienvenido.png" style="width:100%; height: 250px">
        </div>
        <div class="cuerpo" style="margin-top: 20px;">
            <div class="cuerpos" style="margin-left:10%">
                <iframe src="https://giphy.com/embed/q7GFqSX6m0tMPF8msF" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
            </div>
            <div class="cuerpos" style="width: 480px;height: 300px">
                <h3>La empresa se llama Pasteleria MyE, venta y preparación de almojábanas, pandequesos, todo tipo de pan, pastelería y otros
                    servicios para colegios, escuelas, banquetes, de consumo personal y demás.
                    Ubicados en el Sena de pedregal, con altos niveles de satisfacción.</h3>
            </div>
        </div>
        <div class="informacion">
            <div class="redes">
                <h2>Redes Sociales</h2>
                <img src="images/facebook.png" style="width: 50px; height:50px"><h2>FACEBOOK</h2>
                <img src="images/instagram.png" style="width: 50px; height:50px"><h2>INSTRAGRAM</h2>
            </div>
            <div class="contacto">
            <h2>Ubicación</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1402.092171473039!2d-75.56953142432347!3d6.301060003878885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f2604a9a52f%3A0xd27da03066a27ccd!2sCl.%20104%20%2368a20%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1632795133583!5m2!1ses!2sco" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="horario">
            <h2>Contáctenos</h2>
            <h4>Lun - Vie: 7:00 am - 7:00 pm
                Sabados: 7:00 am - 5:00 pm</h4>
            <h2>Domicilio</h2>
            <img src="images/repartidor.png" style="width: 50px; height:50px">
            <h4>3122278893</h4>
            <h4>3122269457</h4>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
</body>
</html>