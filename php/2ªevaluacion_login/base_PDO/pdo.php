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
        protected $db;
        function __construct()
        {
            $dns = 'mysql:host=localhost;dbname=cjristian_23';
            $usuario = 'cjristian';
            $pass = '2119';
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
    }
    $c1 = new conectaBD();
    var_dump($c1);
    ?>
</body>

</html>