<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

       
    </style>
</head>

<body>
    <?php
    require "header.php";
   

    ?>
    <table>
        <tr>
            <th>CHAT</th>
            <th>LEIDOS</th>
            <th>MENSAJES</th>
        </tr>
        <?php
        $mifichero = fopen(__DIR__ . "/files/mensajes_aula_virtual.csv", "r");
        while ($linea = fgetcsv($mifichero)) {
            if (is_numeric($linea[0])) {
                if ($linea[1] == $_SESSION['idUsuario']) {
                    $mifichero1 = fopen(__DIR__ . "/files/users_aula_virtual.csv", "r");
                    while ($linea1 = fgetcsv($mifichero1)) {
                        if (is_numeric($linea1[0])) {
                            if ($linea[0] == $linea1[0]) {
                                ?><tr><td><?=$linea1[3]." ".$linea1[4]?></td><?php
                                
                            }
                        }
                    }
                    fclose($mifichero1);
                    if ($linea[2]=="true") {
                        echo"<td>Leido</td>";
                        echo"<td style='font-weight:bold';>$linea[3]</td>";
                        
                    }else{
                       echo "<td>No leido</td>";
                        echo"<td>$linea[3]</td>";
                    }
                }
            }
        }
        fclose($mifichero);


        ?>



    </table>
</body>

</html>