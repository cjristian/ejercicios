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
                echo "<tr><td>" . $fila['nickname']   . "</td>";
                if ($fila['photo'] == null) {
                    echo "<td><img class='w-25 p-3' src='". $this->obtenerImagen($fila['id']) . "'></td></tr>";
                } else {
                    echo  "<td><img class='w-25 p-3' src ='foto.jpg'></td></tr>";
                }
            }
        } catch (PDOException $e) {
            echo ("¡Error! al ejecutar consulta: " . $e->getMessage() . "<br/>");
            //throw $th;
        }
    }
    function obtenerImagen($id)
    {
        $stmt = $this->db->prepare("SELECT photo FROM user WHERE id = :id");
        if ($stmt->execute([':id', $id])) {
            $row = $stmt->fetch();
            header('Content-Type: image/png');
            return $row['photo'];
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
