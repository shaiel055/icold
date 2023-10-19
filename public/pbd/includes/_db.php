<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "tienda_unid";
    public $pdo; // Declaramos la propiedad públicamente

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->pdo = new PDO($dsn, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // No se debe exponer la instancia de PDO al ámbito global aquí
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            die();
        }
    }

    public function ejecutarConsulta($sql, $parametros = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);
            return $stmt;
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return null;
        }
    }
}

// Crear una instancia de la clase Database
$database = new Database();
$pdo = $database->pdo; // Ahora puedes acceder a la propiedad $pdo
?>