<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../../interfaces/bootstrap-5.1.3-dist/css/bootstrap.rtl.min.css"> -->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class=" table-striped table-hover table-sm table-bordered">
                        <?php
                        require_once("user.php");
                        $bbdd = new User();
                        $bbdd->listarUsuarios();
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>