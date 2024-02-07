<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("config.php");
    class User
    {
        protected $db = null;
        function __construct()
        {
            try {
                $this->db = new PDO(DNS, USER, PASSWORD);
            } catch (PDOException $e) {
                die("¡Error!: " . $e->getMessage() . "<br/>");
            }
        }
        function listarUsuarios()
        {
            try {
                $sql = "SELECT nickname,photo FROM user";
                $stm = $this->db->query($sql);
                $stm->execute();
                while ($fila = $stm->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>" . "<td>" . $fila['nickname']   . "</td>";
                    if ($fila['photo'] == null) {
                    } else {
                        echo  "<td>" . "<img src ='foto.jpg' >" . " </td> " . "</tr>";
                    }
                }
            } catch (PDOException $e) {
                echo ("¡Error! al ejecutar consulta: " . $e->getMessage() . "<br/>");
                //throw $th;
            }
        }

        public function getConBD()
        {
            return $this->db;
        }
        public function __destruct()
        {
            $this->db = null;
        }
    }

    ?>


</body>

</html>