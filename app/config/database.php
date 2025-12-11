<?php

class Database
{
    private $host = "localhost";
    private $user = "caiojo79_admuser";
    private $pass = "261456Caio*josef";
    private $db = "caiojo79_geradorderoteiros";

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        if ($this->conn->connect_error) {
            die("Erro ao conectar ao MySQL: " . $this->conn->connect_error);
        }

        // força charset UTF-8 (importante!)
        $this->conn->set_charset("utf8mb4");
    }
}
