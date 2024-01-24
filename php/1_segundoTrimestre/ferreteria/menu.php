<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        /* .color {
            background-color: black;
        } */
        body {
            background-color: green;
        }
    </style>

</head>

<body>

    <div class="color">

        <nav class="navbar navbar-expand-lg bg-black ">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">Ferreterias</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light disabled" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-light " href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="registrar.php">Registrar</a></li>
                                <li><a class="dropdown-item" href="listar.php">Ver stock</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Hola</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Contacto</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>