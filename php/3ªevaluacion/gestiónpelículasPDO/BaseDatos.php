<?php
class BaseDatos
{

    protected $bd;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=bbdd_peliculas;charset=utf8';
        $usuario = 'cjristian';
        $pass = '2119';
        try {
            $this->bd = new PDO($dsn, $usuario, $pass);
        } catch (PDOException $e) {
            die("¡Error!" . "" . $e->getMessage() . "<br/>");
        }
    }
    public function __destruct()
    {
        $this->bd = null;
    }
    public function getBD()
    {
        return  $this->bd;
    }
    function getUser($id)
    {
        try {
            $sql = 'SELECT id_pelicula, caratula FROM pelicula WHERE id_pelicula = :par1';
            $q = $this->bd->prepare($sql);
            $q->execute(array(':par1' => $id));

            if ($q->rowCount() > 0) {
                $row = $q->fetch(PDO::FETCH_ASSOC);
                echo "ID de la película:" . $row['id_pelicula'] . "<br>";

                // Muestra la imagen usando la etiqueta <img>
                echo "<img src='" . $row['caratula'] . "' alt='Carátula de la película'>";
            } else {
                echo "No se encontró la película.";
            }
        } catch (PDOException $e) {
            die("Error al ejecutar la consulta" . " " . $e->getMessage());
        }
    }

    function getPeliculas($id)
    {
        try {
            $sql = 'SELECT i.nombre_actor FROM Interprete i, PeliculaInterprete a WHERE a.id_pelicula=:par1 and i.id_interprete = a.id_interprete';
            $q = $this->bd->prepare($sql);
            $q->execute(array(':par1' => $id));
            $q->setFetchMode(PDO::FETCH_ASSOC);

            $sql = 'SELECT titulo,anio_estreno,duracion_minutos FROM pelicula WHERE id:par1';
            $a = $this->bd->prepare($sql);
            $a->execute(array(':par1' => $id));
            return $a;
        } catch (PDOException $e) {

            die("Error al ejecutar  la consulta" . " " . $e->getMessage());
        }
    }
}
