<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class conectaBD
    {
        protected $db = null;
        function __construct()
        {
            $dns = 'mysql:host=localhost;dbname=ferreteria';
            $usuario = 'cjristian';
            $pass = '0!v1RMV_xq/Kidw(';
            try {
                $this->db = new PDO($dns, $usuario, $pass);
            } catch (PDOException $e) {
                die("¡Error!: " . $e->getMessage() . "<br/>");
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
        function listarTienda()
        {
            try {
                $sql = "SELECT name,address,pc FROM store";
                $sql->$this->db->query($sql);
                while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                    echo $fila['name'] . " " . $fila['address'] . $fila['pc'];
                }

            } catch (PDOException $e) {
                echo ("¡Error! al ejecutar consulta: " . $e->getMessage() . "<br/>");
                //throw $th;
            }

        }
        function borrarTienda($id)
        {
            try {
                $datos = array(':par2' => $id);
                $sql = "SELECT id FROM store WHERE  id=:par1";
                $sql->$this->db->query($sql);
                $sql = $this->db->prepare($sql);
                if ($sql->execute($datos)) {
                    $sql = "DELETE id FROM store WHERE  id=:par1";
                    $sql->$this->db->query($sql);
                } else {
                    echo "El id no esta en la tabla";
                }

            } catch (PDOException $pe) {
                die("Error al ejecutar orden select :" . $pe->getMessage());
            }
        }
        public function insertaFila($name, $adrdress, $pc) // Prepara y ejecuta consulta
        {
            $datos = array(':par1' => $name, ':par2' => $adrdress, ':par3' => $pc);
            $sql = ' INSERT INTO store (name,address,pc) VALUES ( :par1 , :par2 , :par3) ';
            $q = $this->db->prepare($sql);
            if ($q->execute($datos)) {
                echo "Insertado con exito";
            }else{
                echo"Hay un error";
            }
        }
    }
    $c1 = new conectaBD();
    var_dump($c1);
    $c1->listarTienda();
    ?>
</body>

</html>